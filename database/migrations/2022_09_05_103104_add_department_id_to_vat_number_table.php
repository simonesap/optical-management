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
        Schema::table('vat_number', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id')->after('id');
            $table->foreign('department_id')
                  ->references('id')
                  ->on('department')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            // $table->foreignId('department_id')
            //       ->constrained('department')
            //       ->onUpdate('set null')
            //       ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vat_number', function (Blueprint $table) {
            $table->dropForeign('vat_number_department_id_foreign');

            $table->dropColumn('department_id');
        });
    }
};
