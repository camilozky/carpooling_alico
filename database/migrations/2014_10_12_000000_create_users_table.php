<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('email', 90)->unique()->index();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
			$table->string('phoneNumber');
			$table->string('placeDropoff');
			$table->string('placePickup');
			$table->float('latitudePlaceDropoff')->nullable();
			$table->float('longitudePlaceDropoff')->nullable();
			$table->float('latitudePlacePickup')->nullable();
			$table->float('longitudePlacePickup')->nullable();
			$table->bigInteger('days');
			$table->float('kilometers');
			$table->float('CO2_emission_factor');
			$table->float('carbon_footprint');
			$table->float('carbon_footprint_all_year');
			$table->string('vehicle');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}
