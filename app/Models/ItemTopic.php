<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTopic extends Model
{
    public $timestamps = false; //set time to false
	protected $fillable = ['item_topic_name', 'item_topic_describe','item_topic_slug','topic_id','item_topic_amount','item_topic_index','item_topic_created_at','item_topic_updated_at'];
	protected $primaryKey = 'item_topic_id';
	protected $table = 'tbl_item_topic';
}
