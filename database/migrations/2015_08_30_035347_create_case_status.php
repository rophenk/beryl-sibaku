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
            $table->integer('court_level_id')->unsigned();
            $table->text('status')->nullable();
            $table->text('verdict')->nullable();
            $table->text('description')->nullable();
            $table->integer('case_number');
            $table->integer('instansi_id')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');


            $table->foreign('case_id')
                  ->references('id')->on('case')
                  ->onDelete('cascade');
            $table->foreign('court_level_id')
                  ->references('id')->on('court_level')
                  ->onDelete('cascade');
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
