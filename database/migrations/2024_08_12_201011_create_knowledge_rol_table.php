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
        Schema::create('knowledge_rol', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('knowledge_id');
            $table->timestamps();
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('knowledge_id')->references('id')->on('knowledge')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('knowledge_rol')->insert([
            ['rol_id' => 1, 'knowledge_id' => 26, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 1, 'knowledge_id' => 37, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 1, 'knowledge_id' => 123, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 1, 'knowledge_id' => 143, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 1, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 1, 'knowledge_id' => 151, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 1, 'knowledge_id' => 153, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['rol_id' => 2, 'knowledge_id' => 26, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 2, 'knowledge_id' => 37, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 2, 'knowledge_id' => 124, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 2, 'knowledge_id' => 126, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 2, 'knowledge_id' => 128, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 2, 'knowledge_id' => 132, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 2, 'knowledge_id' => 146, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 2, 'knowledge_id' => 149, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 2, 'knowledge_id' => 156, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['rol_id' => 3, 'knowledge_id' => 37, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 44, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 115, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 117, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 143, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 160, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 161, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 164, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 165, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 3, 'knowledge_id' => 162, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            
            ['rol_id' => 4, 'knowledge_id' => 7, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 4, 'knowledge_id' => 15, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 4, 'knowledge_id' => 47, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 4, 'knowledge_id' => 131, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 4, 'knowledge_id' => 132, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 4, 'knowledge_id' => 148, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 4, 'knowledge_id' => 157, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 4, 'knowledge_id' => 160, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['rol_id' => 5, 'knowledge_id' => 18, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 5, 'knowledge_id' => 37, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 5, 'knowledge_id' => 116, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 5, 'knowledge_id' => 122, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 5, 'knowledge_id' => 156, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 5, 'knowledge_id' => 157, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 5, 'knowledge_id' => 158, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 5, 'knowledge_id' => 161, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            
            ['rol_id' => 6, 'knowledge_id' => 37, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 6, 'knowledge_id' => 41, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 6, 'knowledge_id' => 90, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 6, 'knowledge_id' => 118, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 6, 'knowledge_id' => 125, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 6, 'knowledge_id' => 150, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 6, 'knowledge_id' => 160, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 6, 'knowledge_id' => 161, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            
            ['rol_id' => 7, 'knowledge_id' => 8, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 7, 'knowledge_id' => 37, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 7, 'knowledge_id' => 90, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 7, 'knowledge_id' => 124, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 7, 'knowledge_id' => 125, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 7, 'knowledge_id' => 143, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 7, 'knowledge_id' => 161, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 7, 'knowledge_id' => 162, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 7, 'knowledge_id' => 163, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
             
            ['rol_id' => 8, 'knowledge_id' => 35, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 8, 'knowledge_id' => 37, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 8, 'knowledge_id' => 90, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 8, 'knowledge_id' => 119, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 8, 'knowledge_id' => 121, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 8, 'knowledge_id' => 149, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 8, 'knowledge_id' => 154, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['rol_id' => 8, 'knowledge_id' => 155, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledge_rol');
    }
};