<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('case_id')->unsigned()->nullable()->default(5);
            $table->string('case_uuid', 36);
            $table->text('name')->nullable();
            $table->text('url')->nullable();
            $table->text('description')->nullable();
            $table->text('filename')->nullable();
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
        Schema::drop('files');
    }
}
