<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Colonne ID
            $table->string('name', 128); // Colonne name
            $table->text('description')->nullable(); // Colonne description
            $table->integer('price')->default(0); // Colonne price
            $table->boolean('active')->default(false); // Colonne active
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
