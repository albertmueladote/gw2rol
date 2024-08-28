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
        Schema::create('knowledge_race', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('race_id');
            $table->unsignedBigInteger('knowledge_id');
            $table->timestamps();
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('knowledge_id')->references('id')->on('knowledge')->onDelete('cascade')->onUpdate('cascade');
        });
        
        DB::table('knowledge_race')->insert([
            ['race_id' => 1, 'knowledge_id' => 75, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 1, 'knowledge_id' => 88, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 1, 'knowledge_id' => 148, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 1, 'knowledge_id' => 160, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['race_id' => 2, 'knowledge_id' => 58, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 2, 'knowledge_id' => 110, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 2, 'knowledge_id' => 143, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 2, 'knowledge_id' => 164, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 2, 'knowledge_id' => 165, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 2, 'knowledge_id' => 173, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
           
            ['race_id' => 3, 'knowledge_id' => 51, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 3, 'knowledge_id' => 56, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 3, 'knowledge_id' => 149, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 3, 'knowledge_id' => 161, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 3, 'knowledge_id' => 164, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['race_id' => 4, 'knowledge_id' => 52, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 4, 'knowledge_id' => 58, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 4, 'knowledge_id' => 160, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 4, 'knowledge_id' => 161, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 4, 'knowledge_id' => 168, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['race_id' => 5, 'knowledge_id' => 94, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 5, 'knowledge_id' => 97, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 5, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 5, 'knowledge_id' => 164, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['race_id' => 5, 'knowledge_id' => 165, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledge_race');
    }
};
