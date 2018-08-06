<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FName');
            $table->string('LName');
            $table->string('Username');
            $table->string('Password');
            $table->string('WorkCenter');
            $table->string('Skills');
            $table->string('Avail');
            $table->string('Address');
            $table->string('HomeNum');
            $table->string('WorkNum');
            $table->string('CellNum');
            $table->string('Email');
            $table->string('EduBack');
            $table->string('Licenses');
            $table->string('ERName');
            $table->string('ERPhoneNum');
            $table->string('EREmail');
            $table->string('ERAddress');
            $table->string('LicenseCP');
            $table->string('SSNCP');
            $table->string('AppStatus');
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
        Schema::dropIfExists('volunteers');
    }
}
