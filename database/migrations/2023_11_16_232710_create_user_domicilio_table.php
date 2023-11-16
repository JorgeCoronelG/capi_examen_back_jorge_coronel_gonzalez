<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('domicilio', 150);
            $table->string('numero_exterior', 15);
            $table->string('colonia', 120);
            $table->string('cp', 5);
            $table->string('ciudad', 120);

            $table->foreign('user_id')
                ->on('users')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_domicilio');
    }
};
