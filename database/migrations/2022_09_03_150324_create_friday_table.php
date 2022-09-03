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
        Schema::create('friday', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('data');
            $table->integer('n.oridini_1');
            $table->integer('n.ordini_2_8');
            $table->integer('fatturato_ordini_1_8');
            $table->integer('prezzo_medio_ordini_1_8');
            $table->integer('monofocali');
            $table->integer('progressive');
            $table->integer('antiriflesso');
            $table->integer('busc');
            $table->integer('premium');
            $table->integer('qualità');
            $table->integer('n.pezzi_sole');
            $table->integer('sole_grad');
            $table->integer('vendite_aggiuntive');
            $table->integer('refrazioni');
            $table->integer('conv_refra');
            $table->integer('rx_mediche');
            $table->integer('totale_n.ordini');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friday');
    }
};
