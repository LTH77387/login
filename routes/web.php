<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    if(Auth::check()){
        if(Auth::user()->role=='admin'){
            return redirect()->route('adminHome');
        }else{
            return redirect()->route('userIndex');
        }

    }
})->name('dashboard');
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('adminHome',[AdminController::class,'adminHome'])->name('adminHome');
    Route::get('adminProfile',[AdminController::class,'adminProfile'])->name('adminProfile');
    Route::get('userProfileList',[AdminController::class,'userProfileList'])->name('userProfileList');
    Route::get('userProfileEdit/{id}',[AdminController::class,'userProfileEdit'])->name('userProfileEdit');
    Route::get('adminProfileEdit/{id}',[AdminController::class,'adminProfileEdit'])->name('adminProfileEdit');
    Route::post('adminProfileUpdate/{id}',[AdminController::class,'adminProfileUpdate'])->name('adminProfileUpdate');
    Route::get('adminCategoryPage',[AdminController::class,'adminCategoryPage'])->name('adminCategoryPage');
    Route::get('addCategory',[AdminController::class,'addCategory'])->name('addCategory');
    Route::post('categoryAdd',[AdminController::class,'categoryAdd'])->name('categoryAdd');
    Route::get('adminProductList',[AdminController::class,'adminProductList'])->name('adminProductList');
    Route::get('addProductPage',[AdminController::class,'addProductPage'])->name('addProductPage');
    Route::post('adminCategoryAdd',[AdminController::class,'adminCategoryAdd'])->name('adminCategoryAdd');
    Route::get('productListAdmin/{id}',[AdminController::class,'productListAdmin'])->name('productListAdmin');
    Route::get('categoryDelete/{id}',[AdminController::class,'categoryDelete'])->name('categoryDelete');
    Route::get('categoryUpdate/{id}',[AdminController::class,'categoryUpdate'])->name('categoryUpdate');
    Route::post('categoryEdit/{id}',[AdminController::class,'categoryEdit'])->name('categoryEdit');
    Route::get('productEdit/{id}',[AdminController::class,'productEdit'])->name('productEdit');
    Route::post('editProducts/{id}',[AdminController::class,'editProducts'])->name('editProducts');
    Route::get('productsDelete/{id}',[AdminController::class,'productsDelete'])->name('productsDelete');
});

// User Route group
Route::group(['prefix'=>'user','namespace'=>'User'],function(){
    Route::get('userIndex',[UserController::class,'userIndex'])->name('userIndex');
    Route::get('userHome',[UserController::class,'userHome'])->name('userHome');


    Route::post('userProfileDataChange/{id}',[UserController::class,'userProfileDataChange'])->name('userProfileDataChange');
    Route::get('userProfileShow/{id}',[UserController::class,'userProfileShow'])->name('userProfileShow');
    Route::get('userDataDelete/{id}',[UserController::class,'userDataDelete'])->name('userDataDelete');
    Route::get('userPasswordChangePage',[UserController::class,'userPasswordChangePage'])->name('userPasswordChangePage');
    Route::post('userRealPasswordChange/{id}',[UserController::class,'userRealPasswordChange'])->name('userRealPasswordChange');
    Route::get('userMoreDetails/{id}',[UserController::class,'userMoreDetails'])->name('userMoreDetails');

});
