<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catagory;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\gig;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

use Session;
use Stripe;





class HomeController extends Controller

{
    public function redirect(){
        $userType = Auth::user()->userType;
        
        if($userType == '6'){
            return view('main_dashboard'); // in the last design the main dashboard for website
        }
        // else if($userType =='2') {
        //     return view('myapp.index');
        // }
        // else if($userType == '4'){
        //     return view('myapp.index');
        // }
        else{
            $gig=gig::all();
            return view('myapp.index',compact('gig'));
        }
    }







   public function products(){
    $product=product::paginate(12);
    return view('myapp.product-page',compact('product'));
   }


//    add catagory data
   public function add_catagory(Request $request){
    $data =new catagory;
    $data->Catagory_name=$request->category;
    $data->save();
    return redirect()->back();

   }
// show catagory data
   public function catagory(){
    $data=catagory::all();
    return view('myapp.category',compact('data'));
   }


//    delet catagory

public function delete_catagory($id){
    $data=catagory::find($id);

    $data->delete();
    return redirect()->back();

}
//show the page of product
public function addproduct(){
    $catagory=catagory::all();
    return view('myapp.add_product',compact('catagory'));
}
// save product in database
public function Add_product(Request $request){
    $product =new product;
    $product->title=$request->title;
    $product->description=$request->description;
    $product->price=$request->price;
    $product->quantity=$request->quantity;
    $product->catagory=$request->catagory;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('product',$imagename);

    $product->image=$imagename;
    
    $product->user_id = auth()->id();
    $product->save();
    return redirect()->back();

}
// show product in designer admin panel

public function show_product(){
    $product=product::all();
    return view('myapp.show_product',compact('product'));
}

// with this function delet product from user dashboard
public function delete_product($id){
    $product=product::find($id);
    $product->delete();

    return redirect()->back();
}

// with this update product from dashboarde
public function update_product($id){

    $product=product::find($id);
    $catagory=catagory::all();
    return view('myapp.update_product',compact('product','catagory'));

}

  public function update_product_confirm(Request $request , $id){
    $product=product::find($id);
    $product->title=$request->title; 
    $product->description=$request->description;
    $product->price=$request->price;
    $product->catagory=$request->catagory;
    $product->quantity=$request->quantity;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('product',$imagename);
    $product->image=$imagename;

    $product->save();

    return  redirect()->back();

  }

//   this is for show the product details 

public function  product_details($id){
    $product=product::find($id);
    return view('myapp.product_details',compact('product'));
}




// add cart 

public function add_cart(Request $request , $id){

    if(Auth::id()){
        $user=Auth::user();
         $product=product::find($id);
         $cart=new cart;
         $cart->name=$user->name;
         $cart->email=$user->email;
         $cart->phone=$user->phone;
         $cart->address=$user->address;
         $cart->user_id=$user->id;
         $cart->product_title=$product->title;
         $cart->price=$product->price * $request->quantity;
         $cart->image=$product->image;
         $cart->product_id=$product->id;
         $cart->quantity=$request->quantity;
         $cart->save();

         return redirect()->back();
     
     

    }
    else{
        return redirect('login');
    }
}



// cart page function 

public Function cart_page(){
    
    if(Auth::id()){
        $id=Auth::user()->id;
        $cart=cart::where('user_id', '=',$id)->get();
         return view('myapp.cart_page',compact('cart'));
    }
    else{
        return redirect('login');
    }
}

public function remove_cart($id){
    $cart=cart::find($id);
    $cart->delete();

    return redirect()->back();
      
}


public function  cash_order(){
    $user=Auth::user();
    $userid=$user->id;

    $data=cart::where('user_id', '=', $userid)->get();

    foreach($data as $data){
        $order =new order;
        $order->name=$data->name;

        $order->email=$data->email;

        $order->phone=$data->phone;

        $order->address=$data->address;

        $order->user_id=$data->user_id;

        $order->product_title=$data->product_title;

        $order->price=$data->price;

        $order->quantity=$data->quantity;

        $order->image=$data->image;

        $order->product_id=$data->product_id;

        $order->payment_status='cash on delivery';

        $order->delivery_status='processing';
        $order->user_id = auth()->id();

        $order->save();

        $cart_id=$data->id;

        $cart=cart::find($cart_id);

        $cart->delete();

    }

    return redirect()->back();

}



public function stripe($totalprice){
    return view('myapp.stripe',compact('totalprice'));  
}



public function stripePost(Request $request ,$totalprice)
{

    
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    Stripe\Charge::create ([
            "amount" => $totalprice * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Thanks for payment " 
    ]);
    $user=Auth::user();
    $userid=$user->id;

    $data=cart::where('user_id', '=', $userid)->get();

    foreach($data as $data){
        $order =new order;
        $order->name=$data->name;

        $order->email=$data->email;

        $order->phone=$data->phone;

        $order->address=$data->address;

        $order->user_id=$data->user_id;

        $order->product_title=$data->product_title;

        $order->price=$data->price;

        $order->quantity=$data->quantity;

        $order->image=$data->image;

        $order->product_id=$data->product_id;

        $order->payment_status='Paid';

        $order->delivery_status='processing';

        $order->save();

        $cart_id=$data->id;

        $cart=cart::find($cart_id);

        $cart->delete();

    }
    Session::flash('success', 'Payment successful!');
          
    return back();
}



// the order function

public function order(){
    $order=order::all();
 

    return view('myapp.order',compact('order'));
}




public function delivered($id){
    $order=order::find($id);
    $order->delivery_status="delivered";

    $order->payment_status="Paid";

    $order->save();

    return redirect()->back();

}


//the index page design part functions 



public function index(){
    $gig=gig::all();
    
    return view('myapp.index', compact('gig'));
}


public function add_design(Request $request)
{
    $gig = new gig;
    $gig->title = $request->Title;
    $gig->description = $request->description;
    $gig->les_price = $request->les_price;
    $gig->large_price = $request->large_price;
    $gig->add_information = $request->additional_info;
    
    $video=$request->video;
    $imagename=time().'.'.$video->getClientOriginalExtension();
    $request->video->move('product',$imagename);
    $gig->video=$imagename;

    $image1=$request->image2;
    $imagename2=time().'.'.$image1->getClientOriginalExtension();
    $request->image2->move('product',$imagename2);
    $gig->image=$imagename2;
    $gig->user_id = auth()->id();
    $gig->save();

    if ($request->hasFile("images")) {
        $files = $request->file("images");
        foreach ($files as $file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("/images"), $imageName);

            Image::create([
                'gig_id' => $gig->id,
                'image' => $imageName,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    

    return redirect()->back();
}

   
  //search 

  public function gig_search(Request $request){

    $search_gig=$request->q;
    $gig=gig::where('title','LIKE',"%$search_gig%")->get();

    return view('myapp.index',compact('gig'));

  }


  public function details(){
    $image = Image::all();
    
    
    $gig=gig::all();

    return view('myapp.design-details',compact('image','gig'));
  }
 
  
 



}
