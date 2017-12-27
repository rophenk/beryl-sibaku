<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogCaseDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_case_detail', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('case_id')->unsigned()->nullable()->default(5);
            $table->string('case_uuid', 36);
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
        Schema::drop('log_case_detail');
    }
}
