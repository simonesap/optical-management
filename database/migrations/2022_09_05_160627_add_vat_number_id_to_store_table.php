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
        Schema::table('store', function (Blueprint $table) {
            $table->unsignedBigInteger('vat_number_id')->after('id');
            $table->foreign('vat_number_id')
                  ->references('id')
                  ->on('vat_number')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store', function (Blueprint $table) {
            $table->dropForeign('store_vat_number_id_foreign');

            $table->dropColumn('vat_number_id');
        });
    }
};
