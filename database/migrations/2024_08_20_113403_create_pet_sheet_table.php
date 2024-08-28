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
        Schema::create('pet_sheet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sheet_id');
            $table->unsignedBigInteger('pet_id');
            $table->timestamps();

            $table->foreign('sheet_id')->references('id')->on('sheets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_sheet');
    }
};
