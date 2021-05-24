<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_car', function($table){

            $table->id('c_id');
     
            $table->string('c_name');
            $table->string('c_band');
            $table->string('c_model');
            $table->string('c_regno');
            $table->string('c_reson');
            $table->string('c_servicedate');
            $table->string('c_man_year');
            $table->string('status');
        $table->integer('cust_id');
        $table->integer('id');
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
        Schema::dropIfExists('tbl_car');
    }
}
