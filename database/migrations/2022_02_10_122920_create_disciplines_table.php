<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->unsignedBigInteger('departament_id');
            $table->unsignedBigInteger('semester_id');
            $table->tinyInteger('count_credits')->nullable();
            $table->tinyInteger('total_hours');
            $table->tinyInteger('lecture_hours')->nullable();
            $table->tinyInteger('lab_hours')->nullable();
            $table->tinyInteger('practice_hours')->nullable();
            $table->unsignedBigInteger('form_control');

            $table->foreign('departament_id')->on('departaments')->references('id');
            $table->foreign('semester_id')->on('semesters')->references('id');
            $table->foreign('form_control')->on('statement_types')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplines');
    }
};
