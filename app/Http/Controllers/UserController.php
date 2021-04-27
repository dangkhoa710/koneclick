<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;

session_start();

class UserController extends Controller
{
    public function show_login(){

	$show_topic_index = DB::table('tbl_topic')
	->orderBy('topic_id','asc')
	->get();

	$show_item_topic_index = DB::table('tbl_item_topic')
	->orderBy('topic_id','desc')
	->get();



	$show_news_hot=DB::table('tbl_news')->where('news_index','1')
	->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
	->orderBy('news_id','desc')->limit(6)->get();

	$show_view=DB::table('tbl_news')
	->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
	->orderBy('news_view','desc')
	->limit(4)->get();

	$doitheme=DB::table('tbl_theme')->first();
    $dem=0;
    //__________________________________________________________________
    include ('simple_html_dom.php');

    $html = file_get_html("https://vietnamnet.vn/vn/tin-moi-nong/");

    $link = array();

    $tieude=array();

    foreach ($html->find('h3[class=box-subcate-style4-title] a') as $key => $t) {
        $tieude[]=$t->title;
        $link[]="https://vietnamnet.vn/".$t->href;
    }

    $anh = array();
    foreach  ($html->find('div[class=box-subcate-style4 m-b-10 clearfix] a img') as $key => $a){
        $anh[]=$a->src;
    }

    $mota = array();
    foreach ( $html->find('div[class=f-14 box-subcate-style4-lead lead]') as $key => $mt){
        $mota[]=$mt->plaintext;
    }

	 return view('user.login')
	->with('show_news_hot',$show_news_hot)
	->with('show_topic_index',$show_topic_index)
	->with('show_item_topic_index',$show_item_topic_index)
	->with('show_view',$show_view)
	->with('doitheme',$doitheme->theme)
    ->with('i',$dem)
    ->with('link',$link)
    ->with('tieude',$tieude)
    ->with('mota',$mota)
    ->with('anh',$anh);
	}

	public function show_dangky(){

	$show_topic_index = DB::table('tbl_topic')
	->orderBy('topic_id','asc')
	->get();

	$show_item_topic_index = DB::table('tbl_item_topic')
	->orderBy('topic_id','desc')
	->get();



	$show_news_hot=DB::table('tbl_news')->where('news_index','1')
	->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
	->orderBy('news_id','desc')->limit(6)->get();

	$show_view=DB::table('tbl_news')
	->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
	->orderBy('news_view','desc')
	->limit(4)->get();

	$doitheme=DB::table('tbl_theme')->first();
    $dem=0;
    //__________________________________________________________________
    include ('simple_html_dom.php');

    $html = file_get_html("https://vietnamnet.vn/vn/tin-moi-nong/");

    $link = array();

    $tieude=array();

    foreach ($html->find('h3[class=box-subcate-style4-title] a') as $key => $t) {
        $tieude[]=$t->title;
        $link[]="https://vietnamnet.vn/".$t->href;
    }

    $anh = array();
    foreach  ($html->find('div[class=box-subcate-style4 m-b-10 clearfix] a img') as $key => $a){
        $anh[]=$a->src;
    }

    $mota = array();
    foreach ( $html->find('div[class=f-14 box-subcate-style4-lead lead]') as $key => $mt){
        $mota[]=$mt->plaintext;
    }

	 return view('user.dangky')
	->with('show_news_hot',$show_news_hot)
	->with('show_topic_index',$show_topic_index)
	->with('show_item_topic_index',$show_item_topic_index)
	->with('show_view',$show_view)
	->with('doitheme',$doitheme->theme)
    ->with('i',$dem)
    ->with('link',$link)
    ->with('tieude',$tieude)
    ->with('mota',$mota)
    ->with('anh',$anh);
	 ;
	}

	public function dangky(Request $request){

	$data = array();
	$data['name'] = $request->name;
	$data['email'] = $request->email;
	$data['user_permision']=0;
	$data['password'] = md5($request->password);
	$data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

	$result = DB::table('tbl_user')
	->where('email',$data['email'])
	->first();

	if($result){
		Session::put('message','Email bạn đăng ký bị trùng với người khác, mời bạn đăng ký email khác !');
		return Redirect::to('/show-dangky');
	}else{
		DB::table('tbl_user')->insert($data);
		Session::put('message','Đăng ký tài khoản thành công !');
		return Redirect::to('/show-dangky');
	}

	}

	public function login(Request $request){

	$email= $request->email;
	$password = md5($request->password);

	$result = DB::table('tbl_user')->where([
		['email',$email],
		['password',$password],
	])->first();

	if($result){
		Session::put('user_name',$result->name);
		Session::put('user_id',$result->id);
		return Redirect::to('/home');
	}else{
		Session::put('message','Mật khẩu hoặc tên tài khoản không đúng, nhập lại !');
		return Redirect::to('/show-login');
	}

	}

	 public function logout(){
	 Session::put('user_name',null);
	 Session::put('user_id',null);
	 return Redirect::to('home');

	 }
	 public function list_account()
     {
         $show_lists =  DB :: table('tbl_user')->orderBY('id','desc')->get();
          return view('admin.show_list_account')
              ->with('show_lists',$show_lists);
     }
     public function del_acc($id)
     {
         DB::table('tbl_user')->where('id',$id)->delete();
         return redirect::to('/list-account');
     }
}
