<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::table('garages', function (Blueprint $table) {
            //Recuperer l'adresse IP lors de la mise en ligne
         $url = 'https://api4.ipify.org/?format=json';
         $response = file_get_contents($url);
         $newsData = json_decode($response, true);
         $ip = $newsData['ip'];
             //récupération longitude et latitude
         $url='http://api.ipstack.com/'.$ip.'?access_key=fd9dd729be08b63f9e7f192109af9dcd';
         $response=file_get_contents($url);
         $data = json_decode($response, true);
         $latitude = $data['latitude'];
         $longitude = $data['longitude'];
            $table->double('lat')->default($latitude);
            $table->double('lng')->default($longitude);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('garages', function (Blueprint $table) {
            //
        });
    }
}
