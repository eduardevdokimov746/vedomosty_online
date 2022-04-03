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
        Schema::create('statements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('group_discipline_id');
            $table->tinyInteger('great_percent')->nullable();
            $table->tinyInteger('good_percent')->nullable();
            $table->tinyInteger('satisfactorily_percent')->nullable();
            $table->tinyInteger('not_satisfactorily_percent')->nullable();
            $table->timestamps();

            $table->foreign('status_id')->on('statement_statuses')->references('id');
            $table->foreign('type_id')->on('statement_types')->references('id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->foreign('group_discipline_id')->on('groups_disciplines')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statements');
    }
};
