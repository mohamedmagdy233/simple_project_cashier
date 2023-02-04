<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which

|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('menu',[\App\Http\Controllers\MenuController::class,'index'])->name('menu');
// for image
Route::get('/image', [ImageController::class,'index'])->name('image.index');
Route::post('/image', [ImageController::class,'store'])->name('image.store');

// for Reservation_list
Route::get('Reservation_list',[\App\Http\Controllers\MenuController::class,'Reservation'])->name('Reservation.list');

// الاقسام
Route::get('section',[\App\Http\Controllers\SectionController::class,'index']);

//اضافه صنف
Route::post('sections/store',[\App\Http\Controllers\SectionController::class,'store'])->name('sections.store');

//تعديل صنف
Route::post('section/update',[\App\Http\Controllers\SectionController::class,'update']);

//حذف  صنف
Route::post('section/delete',[\App\Http\Controllers\SectionController::class,'destroy']);

//اضافه طلب

Route::get('add_booking',[\App\Http\Controllers\BookController::class,'index']);

// اضافه حجز

Route::post('book/store',[\App\Http\Controllers\BookController::class,'store']);

//التواصل مع النظام

Route::get('contact_system',[\App\Http\Controllers\ContactcController::class,'contact_system']);

//التواصل مع المبرمج

Route::get('contact_developer',[\App\Http\Controllers\ContactcController::class,'contact_developer']);

// حذف الطلب

Route::post('delete/book/{id}',[\App\Http\Controllers\BookController::class,'destroy']);


// تعديل الطلب

Route::get('book/edit/{id}',[\App\Http\Controllers\BookController::class,'edit']);

// تحديث الطلب

Route::post('update/book/{id}',[\App\Http\Controllers\BookController::class,'update']);


// طباعه الطلب

Route::get('print/book/{id}',[\App\Http\Controllers\BookController::class,'printBook']);













Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
