<?php
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

/* Route::get('/', function () {
    return view('welcome');
});
 */
 
Route::get('installer/index', 'InstallerController@index');

Route::get('/home', function(){
    return view('user::admin.auth.dashboard.index');
})->name('home');
Route::get('/contact', function(){
    return view('user::admin.auth.contact_us.index');
})->name('contact');
Route::get('/free_counters', function(){
    return view('user::admin.auth.countdowns.index');
})->name('free_counters');
Route::get('/count_login', function(){
    return view('user::admin.auth.countdowns.count_login.index');
})->name('count_login');
Route::get('/count_register', function(){
    return view('user::admin.auth.countdowns.count_register.index');
})->name('count_register');
Route::get('/privacy_policy', function(){
    return view('user::admin.auth.privacy-policy.index');
})->name('privacy_policy');
Route::get('/terms', function(){
    return view('user::admin.auth.terms_service.index');
})->name('terms');

Route::get('installer/requirements', 'InstallerController@serverRequirements');
Route::get('installer/configuration', 'InstallerController@environmentConfiguration');
Route::post('installer/configuration', 'InstallerController@postConfiguration');
Route::get('installer/complete', 'InstallerController@complete');