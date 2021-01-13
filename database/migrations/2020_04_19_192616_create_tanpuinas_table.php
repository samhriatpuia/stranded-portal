<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanpuinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanpuinas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();  
            

            $table->string('outsidestate')->nullable();
            $table->string('mizoramdistrict')->nullable();
           
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();

            $table->string('ac_name')->nullable();
            $table->string('ifsc')->nullable();

            $table->string('ac_number')->nullable();
            
            
            $table->string('occupation');
            $table->string('phone');
            
            $table->string('work_details')->nullable();

            $table->string('geo_state')->nullable();
            $table->string('ip_address')->nullable();

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
        Schema::dropIfExists('tanpuinas');
    }
}
