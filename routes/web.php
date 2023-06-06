<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\LoginController;
use Illuminate\Support\Facades\Artisan;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    echo "Cache is cleared<br>";
    Artisan::call('route:clear');
    echo "route cache is cleared<br>";
    Artisan::call('config:clear');
    echo "config is cleared<br>";
    Artisan::call('view:clear');
    echo "view is cleared<br>";
});

Route::get('/',[HomeController::class,'home'])->name('home');
Route::post('save-contact-details',[HomeController::class,'save_contact_details'])->name('save-contact-details');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('website_development',[HomeController::class,'website_development'])->name('website_development');
Route::get('mobile_application_development',[HomeController::class,'mobile_application_development'])->name('mobile_application_development');
Route::get('ui_ux_graphic_design',[HomeController::class,'ui_ux_graphic_design'])->name('ui_ux_graphic_design');
Route::get('custom_software_development',[HomeController::class,'custom_software_development'])->name('custom_software_development');
Route::get('quality_assurance',[HomeController::class,'quality_assurance'])->name('quality_assurance');
Route::get('portfolio',[HomeController::class,'portfolio'])->name('portfolio');
//Route::get('blog',[HomeController::class,'blog'])->name('blog');
Route::get('about',[HomeController::class,'about'])->name('about');

Route::get('admin-login', [LoginController::class, 'login'])->name('admin-login');
Route::post('check-login', [LoginController::class, 'check_login'])->name('check-login');
