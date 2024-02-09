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
        Schema::create('controletbs', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCadastro');
            $table->string('turmaCadastro');
            $table->string('respCadastro');
            $table->string('emailCadastro');
            $table->string('foneCadastro');
            $table->string('endCadastro');
            $table->string('relCadastro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controletbs');
    }
};
