<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Throwable;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    
    public function index()
    {
        $services = Service::all();
        
            return view('backend.services.service', compact('services'));
    }

    public function create()
    {
        return view('backend.services.service');
    }

    public function store(Request $request)
    {
        try{

            $request->validate([
                'service_name' => 'required|string|max:255|unique:services,service_name',
                'service_description' => 'required|string|max:1000',
            ]);
            
            DB::beginTransaction();
            
            $service = Service::create([
                'service_name' => $request->service_name,
                'service_description' => $request->service_description,
            ]);

            DB::commit();
            return response()->json(['type' => 'success', 'message' => 'Service created successfully', 'data' => $service]);
            
        }catch(\Throwable $th){
            DB::rollBack();
            return response()->json(['type' => 'error', 'message' => $th->getMessage()]);
        
        }
    }

    public function edit(Service $service)
    {
        return view('backend.services.service', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        try{

            $request->validate([
                'service_name' => 'required|string|max:255|unique:services,service_name,'.$service->id,
                'service_description' => 'required|string|max:1000',
            ]);

            DB::beginTransaction();

            $service->update([
                'service_name' => $request->service_name,
                'service_description' => $request->service_description,
            ]);

            DB::commit();
            return response()->json(['type' => 'success', 'message' => 'Service updated successfully', 'data' => $service]);

        }catch(\Throwable $th){
            DB::rollBack();
            return response()->json(['type' => 'error', 'message' => $th->getMessage()]);
        }
    }

    public function destroy(string $id)
    {
        
    }
}