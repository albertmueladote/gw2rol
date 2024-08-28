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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->unsignedBigInteger('characteristic_id');
            $table->unsignedBigInteger('rarity_id');
            $table->unsignedBigInteger('equipment_type_id');
            $table->timestamps();

            $table->foreign('characteristic_id')->references('id')->on('characteristics')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rarity_id')->references('id')->on('rarities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('equipment_type_id')->references('id')->on('equipment_types')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('equipments')->insert([
            [
                'name' => 'Hombreras de conquistador', 
                'image' => '/images/equipment/basic/heavy/Conqueror\'s_Pauldrons.png', 
                'characteristic_id' => 2, 
                'rarity_id' => 1, 
                'equipment_type_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hombreras de fanático', 
                'image' => '/images/equipment/basic/heavy/Fanatic\'s_Pauldrons.png', 
                'characteristic_id' => 8, 
                'rarity_id' => 1, 
                'equipment_type_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Yelmo de visionario', 
                'image' => '/images/equipment/basic/heavy/Visionary\'s_Helm.png', 
                'characteristic_id' => 1, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'Spangenhelm', 
                'image' => '/images/equipment/basic/heavy/Spangenhelm.png', 
                'characteristic_id' => 2, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Casquete', 
                'image' => '/images/equipment/basic/heavy/Galea.png', 
                'characteristic_id' => 1, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hombreras de escama', 
                'image' => '/images/equipment/basic/heavy/Scale\'s_Shoulder', 
                'characteristic_id' => 5, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'Paquete multiherramientas universal', 
                'image' => '/images/equipment/basic/medium/Universal_Multitool_Pack.png', 
                'characteristic_id' => 1, 
                'rarity_id' => 1, 
                'equipment_type_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gafas Eagle-Eye', 
                'image' => '/images/equipment/basic/medium/Eagle-Eye_Goggles.png', 
                'characteristic_id' => 4, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Monóculo panscópico', 
                'image' => '/images/equipment/basic/medium/Panscopic_Monocle.png', 
                'characteristic_id' => 9, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'Máscara de anonimato', 
                'image' => '/images/equipment/basic/medium/Anonymity.png', 
                'characteristic_id' => 1, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Diadema de determinación', 
                'image' => '/images/equipment/basic/medium/Determination.png', 
                'characteristic_id' => 4, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Capucha de subterfugio', 
                'image' => '/images/equipment/basic/medium/Subterfuge.png', 
                'characteristic_id' => 6, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'Ojo glacial', 
                'image' => '/images/equipment/basic/light/Water.png', 
                'characteristic_id' => 8, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ojo ardiente', 
                'image' => '/images/equipment/basic/light/Fire.png', 
                'characteristic_id' => 1, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ojo de montaña', 
                'image' => '/images/equipment/basic/light/Earth.png', 
                'characteristic_id' => 2, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ojo de tormentas', 
                'image' => '/images/equipment/basic/light/Air.png', 
                'characteristic_id' => 4, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'La máscara de arlequín', 
                'image' => '/images/equipment/basic/light/Harlequin\'s_Smile.png', 
                'characteristic_id' => 4, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fantasma de tristeza', 
                'image' => '/images/equipment/basic/light/Phantasm_of_Sorrow.png', 
                'characteristic_id' => 6, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Máscara de terror', 
                'image' => '/images/equipment/basic/light/Fanged_Dread.png', 
                'characteristic_id' => 1, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'Máscara de demonio', 
                'image' => '/images/equipment/basic/light/Trickster_Demon.png', 
                'characteristic_id' => 1, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Máscara de calavera', 
                'image' => '/images/equipment/basic/light/Skull.png', 
                'characteristic_id' => 2, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Máscara de espectro', 
                'image' => '/images/equipment/basic/light/Ghostly_Wraith.png', 
                'characteristic_id' => 6, 
                'rarity_id' => 1, 
                'equipment_type_id' => 1, 
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
        Schema::dropIfExists('equipments');
    }
};
