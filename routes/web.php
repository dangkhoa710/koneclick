<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\ItemTopicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyCommentController;
use App\Http\Controllers\CrawlController;


//trang chủ
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('show-topic', function () {
    return view('page.show_list_item_topic');
});


//admin - login - dashboard
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/admin-logout',[AdminController::class,'logout']);


//admin - news - upload - edit - delete - update
Route::get('/add-news',[NewsController::class,'show_add_news']);
Route::get('/edit-news/{news_id}',[NewsController::class,'show_edit_news']);
Route::get('/del-news/{news_id}',[NewsController::class,'show_del_news']);
Route::get('/list-news',[NewsController::class,'show_list_news']);


Route::post('/save-news',[NewsController::class,'process_save_news']);
Route::post('/update-news/{news_id}',[NewsController::class,'process_update_news']);

Route::post('/index-show-news',[NewsController::class,'index_show_news'])->name('index-show-news');
//Route::get('/index-hidden-news/{news_id}',[NewsController::class,'index_hidden_news']);



//admin-topic-add-edit-del-update
Route::get('/add-topic',[TopicController::class,'show_add_topic']);
Route::get('/edit-topic/{topic_id}',[TopicController::class,'show_edit_topic']);
Route::get('/del-topic/{topic_id}',[TopicController::class,'show_del_topic']);
Route::get('/list-topic',[TopicController::class,'show_list_topic']);


Route::post('/save-topic',[TopicController::class,'process_save_topic']);
Route::post('/update-topic/{topic_id}',[TopicController::class,'process_update_topic']);


//admin-itemtopic-add-edit-del-update
Route::get('/add-item-topic',[ItemTopicController::class,'show_add_item_topic']);
Route::get('/edit-item-topic/{item_topic_id}',[ItemTopicController::class,'show_edit_item_topic']);
Route::get('/del-item-topic/{item_topic_id}',[ItemTopicController::class,'show_del_item_topic']);
Route::get('/list-item-topic',[ItemTopicController::class,'show_list_item_topic']);


Route::post('/save-item-topic',[ItemTopicController::class,'process_save_item_topic']);
Route::post('/update-item-topic/{item_topic_id}',[ItemTopicController::class,'process_update_item_topic']);

Route::post('/index-show-item-topic',[ItemTopicController::class,'index_show_item_topic'])->name('index-show-item-topic');
//Route::get('/index-hidden-item-topic/{item_topic_id}',[ItemTopicController::class,'index_hidden_item_topic']);

//hiển thị tin theo item topic
Route::get('/show-list-item-topic-index/{item_topic_slug}',[ItemTopicController::class,'show_list_item_topic_index']);

//xem chi tiết tin tức
Route::get('/detail-news/{news_slug}',[NewsController::class,'details_news']);

//user đăng ký, đăng nhập và đăng xuất
Route::get('/show-login',[UserController::class,'show_login']);
Route::get('/show-dangky',[UserController::class,'show_dangky']);

Route::post('/user-dangky',[UserController::class,'dangky']);
Route::post('/user-login',[UserController::class,'login']);

Route::get('/user-logout',[UserController::class,'logout']);


//bình luận
Route::post('/save-cmt/{user_id}/{news_id}',[CommentController::class,'save_cmt']);

//reply bình luận
Route::post('/save-reply-cmt/{user_id}/{news_id}/{cmt_id}',[CommentController::class,'save_reply_cmt']);

//tìm kiếm
Route::post('/search',[ItemTopicController::class,'xuli_search']);

//doi_theme
Route::post('/doigiaodien',[HomeController::class,'doitheme'])->name('doigiaodien');

//tài khoản
Route::get('/list-account',[UserController::class,'list_account']);
Route::get('/del-acc/{id}',[UserController::class,'del_acc']);



