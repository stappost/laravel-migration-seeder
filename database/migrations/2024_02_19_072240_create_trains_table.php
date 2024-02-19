<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->dataTime('orario_partenza', 50);
            $table->dataTime('orario_arrivo', 50);
            $table->string('codice_treno', 7);
            $table->boolean('in_orario', 50);
            $table->boolean('cancellato', 50);
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
        Schema::dropIfExists('trains');
    }
};
