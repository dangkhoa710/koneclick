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
             $table->string('news_title',100);
             $table->string('news_slug',100);
             $table->text('news_content');
             $table->string('news_view',10);
             $table->string('news_like',10)->nullable();
             $table->string('news_cmt',10);
             $table->string('news_img_upload',100);
             $table->integer('topic_id');
             $table->integer('item_topic_id');
             $table->integer('news_index');
            $table->timestamps()->nullable();
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
