<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DdataPhoto extends Migration {


    public function up()
    {
        Schema::create('dd_photo', function($table){
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('photo', 255)->nullable();
            $table->timestamp('last_modified');
            $table->dateTime('date_created');
            $table->tinyInteger('status')->default(1);
            $table->integer('user_id')->unsigned();
            //$table->foreign('user_id')->references('id')->on('dd_user');
        });
    }


    public function down()
    {
        Schema::dropIfExists('ddata_photo');
    }

}
