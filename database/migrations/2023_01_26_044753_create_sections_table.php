<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section_name');
            $table->string('section_type');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sections');
    }
};
