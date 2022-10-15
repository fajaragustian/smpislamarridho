<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPembinaAndImageToEkskulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ekskuls', function (Blueprint $table) {
            //
            $table->string('image')->after('slug')->nullable();
            $table->string('pembina')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ekskuls', function (Blueprint $table) {
            //
            $table->dropColumn(['image','pembina']);
        });
    }
}
