<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     public $timestamps = false; //set time to false
	protected $fillable = ['news_content','news_slug','topic_id','item_topic_id','news_title',
	'news_index','created_at','news_img_upload'];
	protected $primaryKey = 'news_id';
	protected $table = 'tbl_news';
}

