<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Colonne ID
            $table->string('url'); // Colonne url
            $table->unsignedBigInteger('imageable_id'); // Colonne imageable_id
            $table->string('imageable_type'); // Colonne imageable_type
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('images');
    }
}
