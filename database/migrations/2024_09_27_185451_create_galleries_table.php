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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('Title');
            $table->foreignId('category_id')->references("id")->on('categories');
            $table->string('Tahun');
            $table->string('Description');
            $table->string('Media');
=======
            $table->string('title');
            $table->string('Description');
            $table->string('media');
>>>>>>> d8038304b8dc4ac570217a4163dd79c8e23c03d0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
