<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Topic;

class TopicController extends Controller
{
	public function show_add_topic(){
		return view('admin.show_add_topic');
		}

	public function process_save_topic(Request $request){
		$data = $request->all();
		$topic = new Topic();
		$topic->topic_name = $data['topic_name'];
		$topic->topic_describe = $data['topic_describe'];
		$topic->save();

		Session::put('message','	Thêm topic thành công');
		return view('admin.show_add_topic');
		}	


	public function show_list_topic(){


		$show_list_topic = Topic::orderBy('topic_id','DESC')->get();
		$manager_list_topic = view('admin.show_list_topic')
		->with('show_list_topic',$show_list_topic);
		return view('admin.khung')->with('show_list_topic',$manager_list_topic);
		}

	public function show_edit_topic($topic_id){
		$edit_topic = Topic::where('topic_id',$topic_id)->get();
		$manager_edit_topic = view('admin.show_edit_topic')->with('edit_topic',$edit_topic);
		return view('admin.khung')->with('admin.edit_topic',$manager_edit_topic);
		}

	public function process_update_topic(Request $request,$topic_id){
		$data = $request->all();
		$topic = topic::find($topic_id);
		$topic->topic_name = $data['topic_name'];
		$topic->topic_describe = $data['topic_describe'];
		$topic->save();
		Session::put('message','	Cập nhật topic thành công');
		return Redirect::to('list-topic');
		}


	public function show_del_topic($topic_id){
		DB::table('tbl_topic')->where('topic_id',$topic_id)->delete();
		Session::put('message','Xóa topic thành công');
		return Redirect::to('list-topic');
		}
}
