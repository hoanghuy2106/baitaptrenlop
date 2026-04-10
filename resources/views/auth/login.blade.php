@extends('layouts.master')

@section('content')
<style>
    body {
        background-color: #f4f7f6; /* Nền xám nhạt cực dịu mắt */
    }
    .auth-card {
        border: none;
        border-radius: 20px; /* Bo góc lớn hiện đại */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); /* Đổ bóng nhẹ nhàng */
        overflow: hidden;
        background: #fff;
    }
    .auth-header {
        background: #1a1a1a; /* Màu đen sang trọng */
        color: #fff;
        padding: 30px;
        border: none;
    }
    .auth-header h3 {
        font-weight: 700;
        letter-spacing: 1px;
        margin: 0;
        text-transform: uppercase;
        font-size: 1.25rem;
    }
    .form-control {
        border-radius: 10px;
        padding: 12px 15px;
        border: 1px solid #eee;
        background-color: #fafafa;
    }
    .form-control:focus {
        box-shadow: none;
        border-color: #1a1a1a;
        background-color: #fff;
    }
    .btn-login {
        background: #1a1a1a;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
        transition: all 0.3s;
    }
    .btn-login:hover {
        background: #333;
        transform: translateY(-2px);
        color: #fff;
    }
    .btn-register-link {
        color: #1a1a1a;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
    }
    .btn-outline-custom {
        border: 1px solid #1a1a1a;
        color: #1a1a1a;
        border-radius: 10px;
        padding: 10px;
        font-weight: 600;
        transition: 0.3s;
    }
    .btn-outline-custom:hover {
        background: #f8f8f8;
        color: #000;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card auth-card">
                <div class="card-header auth-header text-center">
                    <h3>Welcome Back</h3>
                </div>
                <div class="card-body p-4">
                    {{-- Thông báo --}}
                    @if(session('success'))
                        <div class="alert alert-success border-0 small">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger border-0 small">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('auth.handleLogin') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label small text-muted text-uppercase fw-bold">Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" placeholder="username..." required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small text-muted text-uppercase fw-bold">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                        </div>
                        
                        <button type="submit" class="btn btn-login w-100 shadow-sm mb-3">ĐĂNG NHẬP</button>
                        
                        <div class="text-center mt-4">
                            <p class="text-muted small mb-2">Bạn là thành viên mới?</p>
                            <a href="{{ route('auth.showRegister') }}" class="btn btn-outline-custom w-100">TẠO TÀI KHOẢN</a>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center mt-4 text-muted small">© 2026 Vương Ang Tú - EAUT Project</p>
        </div>
    </div>
</div>
@endsection