<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikerForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biker_foreign', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname', 15);
            $table->string('lname', 15);
            $table->string('email', 75);
            $table->string('nationality', 20);
            $table->enum('gender', [ 'male' , 'female']);
            $table->string('passport', 30);
            $table->enum('race_type', ['full-race' , 'half-race']);
            $table->string('phone', 20);
            $table->tinyInteger('day_count');
            $table->tinyInteger('join_others');
            $table->enum('bicycle', [ 'yes' , 'no']);
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
        Schema::dropIfExists('biker_foreign');
    }
}
