<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatTblNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_news', function (Blueprint $table) {
             $table->increments('news_id');
             $table->string('news_title');
             $table->string('news_content');
             $table->string('news_view');
             $table->string('news_like');
             $table->string('news_cmt');
             $table->string('news_img_upload');
             $table->string('topic_id');
             $table->string('item_topic_id');
             $table->string('news_index');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_news');
    }
}
