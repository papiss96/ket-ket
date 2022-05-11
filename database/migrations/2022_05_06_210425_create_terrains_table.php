<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idComplexeSportif');
            $table->string('id_gerant');
            $table->float('longueur');
            $table->float('largeur');
            $table->int('joueurs');
            $table->float('prixHeure');
            $table->string('statut');
            $table->string('idPhotos');
            $table->string('type');
            $table->string('localisation');
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
        Schema::dropIfExists('terrains');
    }
}
