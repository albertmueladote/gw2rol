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
        Schema::create('pasives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('position');
            $table->unsignedBigInteger('especialization_id');
            $table->timestamps();

            $table->foreign('especialization_id')->references('id')->on('especializations')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('pasives')->insert([
            [
                'name' => 'Precisión vigorosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Baluarte vigorizante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Reanimador protector',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Restauración del protector',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Audacia desinteresada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Báculo honorable',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Puro de corazón',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Poder potenciador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pureza corporal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Puro de voz',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mandato de persistencia',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza de voluntad',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'La justicia es ciega',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuego interior',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza diestra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Resolución de curandero',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Justicia renovada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ira de la justicia',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuego radiante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Retribución',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia radiante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ira amplificada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Inscripciones perfectas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Instintos justificados',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensa valerosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza de los caídos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bendición del arrasador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dominio del foco',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Coraje firme',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensor incondicional',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Redención',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensas comunes',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Poder del protector',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Curación altruista',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Concentración del monje',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensa tenaz',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Virtud inspirada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Contrincante ileso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Subconsciente resuelto',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maestro de las consagraciones',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Virtud de la resolución',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Virtud inspiradora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Determinación absoluta',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Corazón Glacial',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia del virtuoso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ira incontenible',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Presencia en batalla',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Valor indomable',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Resolución de zelote',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Espíritu de ira',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ira abrasadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cetro ferviente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Exposición simbólica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Concentración furibunda',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoja entusiasta',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entusiasmo despertado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia simbólica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Armería eterna',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Égida destrozada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vengador simbólico',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Estallido furioso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Heridas de precisión',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dominio del sello',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Oportunista',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpes profundos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Enemigo insospechado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Estallido quebrantador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maestro de filos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sed de sangre',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Precisión de estallido',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Furor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Combate con dos armas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Piel gruesa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maestro de escudos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Marcha obstinada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Masacra a los débiles',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Salud de adrenalina',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Resistir el dolor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Voltereta resistente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Martillo despiadado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Armadura endurecida',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Última defensa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cólera purificadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza incondicional',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rabia versátil',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Disparo fracturador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sprint de guerrero',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Foco incondicional',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Manos rápidas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Doblarte el estandarte',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Destrucción del Potenciado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Recuperación del pendenciero',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia versátil',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dominio del hacha',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Concentración aguzada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dominio del estallido',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Escape temerario',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Zancada valiente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza restauradora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rendimiento máximo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Impulso constructor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpe corporal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mandoble eficaz',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gran fortaleza',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza titánica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia berserker',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'La fuerza da la razón',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Embate agresivo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Órdenes de marcha',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Especialista mutilador de piernas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Consuelo de soldado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Diana atronadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potenciado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Astucia de guerrero',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ignóralo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potenciar aliados',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Poder sanador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cadencia marcial',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gritos vigorosos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza de falange',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Frasco oculto',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Velocidad vigorizante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Inyección de protección',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Seguro médico',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Transmutar',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Curación por recuperación',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Límite de aguante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Regenerador de mochila',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Composición de productos químicos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hormona del crecimiento',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Propósito puro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sangre de hierro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 11,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entrada explosiva',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Granadero',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mecha corta',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cañón de cristal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pólvora cargada de acero',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cohete de puntería asistida',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Carácter explosivo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Escudo de descarga',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Carga formada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aturdidora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Metralla',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bombazo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 12,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Francotirador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Balas químicas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Matriz sangrienta',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gran calibre',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Concentración hemática',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Distribución precisa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Visión térmica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sin mira',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Acero serrado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Juggernaut',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Munición modificada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pólvora incendiaria',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 13,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sinergia depurativa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sobrescudo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Respuesta médica automática',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Expendedor de bombas de autodefensa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Recinto de reconstrucción',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Torretas experimentales',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Detonación calmante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Piernas mecánicas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Amplificador de energía',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chapa anticorrosión',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Antibúnker',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Campo de dispersión médico',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Activación optimizada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sacudida estática',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lentes reactivas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Llave eléctrica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Despliegue mecanizado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kits simplificados',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fijar',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dolor imprevisto',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Energía excesiva',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Batería cinética',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Implante de adrenalina',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aptitud con los dispositivos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 15,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Alfa de la manada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => '¡A los ojos!',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aliado potente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Voz retumbante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Silbido alto',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpe debilitador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entrenamiento a dos manos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Curación innata',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Destreza de la mascota',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Guardián de las bestias',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Velocidad del céfiro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hachas eficientes',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 16,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpe de apertura',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Forma de piedra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mirada del cazador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vínculo sonoro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Concentración alfa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sellos brutos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vista de águila',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Momento de claridad',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpe preciso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Embate de depredador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sin remordimientos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Viento a favor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 17,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rejuvenecimiento',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cazador generoso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Manantial',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayuda de aliados',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vínculo fortificador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pureza evasiva',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Llegada enérgica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ecos del viento',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Magia persistente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Venganza de la naturaleza',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensa protectora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vínculo estimulante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Viento de cola',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Filos afilados',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Reflejos instintivos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pericia de trampero',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aferramiento furioso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Observador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza del saltimbanqui',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Púas escondidas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tácticas del cazador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Desenfundado instantáneo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pies livianos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Presa feroz',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vigor natural',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hijo de la tierra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Savia de corarroble',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Atracción por el riesgo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensa del compañero',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ambidiestro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Instinto de supervivencia',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vínculo empático',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Crecimiento robusto',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Carnívoro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Conocimiento de la naturaleza',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Experto en veneno',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 20,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Evasor ágil',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Reflejos instantáneos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'A tope',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Respuesta al dolor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Elegancia felina',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Inicio protegido',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Equilibrio del timador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Difícil de atrapar',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpes fluidos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Recompensa del asesino',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ventaja',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sin parar',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 21,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Observador capaz',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Furia de asesino',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sellos de potencia',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Colmillos gemelos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpes continuos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sombra quebrantadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tolerancia entrenada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Precisión letal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpes feroces',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sin cuartel',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Homicida sigiloso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Precisión estimulante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 22,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Toque de la serpiente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entrenamiento con dagas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Atraco',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ambición mortal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Veneno de loto',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Equilibrar la balanza',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpe de pánico',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entrenamiento desvelado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Debilidad expuesta',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Veneno contundente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Improvisación',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Verdugo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 23,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Emboscada piadosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Restauración protectora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Abrazo de la sombra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ladrón oculto',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fundido con las sombras',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Salvación sombría',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Venenos succionadores',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Envuelto en sombras',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Succión sombría',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Amparo de las sombras',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rejuvenecimiento de sombra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sombra desgarradora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 24,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cleptómano',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Inatrapable',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Estallido de agilidad',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Emoción del crimen',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Preparación',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Robo generoso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Embaucador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golpes de presión',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ataques principales',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bolsillos rápidos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Juegos de manos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Emboscada mortal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 25,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Velocidad del céfiro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bendición del céfiro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Uno con el aire',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vientos feroces',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sacudida eléctrica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Inscripción',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tormenta arrasadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Alma tormentosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entrenamiento de aeromante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Haz al corazón',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aire fresco',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pararrayos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 26,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Destreza arcana',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Precisión arcana',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vitalidad renovadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Restauración arcana',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sintonía elemental',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Resurrección arcana',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bloqueo elemental',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Protección final',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Encantamiento elemental',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arcano evasivo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Relámpago arcano',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia pródiga',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 27,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Carne pétrea',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Abrazo de la tierra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Piedras dentadas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Protección elemental',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Descarga de terracota',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza de piedra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Como una roca',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bendición de la tierra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entrenamiento de geomante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Piel de diamante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Escrito en piedra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Corazón de piedra',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Llama fortalecedora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Precisión abrasadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Taumaturgo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuego abrasador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mancha solar',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rabia ardiente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Auras asfixiantes',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia arrolladora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entrenamiento de piromante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Llamas persistentes',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ímpetu de piromante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cenizas cegadoras',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Niebla calmante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hielo calmante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Esquirlas perforadoras',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Al suelo y rueda',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Onda de curación',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Interrupción calmante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ola purificadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fluye como el agua',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entrenamiento de acuamante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Agua purificadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aura contundente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Poder calmante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 30,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rejuvenecimiento metafísico',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Método de la locura',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensa ilusoria',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maestro de la manipulación',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Membrana ilusoria',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Angustia propicia',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Transferencia caótica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia caótica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Perseverancia caótica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Interrupción caótica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Comprensión prismática',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Desilusión generosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 31,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ilusión de vulnerabilidad',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Filos abundantes',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ilusiones potenciadas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ruptura desgarradora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Deslumbrante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Concentración destrozada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Egolatría',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Interrupción furiosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fragilidad',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Expresión feroz',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Angustia mental',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bloqueo de energía',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 32,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Infusión crítica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Furia fantasmal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gimnasia mental',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Disciplina de duelista',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Imágenes cristalinas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Disipación cegadora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Espejo evasivo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Elegancia de esgrimista',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maestro esgrimista',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Complejo de superioridad',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ineptitud',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Evasión engañosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 33,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Grito de dolor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tormenta de destrozos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Persistencia de la memoria',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'La promesa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Potencia de composición',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Escapista',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Prisa fantasmal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Castigo de los desencantados',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maestro del mal camino',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza fantasmal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maestro de fragmentación',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hechicería maliciosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 34,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pureza del sanador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Retorno de médico',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mantras restauradores',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Faz empática',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Distorsión inspiradora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Retorno de guarda',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Restablecimiento del ego',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Encantador temporal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Inspiración ilusoria',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensa mental',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ilusiones restauradoras',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Inscripciones borrosas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 35,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Marca de evasión',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ritual de vida',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sed rebosante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lazo de sangre',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vampírico',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vida a partir de la muerte',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gemido de Banshee',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Presencia vampírica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Últimos ritos',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Banco de sangre',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mártir impío',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Transfusión',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 36,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Precisión incisiva',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Interrupción insidiosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Envío de plaga',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Oscuridad congeladora',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fallecimiento furioso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maestro de la corrupción',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Camino de la corrupción',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Contagio parasitario',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Apunta al débil',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sudario debilitador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terror',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maldición persistente',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 37,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sudario blindado',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Carne del maestro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensa pútrida',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Eliminación amortajada',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Comprensión del alma',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Corrupción nigromántica',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Desafío oscuro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza mortal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Más allá del velo',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nova de muerte',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fervor del corruptor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Santuario impío',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 38,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gula',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Descarga inflexible',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Marca del alma',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Velocidad de las sombras',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sudario siniestro',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Púas de almas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Persistencia vital',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Miedo a la muerte',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Batería de almas',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Vida eterna',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Percepción mortal',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuego de Dhuum',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 39,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Poder del segador',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 1,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Talismán rencoroso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 2,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Renovación rencorosa',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 3,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Congelación penetrante',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 4,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Abrazo de la muerte',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 5,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Frío de muerte',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 6,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Despertar el dolor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 7,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sellos de sufrimiento',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 8,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chorro de potencia',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 9,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Temor',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 10,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Al borde de la muerte',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 11,
                'especialization_id' => 40,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Espíritu rencoroso',
                'description' => 'Descripción de la habilidad pasiva',
                'position' => 12,
                'especialization_id' => 40,
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
        Schema::dropIfExists('pasives');
    }
};
