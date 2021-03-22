<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;
session_start();;

class CommentController extends Controller
{
    public function save_cmt(request $request,$user_id,$news_id){
        $so_cmt=DB::table('tbl_news')
        ->where('news_id',$news_id)
        ->get();
        foreach ($so_cmt as $key => $vl) {

            $socmt=$vl->news_cmt;
        }

        $dem_cmt=((int)($socmt))+1;

        DB::table('tbl_news')
        ->where('news_id',$news_id)
        ->update(['news_cmt' => $dem_cmt ]);      


    	$data = array();
    	$data['cmt_content']=$request->comment;
    	$data['id']=$user_id;
    	$data['news_id']=$news_id;
    	$data['cmt_created_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    	DB::table('tbl_comment')
        ->insert($data);

    	return Redirect::to('/detail-news/'.$request->slug);

    }

    public function save_reply_cmt(request $request,$user_id,$news_id,$cmt_id){

        $so_cmt=DB::table('tbl_news')
        ->where('news_id',$news_id)
        ->get();

        foreach ($so_cmt as $key => $vl) {

            $socmt=$vl->news_cmt;
        }

        $dem_cmt=((int)($socmt))+1;

        DB::table('tbl_news')
        ->where('news_id',$news_id)
        ->update(['news_cmt' => $dem_cmt ]);      

    	$data = array();
    	$data['reply_cmt_content']=$request->replycmt;
    	$data['id']=$user_id;
    	$data['cmt_id']=$cmt_id;
    	$data['reply_cmt_created_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    	DB::table('tbl_reply_comment')->insert($data);

    	return Redirect::to('/detail-news/'.$request->slug);

    }
}
