<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCo2Footprint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co2_finger_prints', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('email')->unique()->index();
            $table->float('kilometers');
            $table->bigInteger('days');
            $table->float('CO2_emission_factor')->nullable();;
            $table->float('carbon_footprint')->nullable();;
            $table->float('carbon_footprint_all_year')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co2_finger_prints');
    }
}
