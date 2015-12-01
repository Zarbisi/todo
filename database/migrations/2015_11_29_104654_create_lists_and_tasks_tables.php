<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsAndTasksTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Projects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->defaults ('');
            $table->string('slug')->defaults ('');
            $table->timestamps();
        });

        Schema::create('Tasks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('project_id')-> unsigned()->default(0);
            $table->foreign('project_id')->references('id')->on('Projects')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->boolean('completed')->default(false);
            $table->text('description')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Projects');
        Schema::drop('Tasks');
    }
}
