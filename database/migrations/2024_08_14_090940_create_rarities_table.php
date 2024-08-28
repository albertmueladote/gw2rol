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
        Schema::create('rarities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('increment');
            $table->string('style');
            $table->timestamps();
        });
        DB::table('rarities')->insert([
            ['name' => 'Básico', 'increment' => 1, 'style' => 'basic', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['name' => 'Selecto', 'increment' => 2, 'style' => 'fine', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['name' => 'Obra maestra', 'increment' => 3, 'style' => 'masterwork', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['name' => 'Excepcional', 'increment' => 4, 'style' => 'rare', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['name' => 'Exótico', 'increment' => 5, 'style' => 'exotic', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rarities');
    }
};
