<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBikeRequest;
use App\Http\Requests\UpdateBikeRequest;
use App\Http\Resources\BikeResource;
use App\Models\Bike;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

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
    public function store(StoreBikeRequest $request): JsonResource
    {
        $data = $request->validated();
        $bike = Bike::create($data);
        return new BikeResource($bike->load('owner'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bike $bike): JsonResource
    {
        return new BikeResource($bike->load('owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBikeRequest $request, Bike $bike)
    {
        $data = $request->validated();
        $bike->update($data);
        return new BikeResource($bike->load('owner'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bike $bike): Response
    {
        return $bike->delete() ? response()->noContent() : abort(500);
    }
}
