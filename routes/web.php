<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return 'Hello world';
});

Route::get('about',function(){
    return 'About Page';
});

Route::get('profile',
[HomeController::class,'showprofile']);

Route::get('productlist',
[ProductController::class,'showproduct']);