<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('count');
             $table->integer('user_id')->unsigned()->index();
               $table->integer('topic_id')->unsigned()->index();

             
             $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');


                $table->foreign('topic_id')
                ->references('id')->on('topics')
                ->onDelete('cascade');




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
        Schema::drop('likes');
    }
}
