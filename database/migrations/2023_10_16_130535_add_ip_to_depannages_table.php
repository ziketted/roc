<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIpToDepannagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('depannages', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id');
            $table->string('description', 300)->nullable();
            $table->string('ip', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('depannages', function (Blueprint $table) {
            //
        });
    }
}
