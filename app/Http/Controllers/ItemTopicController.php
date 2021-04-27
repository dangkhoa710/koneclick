<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\ItemTopic;
use App\Models\Topic;

class ItemTopicController extends Controller
{
	public function show_add_item_topic(){
		$show_topic = DB::table('tbl_topic')->orderby('topic_id','desc')->get();
		return view('admin.show_add_item_topic')
		->with('show_topic', $show_topic);
		}

	public function process_save_item_topic(Request $request){



		$data = $request->all();
		$itemtopic = new ItemTopic();
		$itemtopic->item_topic_name = $data['item_topic_name'];
		$itemtopic->item_topic_slug = $data['item_topic_slug'];
		$itemtopic->item_topic_describe = $data['item_topic_describe'];
		$itemtopic->topic_id = $data['list_topic'];
		$itemtopic->item_topic_amount=0;
        $itemtopic->item_topic_index=0;
        $itemtopic->item_topic_color = $data['item_topic_color'];
        $itemtopic->item_topic_created_at = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
		$itemtopic->save();

		Session::put('message','	Thêm item topic thành công');
		return Redirect::to('add-item-topic');

		}

	public function show_list_item_topic(){
		$show_list_item_topic = DB::table('tbl_item_topic')
		->join('tbl_topic','tbl_topic.topic_id','=','tbl_item_topic.topic_id')
		->orderby('tbl_item_topic.item_topic_id','desc')->get();

		$manager_list_item_topic = view('admin.show_list_item_topic')->with('show_list_item_topic',$show_list_item_topic);
		return view('admin.khung')->with('show_list_item_topic',
		$manager_list_item_topic);
		}

	public function show_edit_item_topic($item_topic_id){
		$edit_topic =DB::table('tbl_topic')-> orderby('topic_id')->get();
		$edit_item_topic = ItemTopic::where('item_topic_id',$item_topic_id)->get();
		$manager_edit_item_topic = view('admin.show_edit_item_topic')
		->with('edit_item_topic',$edit_item_topic)
		->with('show_topic',$edit_topic);
		return view('admin.khung')->with('admin.edit_item_topic',$manager_edit_item_topic);
		}

	public function process_update_item_topic(Request $request,$item_topic_id){
		$data = $request->all();
		$itemtopic = ItemTopic::find($item_topic_id);
		$itemtopic->item_topic_name = $data['item_topic_name'];
		$itemtopic->item_topic_describe = $data['item_topic_describe'];
		$itemtopic->item_topic_slug = $data['item_topic_slug'];
		$itemtopic->topic_id = $data['list_topic'];
		$itemtopic->item_topic_color = $data['item_topic_color'];
        $itemtopic->item_topic_updated_at = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $itemtopic->save();

		Session::put('message','	Cập nhật item thành công');
		return Redirect::to('list-item-topic');
		}

	public function show_del_item_topic($item_topic_id){
		DB::table('tbl_item_topic')->where('item_topic_id',$item_topic_id)->delete();
		Session::put('message','Xóa item topic thành công');
		return Redirect::to('list-item-topic');
		}

	public function show_list_item_topic_index(request $request,$item_topic_slug){
		$show_item = DB::table('tbl_item_topic')
		->orderby('item_topic_id','desc')
		->get();

		if($item_topic_slug !="covid"){

		$show_news_of_item_topic = DB::table('tbl_news')
		->join('tbl_item_topic','tbl_item_topic.item_topic_id','=','tbl_news.item_topic_id')
		->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
		->where('tbl_item_topic.item_topic_slug',$item_topic_slug)
		->paginate(8);

		$test = 0;

		}

		else{
		$show_news_of_item_topic = DB::table('tbl_covid')
		->get();
		$test = 1;
		}

		$item_topic_name = DB::table('tbl_item_topic')
		->where('tbl_item_topic.item_topic_slug',$item_topic_slug)
		->limit(1)
		->get();


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

		$doitheme2=DB::table('tbl_theme')->get();
		foreach($doitheme2 as $key => $a){
			$doitheme = $a->theme;
		}
		//_______
        $dem=0;
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


		return view('page.show_list_item_topic')
		->with('show_item',$show_item)
		->with('show_news_of_item_topic',$show_news_of_item_topic)
		->with('item_topic_name',$item_topic_name)
		->with('show_topic_index',$show_topic_index)
		->with('show_item_topic_index',$show_item_topic_index)
		->with('show_news_hot',$show_news_hot)
		->with('show_view',$show_view)
		->with('test',$test)
		->with('doitheme',$doitheme)
        //-------------------------
        ->with('link',$link)
        ->with('tieude',$tieude)
        ->with('mota',$mota)
        ->with('anh',$anh)
        ->with('i',$dem);
         //----------------------------

		}

	public function index_show_item_topic(Request $request){
		DB::table('tbl_item_topic')->where('item_topic_id',$request->item_topic_id)
		->update(['item_topic_index'=>$request->tt]);
        return response("success");

//		Session::put('message','Hiện tin thành công');
//		return Redirect::to('list-item-topic');
		}


	public function xuli_search(Request $s){
		$show_news_of_item_topic = DB::table('tbl_news')
		->join('tbl_item_topic','tbl_item_topic.item_topic_id','=','tbl_news.item_topic_id')
		->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
		->where('news_title','like','%'.$s->search.'%')
		->paginate(8);

		$show_item = DB::table('tbl_item_topic')
		->orderby('item_topic_id','desc')
		->get();

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

		$doitheme2=DB::table('tbl_theme')->get();
		foreach($doitheme2 as $key => $a){
			$doitheme = $a->theme;
		}
        $dem=0;
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

		return view('page.show_search')
		->with('show_item',$show_item)//
		->with('show_news_of_item_topic',$show_news_of_item_topic)//
		->with('show_topic_index',$show_topic_index)
		->with('show_item_topic_index',$show_item_topic_index)
		->with('show_news_hot',$show_news_hot)
		->with('show_view',$show_view)->with('doitheme',$doitheme)
        //-------------------------
        ->with('link',$link)
        ->with('tieude',$tieude)
        ->with('mota',$mota)
        ->with('anh',$anh)
        ->with('i',$dem);
		}
}
