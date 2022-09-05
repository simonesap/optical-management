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
        Schema::create('week', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('monday_id')->after('id');
            $table->foreign('monday_id')
                  ->references('id')
                  ->on('monday')
                  ->onDelete('cascade')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('tuesday_id')->after('id');
            $table->foreign('tuesday_id')
                  ->references('id')
                  ->on('tuesday')
                  ->onDelete('cascade')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('wednesday_id')->after('id');
            $table->foreign('wednesday_id')
                  ->references('id')
                  ->on('wednesday')
                  ->onDelete('cascade')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('thursday_id')->after('id');
            $table->foreign('thursday_id')
                ->references('id')
                ->on('thursday')
                ->onDelete('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('friday_id')->after('id');
            $table->foreign('friday_id')
                ->references('id')
                ->on('friday')
                ->onDelete('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('saturday_id')->after('id');
            $table->foreign('saturday_id')
                ->references('id')
                ->on('saturday')
                ->onDelete('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('sunday_id')->after('id');
            $table->foreign('sunday_id')
                ->references('id')
                ->on('sunday')
                ->onDelete('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('week');

        $table->dropForeign('week_monday_id_foreign');
        $table->dropColumn('monday_id');

        $table->dropForeign('week_tuesday_id_foreign');
        $table->dropColumn('tuesday_id');

        $table->dropForeign('week_wednesday_id_foreign');
        $table->dropColumn('wednesday_id');

        $table->dropForeign('week_thursday_id_foreign');
        $table->dropColumn('thursday_id');

        $table->dropForeign('week_friday_id_foreign');
        $table->dropColumn('friday_id');

        $table->dropForeign('week_saturday_id_foreign');
        $table->dropColumn('saturday_id');

        $table->dropForeign('week_sunday_id_foreign');
        $table->dropColumn('sunday_id');
    }
};
