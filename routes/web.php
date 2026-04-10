<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Trang chủ tự động chuyển hướng về trang Đăng nhập
Route::get('/', function () {
    return redirect()->route('auth.showLogin');
});

// Các route hiển thị giao diện (GET)
// Khớp với hàm showRegister() và showLogin() trong Controller của bạn
Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.showRegister');
Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.showLogin');

// Route xử lý dữ liệu đăng ký (POST)
// Khớp với hàm handleRegister() và tên route bạn gọi ở lệnh redirect
Route::post('/register', [AuthController::class, 'handleRegister'])->name('auth.handleRegister');

// Route xử lý dữ liệu đăng nhập (POST) - Bạn cần viết thêm hàm handleLogin trong Controller sau
Route::post('/login', [AuthController::class, 'handleLogin'])->name('auth.handleLogin');