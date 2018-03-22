<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateWhereWeOperateTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('whereweoperate',function(Blueprint $table){
            $table->increments("id");
            $table->integer("mainimage_id")->references("id")->on("mainimage")->nullable();
            $table->text("top_text")->nullable();
            $table->string("map_image_1")->nullable();
            $table->text("map_text_1")->nullable();
            $table->string("map_image_2")->nullable();
            $table->text("map_text_2")->nullable();
            $table->text("main_title")->nullable();
            $table->string("state_image_1")->nullable();
            $table->text("state_text_1")->nullable();
            $table->string("state_image_2")->nullable();
            $table->text("state_text_2")->nullable();
            $table->string("state_image_3")->nullable();
            $table->text("state_text_3")->nullable();
            $table->string("state_image_4")->nullable();
            $table->text("state_text_4")->nullable();
            $table->string("state_image_5")->nullable();
            $table->text("state_text_5")->nullable();
            $table->string("state_image_6")->nullable();
            $table->text("state_text_6")->nullable();
            $table->string("state_image_7")->nullable();
            $table->text("state_text_7")->nullable();
            $table->string("state_image_8")->nullable();
            $table->text("state_text_8")->nullable();
            $table->text("bottom_section")->nullable();
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
        Schema::drop('whereweoperate');
    }

}