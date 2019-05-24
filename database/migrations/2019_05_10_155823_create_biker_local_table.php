<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikerLocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biker_local', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('fname', 15);
            $table->string('lname', 15);
            $table->string('email', 75);
            $table->string('nationality', 20);
            $table->enum('gender', [ 'male' , 'female']);
            $table->string('nic', 10);
            $table->enum('race_type', ['full-race' , 'half-race']);
            $table->string('phone', 20);
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biker_local');
    }
}
