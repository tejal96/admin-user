<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ReferralController;


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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin 
Route::group(['prefix' => 'admin'],function(){
Route::get('/dashboard','App\Http\Controllers\Admin\DashboardController@index')->name('admin.dashboard');
}); 

// User 
Route::group(['middleware'=>['auth']],function(){
    Route::get('/user/home','App\Http\Controllers\User\DashboardController@index')->name('user.home');
   
// Referral
    Route::get('/addreferral','App\Http\Controllers\User\ReferralController@index')->name('refer.create');
});




    
//Auth::routes();


//Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

