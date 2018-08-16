<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableToVols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('volunteers', function($table) {
            $table->string('skills')->change()->nullable();
            $table->string('availability')->change()->nullable();
            $table->string('homePhone')->change()->nullable();
            $table->string('cellPhone')->change()->nullable();
            $table->string('licenses')->change()->nullable();
            $table->string('ecName')->change()->nullable();
            $table->string('ecPhone')->change()->nullable();
            $table->string('ecEmail')->change()->nullable();
            $table->string('ecAddress')->change()->nullable();
            $table->string('address2')->change()->nullable();
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
            $table->dropColumn('skills');
            $table->dropColumn('availability');
            $table->dropColumn('address');
            $table->dropColumn('homePhone');
            $table->dropColumn('cellPhone');
            $table->dropColumn('licenses');
            $table->dropColumn('ecName');
            $table->dropColumn('ecPhone');
            $table->dropColumn('ecEmail');
            $table->dropColumn('ecAddress');
            $table->dropColumn('address2');
        });
    }
}
