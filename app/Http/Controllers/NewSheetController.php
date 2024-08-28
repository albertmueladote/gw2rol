<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Rol;
use App\Models\Answer;
use App\Models\Equipment;
use App\Models\Item;
use App\Models\Pet;
use App\Models\Sheet;

class NewSheetController extends Controller
{
    public function newSheet()
    {
        $races = Race::all();
        $roles = Rol::all();
        $breadcrumbs = [
            ['title' => 'Nuevo personaje', 'url' => '/new-sheet'],
        ];
        
        return view('newSheet')->with('races', $races)->with('roles', $roles)->with('breadcrumbs', $breadcrumbs);
    }

    public function getRace(Request $request)
    {
        $race = Race::with('questions.answers', 'knowledge')->find($request->input('race'));
        if($race) {
            return response()->json([
                'success' => true,
                'data' => $race,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Race not found',
            ]);
        }
    }

    public function getRol(Request $request)
    {
        $rol = Rol::with('questions.answers', 'knowledge')->find($request->input('rol'));
        if($rol) {
            return response()->json([
                'success' => true,
                'data' => $rol,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Role not found',
            ]);
        }
    }

    public function getAnswerReward(Request $request)
    {
        $answer = Answer::with(['equipments.rarity', 'equipments.characteristic', 'equipments.equipmentType', 'items', 'pets', 'npcs', 'knowledge', 'question'])->find($request->input('answerId'));
        if($answer) {
            return response()->json([
                'success' => true,
                'data' => $answer,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'AnswerReward not found',
            ]);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'race' => 'required|integer|max:5',
            'rol' => 'required|integer|max:9',
            'gender' => 'required|integer|max:2',
            'charm' => 'required|integer|max:255',
            'charisma' => 'required|integer|max:255',
            'aggressiveness' => 'required|integer|max:255',
        ]);

        $sheet = new Sheet();
        $sheet->name = $validatedData['name'];
        $sheet->race_id = $validatedData['race'];
        $sheet->rol_id = $validatedData['rol'];
        $sheet->gender = $validatedData['gender'];
        $sheet->level = 1;
        $sheet->charm = $validatedData['charm'];
        $sheet->charisma = $validatedData['charisma'];
        $sheet->aggressiveness = $validatedData['aggressiveness'];
        $sheet->user_id = auth()->user()->id;
        $sheet->save();

        $raceKnowledge = $this->getRaceKnowledge($validatedData['race']);
        $rolKnowledge = $this->getRolKnowledge($validatedData['rol']);
        $answerKnowledge = [];
        
        foreach ($request->input('answers') as $answer) {
            $rewards = $this->getAnswerRewardCreate(explode('_', $answer)[1]);
            $answerKnowledge = array_merge($answerKnowledge, $rewards->knowledge->pluck('id')->toArray());
            $sheet->items()->attach($rewards['items']);
            $sheet->equipments()->attach($rewards['equipments']);
            $sheet->pets()->attach($rewards['pets']);
            $sheet->npcs()->attach($rewards['npcs']);
        }

        $knowledgeIds = array_merge(
            $raceKnowledge->knowledge->pluck('id')->toArray(),
            $rolKnowledge->knowledge->pluck('id')->toArray(),
            $answerKnowledge
        );

        foreach ($knowledgeIds as $knowledgeId) {
            $existing = $sheet->knowledge()->where('knowledge_id', $knowledgeId)->first();

            if ($existing) {
                $sheet->knowledge()->updateExistingPivot($knowledgeId, ['level' => $existing->pivot->level + 1]);
            } else {
                $sheet->knowledge()->attach($knowledgeId, ['level' => 1]);
            }
        }
    }

    public function getAnswerRewardCreate($answerId)
    {
        return Answer::with(['equipments.rarity', 'equipments.characteristic', 'equipments.equipmentType', 'items', 'pets', 'npcs', 'knowledge', 'question'])->find($answerId);
    }

    public function getRaceKnowledge($raceId)
    {
        return Race::with('knowledge')->find($raceId);
    }

    public function getRolKnowledge($rolId)
    {
        return Rol::with('knowledge')->find($rolId);
    }
}
