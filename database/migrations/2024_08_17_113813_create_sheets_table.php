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
        Schema::create('sheets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('race_id');
            $table->unsignedBigInteger('rol_id');
            $table->integer('gender');
            $table->integer('charm');
            $table->integer('charisma');
            $table->integer('aggressiveness');
            $table->integer('level');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheets');
    }
};
