<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEkskulsIdAndTelpAndKelasAndUmurAlasanToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('ekskul_id')->after('id');
            $table->string('telp')->after('email');
            $table->string('umur')->after('telp');
            $table->string('alasan')->after('umur');
            $table->foreign('ekskul_id')
            ->references('id')
            ->on('ekskuls')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['ekskul_id','telp','umur','alasan']);
        });
    }
}
