<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaylorMadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taylor_made', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('fname', 15);
            $table->string('lname', 15);
            $table->string('email', 75);
            $table->string('nationality', 20);
            $table->string('phone', 20);
            $table->string('passport', 30);

            $table->tinyInteger('day_count');
            $table->tinyInteger('person_count');
            $table->text('location');
            $table->enum('hotel_type', [ '3star' , '4star' , '5star' , 'other' ]);

            $table->timestamps();
            $table->integer('packageId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taylor_made');
    }
}
