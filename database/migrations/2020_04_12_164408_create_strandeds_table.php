<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrandedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strandeds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('fname');
            $table->string('phone');
            $table->string('epic');
            $table->string('mizoramaddress');
            $table->string('mizoramdistrict');
            $table->string('outsideaddress');
            $table->string('outsidestate');
            $table->string('occupation');
            $table->string('gender');
            $table->string('problem');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strandeds');
    }
}
