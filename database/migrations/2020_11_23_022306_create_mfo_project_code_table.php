<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMfoProjectCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mfo_project_code', function (Blueprint $table) {
            $table->id();
            $table->integer('mfo_id')->unique();
            $table->string('mfo_code');
            $table->string('mfo_shortname');
            $table->string('mfo_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mfo_project_code');
    }
}
