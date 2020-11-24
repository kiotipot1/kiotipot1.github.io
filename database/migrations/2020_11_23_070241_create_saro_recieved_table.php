<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaroRecievedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saro_recieved', function (Blueprint $table) {
            $table->id();
            $table->date('date_issued');
            $table->string('saro_no');
            $table->unsignedBigInteger('fund_source_code');
            $table->unsignedBigInteger('mfo_code');
            $table->string('particulars');
            $table->string('object_code');
            $table->float('amount');
           
            $table->foreign('mfo_code')->references('id')->on('mfo_project_code');
            $table->foreign('fund_source_code')->references('id')->on('fund_source');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saro_recieved');
    }
}
