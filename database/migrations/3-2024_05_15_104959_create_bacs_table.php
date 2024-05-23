<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bacs', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('stagiaire_id');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bacs');
    }
};
