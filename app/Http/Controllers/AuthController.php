<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Hiển thị form đăng ký
    public function showRegister() {
        return view('auth.register');
    }

    // Xử lý lưu dữ liệu đăng ký (Sử dụng Eloquent ORM)
    public function handleRegister(Request $request) {
        $user = new Account(); 
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->password = Hash::make($request->password); 
        $user->save(); 

        return redirect()->route('auth.showLogin')->with('success', 'Đăng ký thành công!');
    }

    // Hiển thị form đăng nhập
    public function showLogin() {
        return view('auth.login');
    }
    // Thêm hàm này vào dưới hàm showLogin nhé Tú
    public function handleLogin(Request $request) {
        // Lấy thông tin từ form
        $credentials = $request->only('username', 'password');

        // Kiểm tra đăng nhập
        if (Auth::attempt($credentials)) {
            // Nếu đúng, chuyển hướng về trang chủ hoặc trang mong muốn
            return "Đăng nhập thành công! Chào mừng " . Auth::user()->fullname;
        }

        // Nếu sai, quay lại trang login kèm thông báo lỗi
        return back()->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng');
    }
}