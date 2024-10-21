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
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // Nombre común
            $table->string('species'); // Nombre científico
            $table->string('family'); // Familia
            $table->integer('height_cm'); // Altura máxima (cm)
            $table->decimal('average_water_needs', 5, 2); // Agua (litros/semana) Cantidad promedio de agua
            $table->boolean('is_exotic')->default(false); // Es exotica? Que no es nativa
            $table->boolean('is_perennial')->default(false); // Es perenne? Que vive más de dos años
            $table->string('flowering_season')->nullable(); // Temporada de floración
            $table->date('germination_date')->nullable(); // Fecha de plantación
            $table->date('planted_at')->nullable(); // Fecha de plantación
            $table->text('description')->nullable(); // Descripción detallada de características o cuidados
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
