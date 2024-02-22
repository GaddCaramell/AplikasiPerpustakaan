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
        Schema::create('petugas', function (Blueprint $table) {
            $table->integer('PetugasId');
            $table->string('Username',255);
            $table->string('Password',255);
            $table->string('Email',255);
            $table->string('NamaLengkap',255);
            $table->enum('Level',['Admin','Petugas']);
            $table->text('Alamat');
            $table->timestamps();
            $table->primary('PetugasId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
