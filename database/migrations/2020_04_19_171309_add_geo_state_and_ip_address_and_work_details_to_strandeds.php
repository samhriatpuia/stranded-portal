<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGeoStateAndIpAddressAndWorkDetailsToStrandeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('strandeds', function (Blueprint $table) {
            $table->string('geo_state')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('work_details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('strandeds', function (Blueprint $table) {
            //
        });
    }
}
