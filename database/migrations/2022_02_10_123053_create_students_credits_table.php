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
        Schema::create('students_credits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('statement_id');
            $table->unsignedBigInteger('student_id');
            $table->date('first_checkout_date');
            $table->tinyInteger('first_checkout_lecture_percent')->nullable();
            $table->tinyInteger('first_checkout_practice_percent')->nullable();
            $table->tinyInteger('first_checkout_lab_percent')->nullable();
            $table->tinyInteger('first_checkout_passes')->nullable();
            $table->tinyInteger('first_checkout_total_percent')->nullable();
            $table->date('second_checkout_date');
            $table->tinyInteger('second_checkout_lecture_percent')->nullable();
            $table->tinyInteger('second_checkout_practice_percent')->nullable();
            $table->tinyInteger('second_checkout_lab_percent')->nullable();
            $table->tinyInteger('second_checkout_passes')->nullable();
            $table->tinyInteger('second_checkout_total_percent')->nullable();
            $table->tinyInteger('increment_percent')->nullable();
            $table->tinyInteger('total_percent')->nullable();
            $table->unsignedBigInteger('total_id')->nullable();
            $table->boolean('is_credit')->default(false);
            $table->timestamps();

            $table->foreign('statement_id')->on('statements')->references('id');
            $table->foreign('student_id')->on('students')->references('id');
            $table->foreign('total_id')->on('totals')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_credits');
    }
};
