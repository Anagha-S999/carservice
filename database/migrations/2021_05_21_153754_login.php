<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Login extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        Schema::create('login_models', function (Blueprint $table) {
            $table->id();
            $table->string("Username");
            $table->string("Password");
            $table->timestamps();
        });
        DB::table('login_models')->insert(
            array(
'Username'=>'admin',
'Password'=>'admin'
            )
            
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_models');
    }
}