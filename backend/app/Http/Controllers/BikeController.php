<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBikeRequest;
use App\Http\Requests\UpdateBikeRequest;
use App\Http\Resources\BikeResource;
use App\Models\Bike;
use Illuminate\Http\Resources\Json\JsonResource;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return BikeResource::collection(Bike::with('owner')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBikeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bike $bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBikeRequest $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bike $bike)
    {
        //
    }
}
