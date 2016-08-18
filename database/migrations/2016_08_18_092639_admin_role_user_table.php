<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        if(Schema::hasColumn('users', 'role')) {

        } else {
            Schema::table('users', function ($table) {
                $table->integer('role')->unsigned();
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('role');
        });
    }
}
