<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\News;
use App\Models\Topic;
use App\Models\ItemTopic;
use Carbon\Carbon;
use File;



class NewsController extends Controller
{
    public function show_add_news(){
    	$show_topic = DB::table('tbl_topic')->orderby('topic_id','desc')->get();
    	$show_item_topic = DB::table('tbl_item_topic')->orderby('item_topic_id','desc')->get();
    	return view('admin.show_add_news')
    	->with('show_topic', $show_topic)
    	->with('show_item_topic', $show_item_topic);}

    public function process_save_news(Request $request){

		$data = array();
		$data['news_title'] = $request->news_title;
		$data['news_index'] = $request->news_index;
		$data['news_slug'] = $request->news_slug;
		$data['news_content'] = $request->news_content;
		$data['item_topic_id'] = $request->list_item_topic;
		$data['topic_id'] = $request->list_topic;
		$data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
		$data['news_view']=0;
		$data['news_cmt']=0;

		if ($request->file('news_upimg')->isValid()){
		// Lấy tên file
		$file_name = $request->file('news_upimg')->getClientOriginalName();
		// Lưu file vào thư mục upload với tên là biến $filename
		$request->file('news_upimg')->move('public/backend/img_title/',$file_name);
		}

		$data['news_img_upload'] = $file_name;

		DB::table('tbl_news')->insert($data);

		$lay_amount=DB::table('tbl_item_topic')->where('item_topic_id',$data['item_topic_id'])->get();
		foreach ($lay_amount as $key => $value) {
		$amount=$value->item_topic_amount;
		}

		$amount2=(int)($amount)+1;
		DB::table('tbl_item_topic')->where('item_topic_id',$data['item_topic_id'])
		->update(['item_topic_amount'=>$amount2]);



		Session::put('message','Thêm tin thành công');
		return Redirect::to('list-news');
 		}

	public function show_list_news(){
		$show_list_news = DB::table('tbl_news')
		->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
		->join('tbl_item_topic','tbl_news.item_topic_id','=','tbl_item_topic.item_topic_id')
		->orderby('tbl_news.news_id','desc')->get();


		$manager_list_news = view('admin.show_list_news')
		->with('show_list_news',$show_list_news);
		return view('admin.khung')
		->with('show_list_news',$manager_list_news);

		}

	public function show_edit_news($news_id){
		$edit_topic =DB::table('tbl_topic')-> orderby('topic_id')->get();
		$edit_item_topic =DB::table('tbl_item_topic')-> orderby('item_topic_id')->get();
		$edit_news = DB::table('tbl_news')->where('news_id',$news_id)->get();
		$manager_edit_news = view('admin.show_edit_news')
		->with('edit_news',$edit_news)
		->with('show_topic',$edit_topic)
		->with('show_item_topic',$edit_item_topic);
		return view('admin.khung')->with('admin.edit_news',$manager_edit_news);
		}

	public function process_update_news(Request $request,$news_id){
		// $data = $request->all();
		// $new = News::find($news_id);
		// $new->news_title = $data['news_title'];
		// $new->news_index = $data['news_index'];
		// $new->news_slug = $data['news_slug'];
		// $new->news_content = $data['news_content'];
		// $new->topic_id = $data['list_topic'];
		// $new->item_topic_id = $data['list_item_topic'];
		// $new->save();

		$data = array();
		$data['news_title'] = $request->news_title;
		$data['news_index'] = $request->news_index;
		$data['news_slug'] = $request->news_slug;
		$data['news_content'] = $request->news_content;
		$data['item_topic_id'] = $request->list_item_topic;
		$data['topic_id'] = $request->list_topic;
		$data['updated_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

		$file_cu = $request->tencu;


		if ($request->file('news_upimg')){
		File::delete('public/backend/img_title/'.$file_cu);
		// Lấy tên file
		$file_name = $request->file('news_upimg')->getClientOriginalName();
		// Lưu file vào thư mục upload với tên là biến $filename
		$request->file('news_upimg')->move('public/backend/img_title/',$file_name);
		$data['news_img_upload']=$file_name;}else{$data['news_img_upload']=$file_cu;}


		DB::table('tbl_news')->where('news_id',$news_id)->update($data);


		Session::put('message','Cập nhật tin thành công');
		return Redirect::to('list-news');
		}

	public function index_show_news(Request $r){
		DB::table('tbl_news')->where('news_id',$r->id)->update(['news_index'=>$r->tt]);

        return response("success");

		}

	public function show_del_news($news_id){
		$del_news = News::where('news_id',$news_id)->get();
		foreach ($del_news as $key => $del) {
			$ten=$del->news_img_upload;
			$iti=$del->item_topic_id;

		}
		File::delete('public/backend/img_title/'.$ten);


		$del_reply_comment = DB::table('tbl_reply_comment')

		->join('tbl_comment','tbl_comment.cmt_id','=','tbl_reply_comment.cmt_id')
		->where('news_id',$news_id)->delete();


		DB::table('tbl_comment')->where('news_id',$news_id)->delete();

		$lay_amount=DB::table('tbl_item_topic')->where('item_topic_id',$iti)->get();
		foreach ($lay_amount as $key => $value) {
			$amount=$value->item_topic_amount;
		}

		$amount2=(int)($amount)-1;
		DB::table('tbl_item_topic')->where('item_topic_id',$iti)
		->update(['item_topic_amount'=>$amount2]);


		DB::table('tbl_news')->where('news_id',$news_id)->delete();

		Session::put('message','Xóa tin thành công');
		return Redirect::to('list-news');
		}

	public function details_news($news_slug , Request $request){

		$show_topic = DB::table('tbl_topic')->orderby('topic_id','desc')->get();
		$show_item = DB::table('tbl_item_topic')->orderby('item_topic_id','desc')->get();

		$detail_news = DB::table('tbl_news')
		->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
		->join('tbl_item_topic','tbl_item_topic.item_topic_id','=','tbl_news.item_topic_id')
		->where('tbl_news.news_slug',$news_slug)->get();

		foreach($detail_news as $key => $value){
		$item_topic_id = $value->item_topic_id;
		$view=$value->news_view;
		}

		$view2=((int)($view))+1;
		DB::table('tbl_news')->where('news_slug',$news_slug)->update(['news_view'=>$view2]);

		$related_news = DB::table('tbl_news')
		->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
		->join('tbl_item_topic','tbl_item_topic.item_topic_id','=','tbl_news.item_topic_id')
		->where('tbl_item_topic.item_topic_id',$item_topic_id)->whereNotIn('tbl_news.news_slug',[$news_slug])->get();

		$show_topic_index = DB::table('tbl_topic')
		->orderBy('topic_id','asc')
		->get();

		$show_item_topic_index = DB::table('tbl_item_topic')
		->orderBy('topic_id','desc')
		->get();

		$show_news_hot=DB::table('tbl_news')->where('news_index','1')
		->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
		->orderBy('news_id','desc')->limit(6)->get();

		$show_cmt = DB::table('tbl_comment')
		->join('tbl_news','tbl_news.news_id','=','tbl_comment.news_id')
		->join('tbl_user','tbl_user.id','=','tbl_comment.id')
		->where('tbl_news.news_slug',$news_slug)->get();

		$show_reply_cmt = DB::table('tbl_reply_comment')
		->join('tbl_comment','tbl_comment.cmt_id','=','tbl_reply_comment.cmt_id')
		->join('tbl_news','tbl_news.news_id','=','tbl_comment.news_id')
		->join('tbl_user','tbl_user.id','=','tbl_reply_comment.id')
		->where('tbl_news.news_slug',$news_slug)->get();

		$dem_reply_cmt=DB::table('tbl_reply_comment')
		->join('tbl_comment','tbl_comment.cmt_id','=','tbl_reply_comment.cmt_id')
		->join('tbl_news','tbl_news.news_id','=','tbl_comment.news_id')
		->where('tbl_news.news_slug',$news_slug)->count();

		$show_view=DB::table('tbl_news')
		->join('tbl_topic','tbl_topic.topic_id','=','tbl_news.topic_id')
		->orderBy('news_view','desc')
		->limit(4)->get();

		$doitheme2=DB::table('tbl_theme')->get();
		foreach($doitheme2 as $key => $a){
			$doitheme = $a->theme;
		}
        //-----
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

        return view('page.show_detail_news')
		->with('topic',$show_topic)
		->with('item',$show_item)
		->with('news_detail',$detail_news)
		->with('relate',$related_news)
		->with('show_topic_index',$show_topic_index)
		->with('show_item_topic_index',$show_item_topic_index)
		->with('show_news_hot',$show_news_hot)
		->with('show_cmt',$show_cmt)
		->with('show_reply_cmt',$show_reply_cmt)
		->with('dem_reply_cmt',$dem_reply_cmt)
		->with('show_view',$show_view)
		->with('doitheme',$doitheme)
        ->with('tieude',$tieude)
            ->with('link',$link)
        ->with('mota',$mota)
        ->with('anh',$anh)
        ->with('i',$dem);
	}

}
