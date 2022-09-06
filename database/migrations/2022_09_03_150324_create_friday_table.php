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
            // $table->unsignedBigInteger('week_id')->nullable()->after('id');
            // $table->foreign('week_id')
            //       ->references('id')
            //       ->on('week')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');
            $table->date('data');
            $table->float('n_oridini_1');
            $table->float('n_ordini_2_8');
            $table->float('fatturato_ordini_1_8');
            $table->float('prezzo_medio_ordini_1_8');
            $table->float('monofocali');
            $table->float('progressive');
            $table->float('antiriflesso');
            $table->float('busc');
            $table->float('premium');
            $table->float('qualità');
            $table->float('n_pezzi_sole');
            $table->float('sole_grad');
            $table->float('vendite_aggiuntive');
            $table->float('refrazioni');
            $table->float('conv_refra');
            $table->float('rx_mediche');
            $table->float('totale_n_ordini');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->useCurrent();
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

        // $table->dropForeign('friday_week_id_foreign');
        // $table->dropColumn('week_id');
    }
};
