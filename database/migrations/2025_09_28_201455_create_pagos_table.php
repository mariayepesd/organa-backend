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
        Schema::create('pagos', function (Blueprint $table) {

            $table->id();
            $table->decimal('cantidad', 10, 2)->check('cantidad > 0');
            $table->dateTime('fecha_pago')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('metodo_pago_id');
            $table->unsignedBigInteger('orden_id');
            $table->unsignedBigInteger('estado_id');

            $table->foreign('metodo_pago_id')->references('id')->on('metodos_pago')->onDelete('restrict');
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('restrict');
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('restrict');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
