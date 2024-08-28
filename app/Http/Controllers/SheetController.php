<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sheet;
use App\Models\Characteristic;

class SheetController extends Controller
{
    public function sheets()
    {
        $sheets = Sheet::where('user_id', auth()->user()->id)->get();

        $breadcrumbs = [
            ['title' => 'Hojas de personaje', 'url' => '/sheets'],
        ];
        
        return view('sheets')->with('sheets', $sheets)->with('breadcrumbs', $breadcrumbs);
    }

    public function sheet($sheetId) {
        /*'pets', 'npcs'*/
        $sheet = Sheet::with(['rol.especializations.pasives', 'race', 'knowledge', 'items', 'equipments.rarity', 'equipments.characteristic', 'equipments.equipmentType', 'npcs', 'weapons.rarity', 'weapons.weaponType', 'weapons.weaponType.weaponSkills'])->find($sheetId);
            if($sheet->user_id == auth()->user()->id) {
            $sheet->equipments = $sheet->equipments->keyBy('equipment_type_id');
            $characteristics = new \stdClass();
            $aquatic_characteristics = new \stdClass();
            foreach($sheet->equipments AS $equipment) {
                $property = $equipment->characteristic->style;
                if(!isset($characteristics->$property)) {
                    $characteristics->$property = 0;
                }
                if(!isset($aquatic_characteristics->$property)) {
                    $aquatic_characteristics->$property = 0;
                }
                if($equipment->equipmentType->id !== 7) {
                    $characteristics->$property += $equipment->rarity->increment;
                }
                if($equipment->equipmentType->id !== 1) {
                    $aquatic_characteristics->$property += $equipment->rarity->increment;
                }
            }

            $sheet->rol->especializations->each(function ($especialization) {
                $especialization->pasives = $especialization->pasives->sortBy('position');
            });
            
            foreach(Characteristic::all() AS $characteristic) {
                $property = $characteristic->style;
                if(!isset($characteristics->$property)) {
                    $characteristics->$property = 0;
                }
                if(!isset($aquatic_characteristics->$property)) {
                    $aquatic_characteristics->$property = 0;
                }
            }
            $characteristics->power += $sheet->level;
            $characteristics->toughness += $sheet->level;
            $characteristics->vitality += $sheet->rol->hp_base + $sheet->rol->hp_level * ($sheet->level - 1);
            $characteristics->precision += $sheet->level;
            $aquatic_characteristics->power += $sheet->level;
            $aquatic_characteristics->toughness += $sheet->level;
            $aquatic_characteristics->vitality += $sheet->rol->hp_base + $sheet->rol->hp_level * ($sheet->level - 1);
            $aquatic_characteristics->precision += $sheet->level;
            $sheet->characteristics = $characteristics;
            $sheet->aquatic_characteristics = $aquatic_characteristics;
            
            $weapons = new \stdClass();
            
            foreach($sheet->weapons AS $key => $weapon) {
                $skills = array();
                foreach($weapon->weaponType->weaponSkills AS $skill) {
                    $skills[$skill->position] = $skill;
                }
                switch ($weapon->pivot->slot) {
                    case 1:
                        if($weapon->weaponType->hand == 1) {
                            unset($skills[4], $skills[5]);
                        }
                        $weapons->main_1 = $weapon;
                        break;
                    case 2:
                        unset($skills[1], $skills[2], $skills[3]);
                        $weapons->offhand_1 = $weapon;
                        break;
                    case 3:
                        if($weapon->weaponType->hand == 1) {
                            unset($skills[4], $skills[5]);
                        }
                        $weapons->main_2 = $weapon;
                        break;
                    case 4:
                        unset($skills[1], $skills[2], $skills[3]);
                        $weapons->offhand_2 = $weapon;
                        break;
                    case 5:
                        $weapons->aquatic_1 = $weapon;
                        break;
                    case 6:
                        $weapons->aquatic_2 = $weapon;
                        break;
                    default:
                        break;
                }
                $weapon->skills = $skills;
            }
            $sheet->weapons = $weapons;
            if($sheet->gender == 1) {
                $sheet->gender = 'Hombre';
            } else {
                $sheet->gender = 'Mujer';
            }

            $breadcrumbs = [
                ['title' => 'Hojas de personaje', 'url' => '/sheets'],
                ['title' => 'Hoja de personaje', 'url' => '/sheet/' . $sheet->id],
            ];
            
            return view('sheet')->with('sheet', $sheet)->with('breadcrumbs', $breadcrumbs);
        } else {
            //Esta hoja no es tuya, pillín
        }
    }
}
