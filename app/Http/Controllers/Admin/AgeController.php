<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Ages\StoreAgeRequest;
use App\Http\Requests\Ages\UpdateAgeRequest;
use App\Http\Resources\AgeResource;
use App\Models\Age;
use App\Http\Controllers\Controller;

class AgeController extends Controller
{
    public function index()
    {
        return AgeResource::collection(Age::paginate(10))->additional([
            'datatable' => [
                'displayableColumns'=>Age::getModel()->getDisplayableColumns(),
                'table' => Age::getModel()->getTable(),
                'routeKey' => Age::getModel()->getRouteKeyName()
            ]
        ]);
    }

    public function store(StoreAgeRequest $request)
    {
        Age::create($request->only('age'));
        return response()->json(['status' => 'Successfully created!'],201);
    }

    public function show(Age $age)
    {
        return new AgeResource($age);
    }

    public function update(UpdateAgeRequest $request, Age $age)
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
