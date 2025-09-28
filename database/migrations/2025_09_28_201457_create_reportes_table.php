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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_reporte_id');
            $table->dateTime('fecha_generado')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->json('contenido');
            $table->string('titulo', 255);
            $table->unsignedBigInteger('generado_por')->nullable();
            $table->unsignedBigInteger('estado_id')->nullable();

            $table->foreign('generado_por')->references('id')->on('usuario')->onDelete('set null');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('tipo_reporte_id')->references('id')->on('tipos_reportes')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
