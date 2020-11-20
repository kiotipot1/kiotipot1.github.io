<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartOfAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_of_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_ledger_account_id');
            $table->string('acount_group');
            $table->string('current_noncurrent');
            $table->unsignedBigInteger('major_account_group_id');
            $table->unsignedBigInteger('sub_major_account_group_id');

            $table->foreign('general_ledger_account_id')->references('id')->on('general_ledger_account');
            $table->foreign('major_account_group_id')->references('id')->on('major_account_group');
            $table->foreign('sub_major_account_group_id')->references('id')->on('sub_major_account_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chart_of_accounts');
    }
}
