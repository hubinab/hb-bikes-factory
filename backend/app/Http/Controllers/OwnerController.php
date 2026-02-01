<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Http\Resources\OwnerResource;
use App\Models\Owner;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return OwnerResource::collection(Owner::with('bikes')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOwnerRequest $request): JsonResource
    {
        $data = $request->validated();
        $owner = Owner::create($data);
        return new OwnerResource($owner->load('bikes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Owner $owner): JsonResource
    {
        return new OwnerResource($owner->load('bikes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        $data = $request->validated();
        $owner->update($data);
        return new OwnerResource($owner->load('bikes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner): Response
    {
        return $owner->delete() ? response()->noContent() : abort(500);
    }
}
