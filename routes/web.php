<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('index');
});
Route::get('/', [IndexController::class, 'orderByCity'])->name('orderByCity');

// Маршруты для Hotels
Route::get('/hotels', [HotelsController::class, 'hotels'])->name('hotels'); // Список отелей
Route::get('/hotel/{id}/review', [HotelController::class, 'showReview'])->name('showReview'); // Для отображения отзывов
Route::post('/hotel/{id}', [HotelController::class, 'create'])->name('hotel.create');  // Для создания отзыва для отеля по ID
Route::get('/hotel/{id}', [HotelsController::class, 'moreAboutHotel'])->name('aboutHotel');

// Регистрация и авторизация
Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');  

// Админ панель
Route::get('/admin', [AdminController::class, 'index'])->name('index');
Route::post('/admin', [AdminController::class, 'create'])->name('create');
Route::get('/hotels', [HotelsController::class, 'index'])->name('hotels');
Route::get('/admin', [AdminController::class, 'showPanel'])->name('showPanel');

// поиск
Route::get('/search', [IndexController::class, 'search'])->name('search');