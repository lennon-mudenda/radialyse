<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeinKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medical_tests', function($table) {
            $table->foreign('medical_test_type_id')->references('id')->on('medical_test_types');
        });

        Schema::table('medical_test_prices', function($table) {
            $table->foreign('medical_center_id')->references('id')->on('medical_centers');
            $table->foreign('medical_test_id')->references('id')->on('medical_tests');
        });
        /*
        Schema::table('medical_centers', function($table) {
            $table->foreign('subscription_id')->references('id')->on('subscriptions');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
