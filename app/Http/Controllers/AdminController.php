<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
//        dd(123);
    	$admin_id = Session::get('admin_id');
	    if($admin_id){
		return Redirect::to('dashboard');
		}
		else{
		return view('admin.login');
		}
	}

	public function show_dashboard(){
	 	$this->AuthLogin();
		return view('admin.dashboard');
	 }

	public function dashboard(Request $request){
		$admin_username = $request->username;
		$admin_password = md5($request->password);

		$result = DB::table('tbl_user')->where([
		['email',$admin_username],
		['password',$admin_password],
		],['user_permision',"2"])->first();

		if($result){
		Session::put('admin_name',$result->name);
		Session::put('admin_id',$result->id);
		return Redirect::to('/dashboard');
		}else{

		Session::put('message','Mật khẩu hoặc tên tài khoản không đúng, nhập lại !');
		return Redirect::to('/admin');
		}

		}

	public function AuthLogin(){
		$admin_id = Session::get('admin_id');
		if($admin_id){
		return Redirect::to('dashboard');
		}
		else{
		return Redirect::to('admin')->send();}
		}

	public function logout(){
		Session::put('admin_name',null);
		Session::put('admin_id',null);
		return Redirect::to('/admin');

		}
}
