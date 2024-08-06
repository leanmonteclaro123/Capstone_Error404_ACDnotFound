<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginModelsTable extends Migration
{
    public function up()
    {
        Schema::create('loginModels', function (Blueprint $table) {
            $table->id('loginID');
            $table->string('Type');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middle');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->string('username')->unique();
            $table->string('Role');
            $table->string('id_no');
            $table->string('campus');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loginModels');
    }
}
