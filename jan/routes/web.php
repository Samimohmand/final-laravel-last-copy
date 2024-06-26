<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('myapp.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirect',[HomeController::class, 'redirect']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
require __DIR__.'/auth.php';


Route::view('/idea','myapp.ideapage');
// Route::view('products','myapp.product-page');
Route::view('designerdashboard','myapp.simpleD'); //it is not work see to all page an change this 
Route::view('second_dash','myapp.second_dashboard');
Route::view('bedrom','myapp.bedroom-page');
// Route::view('addproduct','myapp.add_product');
Route::view('bright','myapp.bright-light');
// Route::view('catagory','myapp.category');
// Route::view('details','myapp.design-details');
Route::view('furnature','myapp.furneture');
Route::view('keitchen','myapp.kitichen');
Route::view('lighting','myapp.light');
// Route::view('order','myapp.order');
Route::view('product-payment','myapp.paroduct-payment');
Route::view('setting','myapp.setting');
Route::view('shower','myapp.shower');
Route::view('upload','myapp.upload-design-page');
Route::view('wall','myapp.wall-page');
Route::view('watch','myapp.watch-page');
Route::view('vindow','myapp.window-page');

Route::view('register1','myapp.register1');

Route::get('/',[HomeController::class,'index']);
Route::get('/details',[HomeController::class,'details']);

Route::get('products',[HomeController::class,'products']);
Route::post('/add_catagory',[HomeController::class,'add_catagory']);
Route::get('catagory',[HomeController::class,'catagory']);

Route::get('/delete_catagory/{id}',[HomeController::class,'delete_catagory']);
//the product page show with this route
Route::get('/addproduct',[HomeController::class,'addproduct']);

//with this route add product to database
Route::post('/Add_product',[HomeController::class,'Add_product']);
// with this route show product on the comapny dashboard
Route::get('/show_product',[HomeController::class,'show_product']);

// with this route delete the product from dashboard of designer
Route::get('/delete_product/{id}',[HomeController::class,'delete_product']);

// with this route update the product of designer

Route::get('update_product/{id}',[HomeController::class,'update_product']);  // not work wy 
Route::post('update_product_confirm/{id}',[HomeController::class,'update_product_confirm']);  //not wrk why

// see the product details
Route::get('product_details/{id}',[HomeController::class,'product_details']);


Route::post('add_cart/{id}',[HomeController::class,'add_cart']);


//this two for cart
Route::get('/cart_page',[HomeController::class,'cart_page']);
Route::get('remove_cart/{id}',[HomeController::class,'remove_cart']);

// cash order 
Route::get('/cash_order',[HomeController::class,'cash_order']);




// the role route  three route for registeration 
route::post('/dl',[RegisteredUserController::class,'designer']);
route::post('/comp',[RegisteredUserController::class,'company']);
route::post('/user',[RegisteredUserController::class,'simpleUser']);





//this tow route use for payments 
Route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);

Route::post('stripe/{totalprice}', [HomeController::class,'stripePost'])->name('stripe.post');




Route::get('/order',[HomeController::class,'order']);


Route::get('/delivered/{id}',[HomeController::class,'delivered']);


// the index page design part


Route::post('/add_design',[HomeController::class,'add_design']);


//search route 

Route::get('/gig_search',[HomeController::class,'gig_search']);


