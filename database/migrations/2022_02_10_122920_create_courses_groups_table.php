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
        Schema::create('courses_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('academic_year_id');
            $table->boolean('active');

            $table->unique(['course_id', 'group_id']);
            $table->foreign('course_id')->on('courses')->references('id');
            $table->foreign('group_id')->on('groups')->references('id');
            $table->foreign('academic_year_id')->on('academic_years')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_groups');
    }
};
