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
        Schema::create('students_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('statement_id');
            $table->unsignedBigInteger('student_id');
            $table->date('score_date')->nullable();
            $table->tinyInteger('percent_score')->nullable();
            $table->unsignedBigInteger('start_total_id')->nullable();
            $table->tinyInteger('additional_retake_score')->nullable();
            $table->date('additional_retake_date')->nullable();
            $table->tinyInteger('first_retake_score')->nullable();
            $table->date('first_retake_date')->nullable();
            $table->tinyInteger('second_retake_score')->nullable();
            $table->date('second_retake_date')->nullable();
            $table->unsignedBigInteger('final_total_id')->nullable();
            $table->timestamps();

            $table->foreign('statement_id')->on('statements')->references('id');
            $table->foreign('student_id')->on('students')->references('id');
            $table->foreign('start_total_id')->on('totals')->references('id');
            $table->foreign('final_total_id')->on('totals')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_exams');
    }
};
