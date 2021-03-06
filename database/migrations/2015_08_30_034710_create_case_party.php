<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseParty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Buat Tabel Case Party
         Schema::create('case_party', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->integer('court_party_id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('case_number')->nullable();
            $table->integer('instansi_id')->unsigned()->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            
            $table->foreign('case_id')
                  ->references('id')->on('case')
                  ->onDelete('cascade');
            $table->foreign('court_party_id')
                  ->references('id')->on('court_party')
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
        Schema::drop('case_party');
    }
}
