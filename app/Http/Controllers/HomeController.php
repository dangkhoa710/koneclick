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

	return view('home')
	->with('show_topic_index',$show_topic_index)
	->with('show_item_topic_index',$show_item_topic_index)
	->with('show_news_hot',$show_news_hot)
	->with('show_view',$show_view)
	->with('show_item_topic_hot',$show_item_topic_hot)
	->with('show_news_item',$show_news_item)
	->with('i',$dem)
	;  

	return view('elements.menu')
	->with('show_topic_index',$show_topic_index)
	->with('show_item_topic_index',$show_item_topic_index)
	->with('show_news_hot',$show_news_hot); 

	return view('elements.sliderbarleft')
	->with('show_view',$show_view);

    }

}

