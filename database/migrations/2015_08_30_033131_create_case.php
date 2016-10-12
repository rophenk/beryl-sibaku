<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Buat Tabel Case
         Schema::create('case', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_type_id')->unsigned()->nullable();
            $table->integer('court_type_id')->unsigned()->nullable();
            $table->string('uuid', 36);
            $table->integer('api_id')->nullable();
            $table->integer('number')->nullable();
            $table->string('work_unit')->nullable();
            $table->string('case_number')->nullable();
            $table->text('principal')->nullable();
            $table->text('object')->nullable();
            $table->text('proposal')->nullable();
            $table->text('address')->nullable();
            $table->integer('instansi_id')->unsigned()->nullable();
            $table->string('availability');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreign('case_type_id')
                  ->references('id')->on('case_type')
                  ->onDelete('cascade');
            $table->foreign('court_type_id')
                  ->references('id')->on('court_type')
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
        Schema::drop('case');
    }
}
