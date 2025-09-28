<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Throwable;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{

    public function index()
    {
        $educations = Education::all();
        
            return view('backend.educations.education', compact('educations'));
    }

    public function create()
    {
        return view('backend.educations.education');

    }
    
    public function store(Request $request)
    {
        $request->validate([
            'degree' => 'required|string|max:255|unique:educations,degree',
            'year' => 'required|integer',
            'university' => 'required|string|max:255',
            'is_true' => 'required|boolean',
        ]);

        DB::beginTransaction();

        try {
            $education = new Education();
            $education->degree = $request->degree;
            $education->year = $request->year;
            $education->university = $request->university;
            $education->is_true = $request->is_true;
            $education->save();

            DB::commit();

            // Return JSON for AJAX
            return response()->json([
                'message' => 'Education added successfully.',
                'type' => 'success',
                'education' => $education // optional, can return new record
            ], 200);

        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'message' => 'Something went wrong: ' . $th->getMessage(),
                'type' => 'error'
            ], 500);
        }
    }

    public function edit(Education $education)
    {

        return view('backend.educations.education', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        try{
            $request->validate([
                'degree' => 'required|string|max:255|unique:educations,degree,'.$education->id,
                'year' => 'required|integer',
                'university' => 'required|string|max:255',
                'is_true' => 'required|boolean',
            ]);

            DB::beginTransaction();

            $education->update([
                'degree' => $request->degree,
                'year' => $request->year,
                'university' => $request->university,
                'is_true' => $request->is_true,
            ]);

            DB::commit();

            return response()->json(['message' => 'Education updated successfully', 'type' => 'success'], 200);
        }catch(\Throwable $th){
            DB::rollBack();

            return response()->json(['message' => 'Something went wrong: '.$th->getMessage(), 'type' => 'error'], 500);
        }
    }

    public function destroy(Education $education)
    {
        $education->delete();    

        return response()->json(['message' => 'Education deleted successfully', 'type' => 'success'], 200);
    }
}