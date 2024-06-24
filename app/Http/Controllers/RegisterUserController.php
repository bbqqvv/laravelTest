<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;  // Thêm dòng này để import mô hình User
use Illuminate\Support\Facades\Hash;  // Thêm dòng này để import Hash

class RegisterUserController extends Controller
{
    // Hiển thị form đăng ký
    public function register()
    {
        return view('auth.register');
    }

    // Xử lý dữ liệu từ form đăng ký
    public function store(Request $request)
    {
        // Xác thực dữ liệu từ request
        $request->validate([
            'name' => ['required', 'max:255', 'min:5', 'string'],
            'email' => 'required|email|unique:users',
            'password' => ['required', 'min:8', 'confirmed', Password::defaults()],
        ]);

        // Tạo người dùng mới
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Đăng nhập người dùng
        auth()->login($user);

        // Chuyển hướng người dùng tới trang danh sách bài viết
        return to_route('posts.index');
    }
}
