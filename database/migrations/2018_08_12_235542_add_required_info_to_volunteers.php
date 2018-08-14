<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRequiredInfoToVolunteers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('volunteers', function($table) {
            $table->string('location');
            $table->string('skills');
            $table->string('availability');
            $table->string('address');
            $table->string('homePhone');
            $table->string('cellPhone');
            $table->string('education');
            $table->string('licenses');
            $table->string('ecName');
            $table->string('ecPhone');
            $table->string('ecEmail');
            $table->string('ecAddress');
            $table->boolean('copyLicense');
            $table->boolean('copySS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Volunteers', function($table) {
            $table->dropColumn('location');
            $table->dropColumn('skills');
            $table->dropColumn('availability');
            $table->dropColumn('address');
            $table->dropColumn('homePhone');
            $table->dropColumn('cellPhone');
            $table->dropColumn('education');
            $table->dropColumn('licenses');
            $table->dropColumn('ecName');
            $table->dropColumn('ecPhone');
            $table->dropColumn('ecEmail');
            $table->dropColumn('ecAddress');
            $table->dropColumn('copyLicense');
            $table->dropColumn('copySS');
        });
    }
}
