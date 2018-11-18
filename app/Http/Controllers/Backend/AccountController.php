<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Auth;

class AccountController extends Controller
{
    public function getLogin()
    {
    	if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('admin');
        } else {
            return view('backend.account.login');
        }
    }

    public function postLogin(Request $req)
    {
    	$this->validate($req,
    		[
    			'email' => 'required|email',
    			'pass' => 'required'
    		],
    		[
    			'email.required' => 'Email không được bỏ trống!',
    			'email.email' => 'Không đúng định dạng email!',
    			'pass.required' => 'Mật khẩu không được bỏ trống!',
    		]
    	);

    	$auth = ['email' => $req->email, 'password' => $req->pass];
    	if (Auth::attempt($auth)) {
    		return redirect('admin');
    	} else {
    		return redirect()->back()->with('message', 'Tài khoản hoặc mật khẩu không chính xác. Vui lòng thử lại!');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('admin/login');
    }

    public function postRegister(Request $req)
    {
    	$this->validate($req,
    		[
    			'email' => 'required|email|unique:users,email',
    			'name' => 'required',
    			'phone' => 'required|numeric',
    			'pass' => 'required|min:6|max:20',
    			're_pass' => 'required|same:pass',
    		],
    		[
    			'email.required' => 'Email không được bỏ trống!',
    			'email.email' => 'Không đúng định dạng email!',
    			'email.unique' => 'Email này đã có người sử dụng!',
    			'name.required' => 'Tên không được bỏ trống!',
    			'phone.required' => 'Số điện thoại không được bỏ trống!',
    			'phone.numeric' => 'Số điện thoại chỉ có thể là số!',
    			'pass.required' => 'Mật khẩu không được bỏ trống!',
    			'pass.min' => 'Mật khẩu có ít nhất 6 ký tự!',
    			'pass.max' => 'Mật khẩu nhiều nhất là 20 ký tự!',
    			're_pass.required' => 'Nhập lại mật khẩu không được bỏ trống!',
    			're_pass.same' => 'Nhập lại mật khẩu không chính xác!',
    		]
    	);

    	$user = new User();
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->phone = $req->phone;
    	$user->password = Hash::make($req->pass);
    	$user->admin = 0;
    	$user->save();
    	return redirect()->back()->with('success', 'Tạo tài khoản thành công!');
    }

    public function changePass(Request $req)
    {
        $old_pass = trim($req->old_pass);
        $new_pass = trim($req->new_pass);
        $re_pass = trim($req->re_pass);
        $err = [];
        
        // Mật khẩu cũ
        if ($old_pass == '') {
            $err['old_pass'] = 'Mật khẩu cũ không được bỏ trống!';
        } else {
            if (Auth::check()) {
                $user = User::where(['id' => Auth::id()])->first();
                if (Hash::check($old_pass, $user->password) === false) {
                    $err['old_pass'] = 'Mật khẩu cũ không chính xác!';
                }
            }
        }

        // Mật khẩu mới
        if ($new_pass == '') {
            $err['new_pass'] = 'Mật khẩu mới được bỏ trống!';
        } elseif (strlen($new_pass) < 6 || strlen($new_pass) > 20) {
            $err['new_pass'] = 'Mật khẩu phải từ 6-20 ký tự!';
        } elseif ($new_pass == $old_pass) {
            $err['new_pass'] = 'Mật khẩu mới không được trùng với mật khẩu cũ!';
        }

        // Nhập lại mật khẩu
        if ($re_pass == '') {
            $err['re_pass'] = 'Nhập lại mật khẩu không được bỏ trống!';
        } elseif ($new_pass !== $re_pass) {
            $err['re_pass'] = 'Nhập lại mật khẩu không chính xác!';
        }
        if (count($err) > 0) {
            return $err;
        }

        // Update password
        if ($req->isMethod('post')) {
            if (Hash::check($old_pass, $user->password)) {
                $password = bcrypt($new_pass);
                User::where(['id' => Auth::id()])->update(['password' => $password]);
                return ['success_password' => 'Thay đổi mật khẩu thành công!'];
            }
        }
    }
}
