<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\personController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
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

Route::get('/', [HomeController::class, 'home'])
    ->name('home')
    ->middleware('auth');

Route::get('/about', function () {
    return view('welcome');
});
Route::get('/services', [HomeController::class,'index'])->name('index');
Route::get('/crud',[HomeController::class,'crud'])->name('crud');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/about', [HomeController::class,'policy'])->name('about');
// Route::get('/faqs', [HomeController::class,'faqs'])->name('faqs');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');
Route::get('/superadmin', [HomeController::class,'superadmin'])->name('superadmin');
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/signup', [HomeController::class,'signup'])->name('signup');
Route::get('/registerSave', [HomeController::class,'register'])->name('registerSave');
Route::get('loginMatch', [HomeController::class,'login2'])->name('loginMatch');
Route::get('logout', [HomeController::class,'logout'])->name('logout');


Route::get('/superadmin/post',[personController::class,'post'])->name('post');
Route::get('/formadd',[personController::class,'formadd'])->name('formadd');
Route::get('/formupdate/{id}',[personController::class,'formupdate'])->name('update.person');
Route::post('/addperson',[personController::class,'addperson'])->name('addperson');
Route::get('/person/{id}',[personController::class,'person'])->name('view.person');
Route::get('/delete/{id}', [PersonController::class, 'deleteperson'])->name('delete.person');
Route::get('/deleteall', [PersonController::class, 'deleteall'])->name('deleteall');
Route::post('/updateperson/{id}', [personController::class, 'updateperson'])->name('update1.person');



Route::resource('/superadmin/faqs', FaqController::class);
Route::get('/faqs-page', [FaqController::class, 'showFaqsPage'])->name('faqs.page');


Route::resource('/superadmin/gallery', GalleryController::class);


