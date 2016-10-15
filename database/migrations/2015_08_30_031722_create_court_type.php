<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourtType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Buat Court Type
         Schema::create('court_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_type_id')->unsigned()->nullable();
            $table->string('uuid', 36);
            $table->string('name');
            $table->string('alias');
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
        Schema::drop('court_type');
    }
}
