<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatedLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        if(Schema::hasColumn('likes', 'topic_id')) {

        } else {
            Schema::table('users', function ($table) {
                $table->integer('topic_id');
            });
        }


       if(Schema::hasColumn('likes', 'parson_id')) {

        } else {
            Schema::table('users', function ($table) {
                $table->integer('parson_id');
            });
        }



    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('topic_id');
            $table->dropColumn('parson_id');
        });
    }


}
