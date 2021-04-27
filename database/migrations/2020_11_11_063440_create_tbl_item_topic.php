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
             $table->string('item_topic_name',255);
             $table->string('item_topic_describe',150);
             $table->string('item_topic_slug',100);
             $table->string('item_topic_amount',10);
             $table->integer('topic_id');
             $table->string('item_topic_index',10);
             $table->string('item_topic_color',10)->nullable();
             $table->timestamps('item_topic_created_at')->nullable();
             $table->timestamps('item_topic_updated_at')->nullable();
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
