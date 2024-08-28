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
        Schema::create('weapon_skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('position');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('weapon_type_id');
            $table->longText('description');
            $table->integer('coldown');
            $table->string('type');
            $table->string('objective');
            $table->integer('canalization');
            $table->timestamps();

            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('weapon_type_id')->references('id')->on('weapon_types')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('weapon_skill')->insert([
            [
                'name' => 'Golpear', 
                'image' => '/images/skills/weapons/guardian/greatsword/Golpear.png',
                'rol_id' => 1,
                'position' => 1, 
                'weapon_type_id' => 11, 
                'description' => '',
                'coldown' => 1,
                'type' => 'Rotación',
                'objective' => 'Objetivo cuerpo a cuerpo',
                'canalization' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ira rotatoria', 
                'image' => '/images/skills/weapons/guardian/greatsword/Ira_rotatoria.png',
                'rol_id' => 1,
                'position' => 2, 
                'weapon_type_id' => 11, 
                'description' => 'Este ataque se lanza cada turno que esté siendo canalizado',
                'coldown' => 8,
                'type' => 'Rotación',
                'objective' => 'Área cuerpo a cuerpo',
                'canalization' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Acto de fe', 
                'image' => '/images/skills/weapons/guardian/greatsword/Acto_de_fe.png',
                'rol_id' => 1,
                'position' => 3, 
                'weapon_type_id' => 11, 
                'description' => 'Saltas a distancia cuerpo a cuerpo del objetivo. El objetivo gana {y} contador/es de quemadura',
                'coldown' => 10,
                'type' => 'Rotación',
                'objective' => 'Objetivo a tu alrededor',
                'canalization' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Símbolo de resolución', 
                'image' => '/images/skills/weapons/guardian/greatsword/Símbolo_de_resolución.png',
                'rol_id' => 1,
                'position' => 4, 
                'weapon_type_id' => 11, 
                'description' => 'Los aliados ganan {z} contador/es de resistencia',
                'coldown' => 12,
                'type' => 'Rotación',
                'objective' => 'Área a tu alrededor',
                'canalization' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoja vinculante', 
                'image' => '/images/skills/weapons/guardian/greatsword/Hoja_vinculante.png',
                'rol_id' => 1,
                'position' => 5, 
                'weapon_type_id' => 11, 
                'description' => 'Atrae a los enemigos a distancia de cuerpo a cuerpo',
                'coldown' => 25,
                'type' => 'Rotación',
                'objective' => 'Área a tu alrededor',
                'canalization' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapon_skills');
    }
};
