<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Buat Tabel Case Status
         Schema::create('case_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->foreign('case_id')
                  ->references('id')->on('case')
                  ->onDelete('cascade');
            $table->integer('court_level_id')->unsigned();
            $table->foreign('court_level_id')
                  ->references('id')->on('court_level')
                  ->onDelete('cascade');
            $table->text('verdict')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('case_status');
    }
}
