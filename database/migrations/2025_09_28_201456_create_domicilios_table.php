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
        Schema::create('domicilios', function (Blueprint $table) {

            $table->id();
            $table->dateTime('fecha_domicilio')->nullable();
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('restrict');
            $table->unsignedBigInteger('conductor_id');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('orden_id')->unique();

            $table->foreign('conductor_id')->references('id')->on('usuarios')->onDelete('restrict');
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domicilios');
    }
};
