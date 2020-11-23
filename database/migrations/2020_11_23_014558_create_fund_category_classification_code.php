<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundCategoryClassificationCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_category_classification_code', function (Blueprint $table) {
            $table->id();
            $table->integer('fund_category_id')->unique();
            $table->string('description');
            $table->string('fund_category_code');
            $table->string('nsac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fund_category_classification_code');
    }
}
