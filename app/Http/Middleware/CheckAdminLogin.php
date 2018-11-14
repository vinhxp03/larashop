<?php

namespace App\Http\Middleware;

use Closure;
use User;
use Auth;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // nếu user đã đăng nhập
        if (Auth::check())
        {
            $user = Auth::user();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
            if ($user->admin == 1) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect('admin/login')->with('message', 'Bạn chưa có quyền truy cập vào trang quản trị!');
            }
        } else {
            return redirect('admin/login')->with('message', 'Vui lòng đăng nhập trước!');
        }
    }
}
