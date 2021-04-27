<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatTblComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comment', function (Blueprint $table) {
            $table->id('cmt_id');
            $table->string('cmt_content');
            $table->integer('cmt_item_topic')->nullable();
            $table->integer('cmt_user')->nullable();
            $table->integer('news_id');
            $table->integer('id');
            $table->timestamps('cmt_created_at')->nullable();
            $table->timestamps('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_comment');
    }
}
