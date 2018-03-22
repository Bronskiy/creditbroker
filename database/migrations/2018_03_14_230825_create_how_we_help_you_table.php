<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateHowWeHelpYouTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('howwehelpyou',function(Blueprint $table){
            $table->increments("id");
            $table->integer("mainimage_id")->references("id")->on("mainimage")->nullable();
            $table->text("top_text")->nullable();
            $table->text("main_text")->nullable();
            $table->string("side_image_desktop")->nullable();
            $table->string("item_image_1")->nullable();
            $table->text("item_text_1")->nullable();
            $table->string("item_image_2")->nullable();
            $table->text("item_text_2")->nullable();
            $table->string("item_image_3")->nullable();
            $table->text("item_text_3")->nullable();
            $table->string("item_image_4")->nullable();
            $table->text("item_text_4")->nullable();
            $table->string("item_image_5")->nullable();
            $table->text("item_text_5")->nullable();
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
        Schema::drop('howwehelpyou');
    }

}