<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeTypeToSkillcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skillcategories', function (Blueprint $table) {
            //
            $table->id();
            $table -> text('skill_name',20);
            $table -> integer('skill_level')->length(20);
            $table -> text('skill_value',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skillcategories');
    }
}
