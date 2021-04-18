<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Topic;

class HomeController extends Controller
{
    public function index(Request $request){

	$show_topic_index = DB::table('tbl_topic')->orderBy('topic_id','asc')->get();
	$show_item_topic_index = DB::table('tbl_item_topic')->orderBy('topic_id','desc')->get();

	$show_news_hot=DB::table('tbl_news')->where('news_index','1')
	->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
	->orderBy('news_id','desc')->limit(6)->get();

	$show_view=DB::table('tbl_news')
	->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
	->orderBy('news_view','desc')
	->limit(4)->get();

	$show_item_topic_hot = DB::table('tbl_item_topic')
	->where('item_topic_index',1)->orderBy('item_topic_id','desc')->get();

	$show_news_item = DB::table('tbl_news')
	->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
	->orderBy('news_id','desc')->get();

	$dem=0;

	$doitheme=DB::table('tbl_theme')->first();

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
	
	//call api method post su dung cho mota de truyen du lieu vao api
	//api ta ve luu vao bien tag name
	//-----------------
	//
	//-----------------------------------------------------------------------------------

	return view('home')
	->with('show_topic_index',$show_topic_index)
	->with('show_item_topic_index',$show_item_topic_index)
	->with('show_news_hot',$show_news_hot)
	->with('show_view',$show_view)
	->with('show_item_topic_hot',$show_item_topic_hot)
	->with('show_news_item',$show_news_item)
	->with('i',$dem)
	->with('doitheme',$doitheme->theme)
	->with('link',$link)

	//-------------------------
	->with('tieude',$tieude)
	->with('mota',$mota)
	->with('anh',$anh);
	//----------------------------

	$theme = DB::table('tbl_theme')->first();
	return view('elements.menu')
	->with('show_topic_index',$show_topic_index)
	->with('show_item_topic_index',$show_item_topic_index)
	->with('show_news_hot',$show_news_hot)
	->with('theme',$theme);

	return view('elements.sliderbarleft')
	->with('show_view',$show_view);

    }
    public function doitheme(Request $r)
    {

    	DB::table('tbl_theme')->update(['theme'=>$r->theme]);
        return response("success");
    }

}

