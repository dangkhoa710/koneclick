<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_topic', function (Blueprint $table) {
            $table->increments('topic_id');
             $table->string('topic_name',100);
             $table->string('topic_describe');
             $table->string('topic_amount',10)->default(0)->nullable();
             $table->string('topic_color',100)->nullable();
             $table->timestamps('topic_created_at')->nullable();
             $table->timestamps('topic_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_topic');
    }
}
