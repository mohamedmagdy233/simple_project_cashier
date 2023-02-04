<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_number');
            $table->unsignedBigInteger('section_id');
            $table->string('book_Date');
            $table->string('product_type');
            $table->string('product');
//            $table->bigInteger( 'section_id' )->unsigned();
//
            $table->timestamps();

            $table->foreign('section_id')->references('id')->on('sections')
                ->onDelete('cascade') ->onUpdate('cascade');


        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};
