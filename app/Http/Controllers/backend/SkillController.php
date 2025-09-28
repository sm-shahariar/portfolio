<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Support\Facades\DB;
use Throwable;

class SkillController extends Controller
{

    public function index()
    {
        $skills = Skill::all();
        return view('backend.skills.skill', compact('skills'));
    }

    public function create()
    {
        return view('backend.skills.skill');  
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|array',
                'name*' => 'required|string|max:255|unique:skills,name',
                'skill_category_id' => 'required|integer|exists:skill_categories,id',
            ]);
            
            DB::beginTransaction();

            $skills = [];
            foreach($request->name as $name){
                $skills[] = Skill::create([
                    'name' => $name,
                    'skill_category_id' => $request->skill_category_id,
                ]);
            }

            $skill = Skill::create([
                'name' => trim($name),
                'skill_category_id' => $request->skill_category_id,
            ]);

            DB::commit();
            return response()->json([
                'message' => 'Skill added successfully.',
                'type' => 'success',
                'skill' => $skill // optional, can return new record
            ], 200);
            
        }catch(\Throwable $th){
            DB::rollBack();

            return response()->json([
                'message' => 'Something went wrong: ' . $th->getMessage(),
                'type' => 'error'
            ], 500);
        }
    }

    public function edit(Skill $skill)
    {
        return view('backend.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255|unique:skills,name,' . $skill->id,
                'skill_category_id' => 'required|integer',
            ]);
            
            DB::beginTransaction();
            
            $skill->update([
                'name' => $request->name,
                'skill_category_id' => $request->skill_category_id,
            ]);

            DB::commit();
            return response()->json([
                'message' => 'Skill updated successfully.',
                'type' => 'success',
                'skill' => $skill // optional, can return updated record
            ], 200);
        }catch(\Throwable $th){
            DB::rollBack();

            return response()->json([
                'message' => 'Something went wrong: ' . $th->getMessage(),
                'type' => 'error'
            ], 500);
        }
    }

    public function destroy(Skill $skill)
    {
      
    }
}