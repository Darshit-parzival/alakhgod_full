<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('alakhgod_interested_buyers', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email');
        $table->string('phone');
        $table->string('address1')->nullable();
        $table->string('address2')->nullable();
        $table->string('address3')->nullable();
        $table->string('pincode')->nullable();
        $table->string('country')->nullable();
        $table->string('state')->nullable();
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
        Schema::dropIfExists(table: 'alakhgod_interested_buyers');
    }
};
