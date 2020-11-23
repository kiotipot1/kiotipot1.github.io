<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotmentClassesOfExpense extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allotment_classes_of_expense', function (Blueprint $table) {
            $table->id();
            $table->integer('allotment_id')->unique();
            $table->integer('uacs_code')->unique();

            $table->string('allotment_class');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allotment_classes_of_expense');
    }
}
