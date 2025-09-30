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
        Schema::create('terrains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('adresse');
            $table->string('prix');
            $table->string('contact');
            $table->string('disponibilite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terrains');
    }
};
