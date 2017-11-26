<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSizeInProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['brand_id']);          
        });
        Schema::table('products', function (Blueprint $table) {          
            $table->dropColumn('brand_id');        
        });
        Schema::table('products', function (Blueprint $table) {
            $table->integer('size_id')->unsigned();         
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('size_id')->references('id')->on('sizes');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
