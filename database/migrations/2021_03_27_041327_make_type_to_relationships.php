<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeTypeToRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function (Blueprint $table) {
            //
            $table->id();
            $table->bigInteger('junior_id')->unsigned(); 
            $table->foreign('junior_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->bigInteger('senior_id')->unsigned(); 
            $table->foreign('senior_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationships');
    }
}
