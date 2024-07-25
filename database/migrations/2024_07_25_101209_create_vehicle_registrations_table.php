<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('vehicle_registrations', function (Blueprint $table) {
            //Motor1 info
            $table->id('RegistrationID');
            $table->integer('loginID')->unsigned();
            $table->foreign('loginID')->references('id')->on('loginmodels'); 
            $table->string('license_plate_number');
            $table->string('make_province');
            $table->string('make_model');
            $table->string('year_color');

            //Registries info
            $table->string('campus');
            $table->string('Identification')->nullable();
            $table->string('role');
            $table->string('full_name');
            $table->string('current_address');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->string('telephone_cell');
            $table->string('telephone_home')->nullable();
            $table->string('telephone_office')->nullable();

            //Owners info
            $table->string('registered_owner_name');
            $table->string('permanent_address');
            $table->string('owner_city');
            $table->string('owner_province');

            //image
            $table->string('OR');
            $table->string('CR');
            $table->string('DL');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('vehicle_registrations');
    }
};
