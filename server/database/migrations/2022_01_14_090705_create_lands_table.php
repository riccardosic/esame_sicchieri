<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('Comune')->nullable();
            $table->string('Immagine')->nullable();
            $table->float('Dimensione')->nullable();
            $table->string('FoglioCatastale')->nullable();
            $table->string('MappaleCatastale')->nullable();
            $table->string('ParcellaCatastale')->nullable();
            $table->string('Tipologia')->nullable();
            $table->string('Irrigazione')->nullable();
            $table->string('Offerta')->nullable();
            $table->string('Canone')->nullable();
            $table->boolean('Disponibilità')->nullable()->default(false);
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
        Schema::dropIfExists('lands');
    }
}
