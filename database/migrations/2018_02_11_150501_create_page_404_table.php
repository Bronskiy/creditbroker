<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreatePage404Table extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('page404',function(Blueprint $table){
            $table->increments("id");
            $table->text("error_404_titile")->nullable();
            $table->text("error_404_text")->nullable();
            $table->text("bing_search")->nullable();
            $table->text("google_search")->nullable();
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
        Schema::drop('page404');
    }

}