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
            $table->string('Title');
            $table->foreignId('category_id')->references("id")->on('categories');
            $table->string('Tahun');
            $table->text('Description');
            $table->string('Media1');
            $table->string('Media2');
            $table->string('Media3');
            $table->string('Media4');
            $table->string('Media5');
            $table->string('Media6');
            $table->string('Pahlawan1');
            $table->string('Pahlawan2');
            $table->string('Pahlawan3');
            $table->string('Pahlawan4');
            $table->string('LinkRef1');
            $table->string('LinkRef2');
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
