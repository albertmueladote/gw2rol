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
        Schema::create('especializations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->unsignedBigInteger('rol_id');
            $table->timestamps();

            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('especializations')->insert([
            [
                'name' => 'Honor', 
                'image' => '/images/especializations/guardian/Honor.jpg',
                'rol_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Resplandor', 
                'image' => '/images/especializations/guardian/Radiance.jpg',
                'rol_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Valor', 
                'image' => '/images/especializations/guardian/Valor.jpg',
                'rol_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Virtudes', 
                'image' => '/images/especializations/guardian/Virtues.jpg',
                'rol_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Entusiasmo', 
                'image' => '/images/especializations/guardian/Zeal.jpg',
                'rol_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Armas', 
                'image' => '/images/especializations/warrior/Arms.jpg',
                'rol_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Defensa', 
                'image' => '/images/especializations/warrior/Defense.jpg',
                'rol_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Disciplina', 
                'image' => '/images/especializations/Discipline.jpg',
                'rol_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuerza', 
                'image' => '/images/especializations/Strength.jpg',
                'rol_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tácticas', 
                'image' => '/images/especializations/Tactics.jpg',
                'rol_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dominio de las bestias', 
                'image' => '/images/especializations/ranger/Beastmastery.jpg',
                'rol_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Puntería', 
                'image' => '/images/especializations/ranger/Marksmanship.jpg',
                'rol_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Magia de la naturaleza', 
                'image' => '/images/especializations/ranger/Nature_Magic.jpg',
                'rol_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Escaramuza', 
                'image' => '/images/especializations/ranger/Skirmishing.jpg',
                'rol_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Supervivencia', 
                'image' => '/images/especializations/ranger/Wilderness_Survival.jpg',
                'rol_id' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Alquimía', 
                'image' => '/images/especializations/engineer/Alchemy.jpg',
                'rol_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Explosivos', 
                'image' => '/images/especializations/engineer/Explosives.jpg',
                'rol_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Armas de fuego', 
                'image' => '/images/especializations/engineer/Firearms.jpg',
                'rol_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Invenciones', 
                'image' => '/images/especializations/engineer/Inventions.jpg',
                'rol_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Herramientas', 
                'image' => '/images/especializations/engineer/Tools.jpg',
                'rol_id' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Acrobacia', 
                'image' => '/images/especializations/thief/Acrobatics.jpg',
                'rol_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Impactos críticos', 
                'image' => '/images/especializations/thief/Critical_Strikes.jpg',
                'rol_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Artes mortales', 
                'image' => '/images/especializations/thief/Deadly_Arts.jpg',
                'rol_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Artes de las sombras', 
                'image' => '/images/especializations/thief/Shadow_Arts.jpg',
                'rol_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Argucia', 
                'image' => '/images/especializations/thief/Trickery.jpg',
                'rol_id' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aire', 
                'image' => '/images/especializations/elementalist/Air.jpg',
                'rol_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arcano', 
                'image' => '/images/especializations/elementalist/Arcane.jpg',
                'rol_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tierra', 
                'image' => '/images/especializations/elementalist/Earth.jpg',
                'rol_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fuego', 
                'image' => '/images/especializations/elementalist/Fire.jpg',
                'rol_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Agua', 
                'image' => '/images/especializations/elementalist/Water.jpg',
                'rol_id' => 6,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Caos', 
                'image' => '/images/especializations/mesmer/Chaos.jpg',
                'rol_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dominación', 
                'image' => '/images/especializations/mesmer/Domination.jpg',
                'rol_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Duelos', 
                'image' => '/images/especializations/mesmer/Duelist.jpg',
                'rol_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ilusiones', 
                'image' => '/images/especializations/mesmer/Illusions.jpg',
                'rol_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Inspiración', 
                'image' => '/images/especializations/mesmer/Inspiration.jpg',
                'rol_id' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Magia de sangre', 
                'image' => '/images/especializations/necromancer/Blood_Magic.php',
                'rol_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maldiciones', 
                'image' => '/images/especializations/necromancer/Curses.jpg',
                'rol_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Magia de muerte', 
                'image' => '/images/especializations/necromancer/Death_Magic.jpg',
                'rol_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cosecha de almas', 
                'image' => '/images/especializations/necromancer/Soul_Reaping.jpg',
                'rol_id' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rencor', 
                'image' => '/images/especializations/necromancer/Spite.jpg',
                'rol_id' => 8,
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
        Schema::dropIfExists('especializations');
    }
};
