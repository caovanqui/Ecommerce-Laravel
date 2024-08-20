<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('client.signup');
    }
    public function register(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Sử dụng bcrypt để mã hóa mật khẩu
            'role' => 0, // 0 là khách hàng
            'img' => 'default.jpg', // Hoặc giá trị mặc định khác
        ]);
    
        Auth::login($user);
    
        return redirect()->route('login');
    }
}
