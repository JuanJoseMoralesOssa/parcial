<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlantCategoryRequest;
use App\Http\Requests\UpdatePlantCategoryRequest;
use App\Models\PlantCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlantCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PlantCategory::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlantCategoryRequest $request)
    {
        $plantCategory = new PlantCategory();
        $plantCategory->name = $request->name;
        $plantCategory->description = $request->description;
        $plantCategory->is_active = $request->is_active;
        $plantCategory->priority = $request->priority;
        $plantCategory->growth_rate = $request->growth_rate;
        $plantCategory->save();
        return response()->json([
            'message' => 'Plant category created successfully',
            'plant_category' => $plantCategory
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(PlantCategory $plantCategory)
    {
        $plantCategory->plants = PlantCategory::with('plants')->get();
        return response()->json(['plant_category' => $plantCategory], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlantCategoryRequest $request, PlantCategory $plantCategory)
    {
        $plantCategory->name = $request->name ?? $plantCategory->name;
        $plantCategory->description = $request->description ?? $plantCategory->description;
        $plantCategory->is_active = $request->is_active ?? $plantCategory->is_active;
        $plantCategory->priority = $request->priority ?? $plantCategory->priority;
        $plantCategory->growth_rate = $request->growth_rate ?? $plantCategory->growth_rate;
        $plantCategory->save();
        return response()->json([
            'message' => 'Plant category updated successfully',
            'plant_category' => $plantCategory
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plantCategory = PlantCategory::findOrFail($id);
        $plantCategory->delete();
        return response()->json(['message' => 'Plant category deleted successfully'], Response::HTTP_OK);
    }
}
