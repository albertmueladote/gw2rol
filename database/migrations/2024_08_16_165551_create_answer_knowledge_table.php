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
        Schema::create('answer_knowledge', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('answer_id');
            $table->unsignedBigInteger('knowledge_id');
            $table->timestamps();
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('knowledge_id')->references('id')->on('knowledge')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('answer_knowledge')->insert([
            ['answer_id' => 31, 'knowledge_id' => 143, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 32, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 33, 'knowledge_id' => 149, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 44, 'knowledge_id' => 146, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 44, 'knowledge_id' => 152, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 45, 'knowledge_id' => 163, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 45, 'knowledge_id' => 158, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 46, 'knowledge_id' => 78, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 52, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 53, 'knowledge_id' => 90, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 54, 'knowledge_id' => 166, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 55, 'knowledge_id' => 75, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 55, 'knowledge_id' => 88, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 56, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 56, 'knowledge_id' => 144, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 57, 'knowledge_id' => 164, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 57, 'knowledge_id' => 157, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 61, 'knowledge_id' => 61, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 61, 'knowledge_id' => 153, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 62, 'knowledge_id' => 61, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 62, 'knowledge_id' => 155, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 63, 'knowledge_id' => 61, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 63, 'knowledge_id' => 146, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 64, 'knowledge_id' => 61, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 64, 'knowledge_id' => 165, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 65, 'knowledge_id' => 61, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 65, 'knowledge_id' => 162, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 66, 'knowledge_id' => 61, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 66, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 67, 'knowledge_id' => 156, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 67, 'knowledge_id' => 126, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 68, 'knowledge_id' => 66, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 68, 'knowledge_id' => 90, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 69, 'knowledge_id' => 90, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 69, 'knowledge_id' => 144, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 73, 'knowledge_id' => 174, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 74, 'knowledge_id' => 175, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 75, 'knowledge_id' => 176, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 76, 'knowledge_id' => 177, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 80, 'knowledge_id' => 147, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 80, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 81, 'knowledge_id' => 146, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 81, 'knowledge_id' => 155, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 82, 'knowledge_id' => 164, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 82, 'knowledge_id' => 153, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 83, 'knowledge_id' => 143, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 83, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 84, 'knowledge_id' => 149, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 84, 'knowledge_id' => 164, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 85, 'knowledge_id' => 90, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 85, 'knowledge_id' => 160, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 86, 'knowledge_id' => 156, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['answer_id' => 86, 'knowledge_id' => 161, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_knowledge');
    }
};
