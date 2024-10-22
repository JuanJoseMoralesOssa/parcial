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
        Schema::create('plant_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de la categoría String.
            $table->text('description')->nullable(); // Descripción más larga de la categoría
            $table->boolean('is_active'); // Indica si la categoría está activa o no
            $table->integer('priority')->default(1)->nullable(); // Prioridad de la categoría
            $table->decimal('growth_rate', 5, 2); // Tasa de crecimiento de la categoria de la planta
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plant_categories');
    }
};
