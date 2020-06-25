<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTrips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->boolean('approved');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->char('name', 100);
            $table->string('email')->unique()->index();
            $table->bigInteger('phonenumber');
            $table->date('datePickup');
            $table->dateTime('timePickup', 0);
            $table->text('placePickup');
            $table->text('placeDropoff');
            $table->enum('seats', ['1', '2', '3', '4']);
            $table->text('meetingPlace');
            $table->text('places');
            $table->decimal('carbonFootprint', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
