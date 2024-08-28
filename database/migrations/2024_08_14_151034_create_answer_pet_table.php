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
        Schema::create('answer_pet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('answer_id');
            $table->unsignedBigInteger('pet_id');
            $table->timestamps();
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('answer_pet')->insert([
            ['answer_id' => 7, 'pet_id' => 33, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 8, 'pet_id' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 9, 'pet_id' => 15, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 10, 'pet_id' => 9, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 11, 'pet_id' => 36, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 12, 'pet_id' => 26, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 13, 'pet_id' => 38, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 14, 'pet_id' => 40, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_pet');
    }
};
