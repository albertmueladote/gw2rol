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
        Schema::create('npcs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->longText('description');
            $table->timestamps();
        });

         DB::table('npcs')->insert([
            [
                'name' => 'Bronk', 
                'image' => '/images/npcs/Bronk.png', 
                'description' => 'Apoyo (Torretas) nivel 3.<br/>Mejora pasiva (Certero) nivel 2.<br/>Armas (Rifle) nivel 3.<br/>Utilidades (Esconderse) nivel 2.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Zinga', 
                'image' => '/images/npcs/Zinga.png', 
                'description' => 'Apoyo (Sintonía) nivel 2.<br/>Conocimiento (Magia) nivel 3.<br/>Utilidades (Atletismo)<br/>Mejora pasiva (Ferocidad) nivel 2. ', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Blipp', 
                'image' => '/images/npcs/Blipp.png', 
                'description' => 'Utilidades (Investigación) nivel 3.<br/>Utilidades (Percepción) nivel 2.<br/>Mejora pasiva (Liderazgo) nivel 3.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Canni', 
                'image' => '/images/npcs/Canni.png', 
                'description' => 'Mejora pasiva (Encanto) nivel 2.<br/>Utilidades (Perspicacia) nivel 3.<br/>Conocimiento (Asura) nivel 3.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maverick', 
                'image' => '/images/npcs/Maverick.png', 
                'description' => 'Mejora pasiva (Ferocidad) nivel 3.<br/>Armas (Hacha) nivel 2.<br/>Armas (Maza) nivel 2.<br/>Utilidades (Atletismo) nivel 2.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Euryale', 
                'image' => '/images/npcs/Euryale.png', 
                'description' => 'Utilidades (Escuadron) nivel 1.<br/>Mejora pasiva (Liderazgo) nivel 2.<br/>Armas (Rifle).', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Clawspur', 
                'image' => '/images/npcs/Clawspur.png', 
                'description' => 'Armas (Espada) nivel 3.<br/>Armas (Escudo) nivel 2.<br/>Armas (Mandoble) nivel 2.<br/>Mejora pasiva (Salvajismo) nivel 2', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dinky', 
                'image' => '/images/npcs/Dinky.png', 
                'description' => 'Utilidades (Atletismo) nivel 3.<br/>Utilidades (Sigilo) nivel 2.<br/> Utilidades (Percepción) nivel 2.<br/>Utilidades (Esconderse) nivel 2.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Reeva', 
                'image' => '/images/npcs/Reeva.png', 
                'description' => 'Utilidades (Investigación) nivel 2.<br/>Armas (Rifle) nivel 2.<br/>Armas (Pistola) nivel 2.<br/>Conocimiento (Ingeniería Charr) nivel 2', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Padres adoptivos', 
                'image' => '/images/npcs/Adoptive_Parents.png', 
                'description' => 'Utilidades (Grupo) nivel 1.<br/>Utilidades (Supervivencia) nivel 2.<br/>Conocimiento (Kryta) nivel 2.', 
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
        Schema::dropIfExists('npcs');
    }
};
