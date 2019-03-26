<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\AgeRequest;
use App\Http\Resources\AgeResource;
use App\Models\Age;
use App\Http\Controllers\Controller;

class AgeController extends Controller
{
    public function index()
    {
        return AgeResource::collection(Age::all());
    }

    public function store(AgeRequest $request)
    {
        Age::create($request->only('age'));
        return response()->json(['status' => 'Successfully created!'],201);
    }

    public function show(Age $age)
    {
        return new AgeResource($age);
    }

    public function update(AgeRequest $request, Age $age)
    {
        $age->update($request->only('age'));
        return response()->json(['status' => 'Successfully updated!'], 200);
    }

    public function destroy(Age $age)
    {
        $age->delete();
        return response()->json(['status' => 'Successfully deleted!'], 202);
    }
}
