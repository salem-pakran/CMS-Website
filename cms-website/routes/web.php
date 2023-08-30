<?php


use App\Http\Controllers\BaseController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Contactcontrol;
use GuzzleHttp\Middleware;
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



Route::get('/',[BaseController::class,'home']);
Route::get('/services',[BaseController::class,'services']);
Route::get('/company',[BaseController::class,'company']);
Route::get('/contact',[BaseController::class,'contact_us']);


Route::get('/admin',[admincontroller::class,'index'])-> name('login');
Route::post('/admin',[admincontroller::class,'mekellogin']);


Route::group(['middleware' => 'auth:admin'],function(){

Route::get('dashbord',[admincontroller::class,'dashbord'] );

});

//middleware
Route::get('page-add', [Pagecontroller::class,'AddPage'])->name('page-add');
Route::post('page-create', [Pagecontroller::class,'CreatePage'])->name('page-create');
Route::get('/company-page-add', [Pagecontroller::class,'ourcompany'])->name('company.page.add');
Route::get('/services-page-add', [Pagecontroller::class,'services'])->name('services.page.add');

//post routes
Route::get('/post-show', [Postcontroller::class,'showAll'])->name('post-show');
Route::get('/post-show-company', [Postcontroller::class,'showCompany'])->name('post-show-company');
Route::get('/post-show-home', [Postcontroller::class,'showHome'])->name('post.show.home');
Route::get('/post-show-service', [Postcontroller::class,'showService'])->name('post-show-service');
Route::get('/post-add', [Postcontroller::class,'create'])->name('post-add');
Route::get('/post-edit/{post_id?}', [Postcontroller::class,'create'])->name('post-edit');
//Route::get('/edit/{post_id?}', [Postcontroller::class,'edit'])->name('edit');
Route::post('/post-add/{post_id?}', [Postcontroller::class,'store'])->name('post-store');
Route::post('/post-delete', [Postcontroller::class,'delete'])->name('post-delete');

Route::get('/contact-show', [Contactcontrol::class,'show'])->name('admin.contact.show');
Route::post('/contact-add', [Contactcontrol::class,'contact_store'])->name('contact.store');


