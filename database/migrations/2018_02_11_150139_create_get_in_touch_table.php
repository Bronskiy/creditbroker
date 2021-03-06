<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateGetInTouchTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('getintouch',function(Blueprint $table){
            $table->increments("id");
            $table->integer("mainimage_id")->references("id")->on("mainimage")->nullable();
            $table->text("top_text")->nullable();
            $table->string("map", 512)->nullable();
            $table->text("contacts")->nullable();
            $table->text("form_title")->nullable();
            $table->text("bottom_text")->nullable();
            $table->integer("seo_id")->references("id")->on("seo")->nullable();
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
        Schema::drop('getintouch');
    }

}
