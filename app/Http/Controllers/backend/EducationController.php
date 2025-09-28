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
        if($educations->isEmpty()){
            return view('backend.education');
        }else{
            return view('backend.education', compact('educations'));
        }
    }


    public function create()
    {
        return view('backend.education');

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


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}