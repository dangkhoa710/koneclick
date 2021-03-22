<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblItemTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_item_topic', function (Blueprint $table) {
            $table->increments('item_topic_id');
             $table->string('item_topic_name');
             $table->string('item_topic_describe');
             $table->string('item_topic_amount');
             $table->string('topic_id');
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
        Schema::dropIfExists('tbl_item_topic');
    }
}
