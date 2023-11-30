<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoinementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinements', function (Blueprint $table) {
            $table->id();
            /*  $table->unsignedBigInteger('user_id'); */
            $table->string('firstname', 300)->nullable();
            $table->string('lastname', 300)->nullable();
            $table->string('mail', 300)->nullable();
            $table->string('phone', 300)->nullable();
            $table->string('mark', 300)->nullable();
            $table->string('model', 300)->nullable();
            $table->string('annee', 300)->nullable();
            $table->string('offrespecial', 300)->nullable();
            $table->string('attendre', 300)->nullable();
            $table->string('emplacement', 300)->nullable();

            $table->string('premier_choix', 300)->nullable();
            $table->string('premier_heure', 300)->nullable();

            $table->string('agree', 300)->nullable();
            $table->string('deux_choix', 300)->nullable();
            $table->string('deux_heure', 300)->nullable();
            $table->string('statut', 300)->default('Nouveau');

            $table->string('description', 300)->nullable();

            $table->timestamps();
            $table->softDeletes();
            /*  $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->unUpdate('restrict'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appoinements');
    }
}
