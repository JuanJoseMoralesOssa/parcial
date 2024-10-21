<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use App\Models\Plant;
use Illuminate\Http\Response;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Plant::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlantRequest $request)
    {
        $plant = new Plant();
        $plant->name = $request->name;
        $plant->species = $request->species;
        $plant->family = $request->family;
        $plant->height_cm = $request->height_cm;
        $plant->average_water_needs = $request->average_water_needs;
        $plant->is_exotic = $request->is_exotic;
        $plant->is_perennial = $request->is_perennial;
        $plant->flowering_season = $request->flowering_season;
        $plant->germination_date = $request->germination_date;
        $plant->planted_at = $request->planted_at;
        $plant->description = $request->description;
        $plant->save();
        return response()->json([
            'message' => 'Plant created successfully',
            'plant' => $plant
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant $plant)
    {
        return response()->json(['plant' => $plant], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlantRequest $request, Plant $plant)
    {
        $plant->name = $request->name ?? $plant->name;
        $plant->species = $request->species ?? $plant->species;
        $plant->family = $request->family ?? $plant->family;
        $plant->height_cm = $request->height_cm ?? $plant->height_cm;
        $plant->average_water_needs = $request->average_water_needs ?? $plant->average_water_needs;
        $plant->is_exotic = $request->is_exotic ?? $plant->is_exotic;
        $plant->is_perennial = $request->is_perennial ?? $plant->is_perennial;
        $plant->flowering_season = $request->flowering_season ?? $plant->flowering_season;
        $plant->germination_date = $request->germination_date ?? $plant->germination_date;
        $plant->planted_at = $request->planted_at ?? $plant->planted_at;
        $plant->description = $request->description ?? $plant->description;
        $plant->save();
        return response()->json(['plant' => $plant], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();
        return response()->json([
            'message' => 'Plant deleted successfully',
            'plant' => $plant
        ], Response::HTTP_ACCEPTED);
    }
}
