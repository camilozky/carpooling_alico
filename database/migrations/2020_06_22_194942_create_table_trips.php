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
            $table->boolean('approved')->default(1);;
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->char('nameDriver', 100);
            $table->string('email')->index();;
            $table->text('phoneNumber');
            $table->date('datePickup');
            $table->text('timePickup');
            $table->text('placePickup');
            $table->text('placeDropoff');
            $table->enum('seats', ['1', '2', '3', '4']);
            $table->text('meetingPlace');
            $table->text('places');
            $table->text('passengerName', )->nullable();
            $table->text('emailPassenger')->nullable();
            $table->text('phonenumberPassenger')->nullable();
            $table->unique(['email', 'datePickup'])->index();;
            // $table->foreign('email')->references('email')->on('users');
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
