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
        Schema::table('friday', function (Blueprint $table) {
            $table->unsignedBigInteger('week_id')->nullable()->after('id');
            $table->foreign('week_id')
                  ->references('id')
                  ->on('week')
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
        Schema::table('friday', function (Blueprint $table) {
            $table->dropForeign('friday_week_id_foreign');
            $table->dropColumn('week_id');
        });
    }
};
