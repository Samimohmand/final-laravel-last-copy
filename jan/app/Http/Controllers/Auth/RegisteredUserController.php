<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function designer(Request $request){
      

        $user = new User();
            $user->name= $request->name;
            $user->email= $request->email;
            $user->phone= $request->phone;
            $user->address= $request->address;
            $user->userType=2;
            $user->password=Hash::make($request->password);
            if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $name=time().'.'.$extension;
            $file->move('product/' . $name);
                $user->image=$name;
            }
        

        $user->save();

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


    public function company(Request $request){
     
        $user = new User();
        $user->name= $request->companyName;
        $user->email= $request->email;
        $user->phone= $request->phone;
        $user->address= $request->address;
        $user->userType=1;
        $user->password=Hash::make($request->password);
        if($request->hasFile('image')){
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $name=time().'.'.$extension;
        $file->move('product/' . $name);
            $user->image=$name;
        }
    

    $user->save();

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
    

    }


    public function  simpleUser(Request $request){
     
        $user = new User();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->phone= $request->phone;
        $user->address= $request->address;
        $user->userType=0;
        $user->password=Hash::make($request->password);
       

    $user->save();

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
   
    }






}
