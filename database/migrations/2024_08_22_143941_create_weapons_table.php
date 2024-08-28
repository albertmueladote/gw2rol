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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->unsignedBigInteger('rarity_id');
            $table->unsignedBigInteger('weapon_type_id');
            $table->timestamps();

            $table->foreign('rarity_id')->references('id')->on('rarities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('weapon_type_id')->references('id')->on('weapon_types')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('weapons')->insert([
            [
                'name' => 'Hacha básica', 
                'image' => '/images/weapons/basic/Basic_Axe.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daga básica', 
                'image' => '/images/weapons/basic/Basic_Dagger.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 2, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Maza básica', 
                'image' => '/images/weapons/basic/Basic_Mace.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 3, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pistola básica', 
                'image' => '/images/weapons/basic/Basic_Pistol.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 4, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Espada básica', 
                'image' => '/images/weapons/basic/Basic_Sword.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 5, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cetro básico', 
                'image' => '/images/weapons/basic/Basic_Scepter.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 6, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Foco básico', 
                'image' => '/images/weapons/basic/Basic_Focus.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 7, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Escudo básico', 
                'image' => '/images/weapons/basic/Basic_Shield.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 8, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Antorcha básica', 
                'image' => '/images/weapons/basic/Basic_Torch.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 9, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cuerno de guerra básico', 
                'image' => '/images/weapons/basic/Basic_Warhorn.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 10, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mandoble básico', 
                'image' => '/images/weapons/basic/Basic_Greatsword.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 11, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Martillo básico', 
                'image' => '/images/weapons/basic/Basic_Hammer.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 12, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arco largo básico', 
                'image' => '/images/weapons/basic/Basic_Longbow.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 13, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rifle básico', 
                'image' => '/images/weapons/basic/Basic_Rifle.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 14, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arco corto básico', 
                'image' => '/images/weapons/basic/Basic_Shortbow.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 15, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Báculo básico', 
                'image' => '/images/weapons/basic/Basic_Staff.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 16, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lanza básica', 
                'image' => '/images/weapons/basic/Basic_Harpoon.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 17, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arpón básico', 
                'image' => '/images/weapons/basic/Basic_Speargun.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 18, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tridente básico', 
                'image' => '/images/weapons/basic/Basic_Trident.png', 
                'rarity_id' => 1, 
                'weapon_type_id' => 19, 
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
        Schema::dropIfExists('weapons');
    }
};
