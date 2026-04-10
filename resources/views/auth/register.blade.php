@extends('layouts.master')

@section('content')
<style>
    body {
        background-color: #f4f7f6;
    }
    .auth-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        background: #fff;
        overflow: hidden;
    }
    .auth-header {
        background: #1a1a1a;
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
    .btn-register {
        background: #1a1a1a;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
        transition: all 0.3s;
    }
    .btn-register:hover {
        background: #333;
        transform: translateY(-2px);
        color: #fff;
    }
    .btn-outline-custom {
        border: 1px solid #1a1a1a;
        color: #1a1a1a;
        border-radius: 10px;
        padding: 10px;
        font-weight: 600;
        transition: 0.3s;
        text-decoration: none;
        display: block;
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
                    <h3>Create Account</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('auth.handleRegister') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label small text-muted text-uppercase fw-bold">Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" placeholder="Nhập tên đăng nhập..." required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label small text-muted text-uppercase fw-bold">Họ và tên</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Nhập đầy đủ họ tên..." required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label small text-muted text-uppercase fw-bold">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                        </div>
                        
                        <button type="submit" class="btn btn-register w-100 shadow-sm mb-3">ĐĂNG KÝ NGAY</button>
                        
                        <div class="text-center mt-4">
                            <p class="text-muted small mb-2">Đã có tài khoản thành viên?</p>
                            <a href="{{ route('auth.showLogin') }}" class="btn btn-outline-custom">QUAY LẠI ĐĂNG NHẬP</a>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center mt-4 text-muted small">© 2026 Vương Ang Tú - EAUT Project</p>
        </div>
    </div>
</div>
@endsection