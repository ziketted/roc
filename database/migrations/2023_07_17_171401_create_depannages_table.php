<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepannagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depannages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 300);
            $table->string('prenom', 300);
            $table->string('mail', 300);
            $table->string('phone', 300);
            $table->string('garage', 300)->nullable();
            $table->string('status', 300)->default('Encours');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depannages');
    }
}
