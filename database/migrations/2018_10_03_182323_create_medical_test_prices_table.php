<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalTestPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_test_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medical_test_id');
            $table->integer('medical_center_id');
            $table->integer('price');
            $table->timestamps();
            //$table->foreign('medical_center_id')->references('id')->on('medical_centers');
            //$table->foreign('medical_test_id')->references('id')->on('medical_tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_test_prices');
    }
}
