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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->boolean('valide')->default(false);
            $table->date('date_inscription');
            $table->unsignedBigInteger('stagiaire_id');
            $table->unsignedBigInteger('filliere_id');

            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
            $table->foreign('filliere_id')->references('id')->on('fillieres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
