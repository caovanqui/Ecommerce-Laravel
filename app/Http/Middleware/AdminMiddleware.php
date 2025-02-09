<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!Auth::check()) {
            return redirect('/login'); // Chuyển hướng đến trang đăng nhập
        }

        // Kiểm tra nếu người dùng có quyền admin
        if (Auth::user()->role == 1) {
            return $next($request);
        }

        // Nếu người dùng không có quyền admin
        Session::flash('message', 'Bạn không có quyền truy cập vào trang quản trị');
        return redirect('/home'); // Chuyển hướng đến trang chủ
        // return $next($request);
    }
}
