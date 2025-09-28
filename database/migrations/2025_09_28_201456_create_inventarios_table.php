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
        Schema::create('inventarios', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('ingrediente_id');
            $table->decimal('nivel_stock', 10, 3)->default(0);
            $table->boolean('alerta_escasez')->default(false);

            $table->foreign('ingrediente_id')->references('id')->on('ingredientes')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
