<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use DB;
class MainController extends Controller
{
    function admin()
    {
    	return view('admincp.login');
    }
    function checklogin(Request $request)
    {
    	$this->validate($request, [
    		'email'  => 'required|email',
    		'password' => 'required|alphaNum|min:3'

    	]);

    	$user_data	= array(
    		'email' => $request->get('email'),
    		'password' => $request->get('password')
    	);
    	if (Auth::attempt($user_data)) 
    	{
    		return redirect('Admincp/successlogin');
    	}
    	else
    	{
    		return back()->with('error','Sai mật khẩu xin vui lòng thử lại !');
    	}
    }
    function successlogin()
    {
    	return view('admincp.successlogin');
    }
    function successlogin_add(Request $req)
    {
        $bill_name_sender = $req->input('customer_name');
    }
    function logout()
    {
    	Auth::logout();
    	return redirect('Admincp');
    }
    function register()
    {
        return view('admincp.register');
    }
    function insertregister(Request $req)
    {
        $name = $req->input('name');
        $users_number = $req->input('users_number');
        $password = Hash::make($req->input('password'));
        $email = $req->input('email');
        $province_users_name = $req->input('province_users_name');
        $district_users_name = $req->input('district_users_name');
        $ward_users_name = $req->input('ward_users_name');
        $user_address = $req->input('user_address');

        $data = array("name"=>$name,"users_number"=>$users_number,"password"=>$password,"email"=>$email,"province_users_name"=>$province_users_name,"district_users_name"=>$district_users_name,"ward_users_name"=>$ward_users_name,"user_address"=>$user_address);

        DB::table('users')->insert($data);
            
            return redirect('Register')->with('thongbao','Đăng ký thành khách hàng thành công');
    }
}
