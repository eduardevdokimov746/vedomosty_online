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
        Schema::create('groups_disciplines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_group_id');
            $table->unsignedBigInteger('discipline_id');

            $table->unique(['course_group_id', 'discipline_id']);

            $table->foreign('course_group_id')->on('courses_groups')->references('id');
            $table->foreign('discipline_id')->on('disciplines')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_disciplines');
    }
};
