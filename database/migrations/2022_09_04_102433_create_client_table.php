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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('address');
            $table->string('phone_number')->unique();
            $table->string('date_of_birth');
            $table->char('email')->unique();
            $table->string('glasses_envelopes')->nullable();
            $table->string('supply_of_contact_lenses')->nullable();
            $table->string('note')->nullable();
            $table->string('appointments')->nullable();
            $table->string('document')->nullable();
            $table->string('Customer_Lifetime_Value')->nullable();
            $table->string('shopping_preferences')->nullable();
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
        Schema::dropIfExists('client');
    }
};
