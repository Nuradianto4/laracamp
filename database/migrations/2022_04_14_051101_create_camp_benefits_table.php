<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            //cara untuk relasi (tanpa syarat)
            //cara 1
            //$table->bigInteger('camp_id')->unsigned();
            //cara 2
            //$table->unsignedBigInteger('cam_id');
            //cara 3 (nama table induk harus sesuai)
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();

            //untuk membuat relasi cara 1 & 2
            //$table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
