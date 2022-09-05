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
        // Schema::enableForeignKeyConstraints();

        Schema::create('vat_number', function (Blueprint $table) {
            $table->id();

            // $table->string('department_id', 64)->nullable()->index();
            $table->string('vat_n');

            // $table->foreign('department_id')
            //       ->references('id')
            //       ->on('vat_number')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');


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
        Schema::dropIfExists('vat_number');
    }
};
