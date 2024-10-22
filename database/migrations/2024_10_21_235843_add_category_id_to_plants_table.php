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
        Schema::table('plants', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();

            // Add the foreign key
            $table->foreign('category_id')
                ->references('id')
                ->on('plant_categories')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plants', function (Blueprint $table) {
            // Eliminar la llave foránea y la columna
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
