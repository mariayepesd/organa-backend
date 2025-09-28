<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_orden')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('fecha_domicilio')->nullable();
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('suscripcion_id')->nullable();

            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('restrict');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('restrict');
            $table->foreign('suscripcion_id')->references('id')->on('suscripciones')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes');
    }
};
