<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateMainImageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('mainimage',function(Blueprint $table){
            $table->increments("id");
            $table->string("main_image")->nullable();
            $table->text("main_text")->nullable();
            $table->string("link_title")->nullable();
            $table->string("link_url")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mainimage');
    }

}