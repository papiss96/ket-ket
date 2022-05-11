<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreneauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creneaux', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_terrain');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->string('statut');
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
        Schema::dropIfExists('creneaux');
    }
}
