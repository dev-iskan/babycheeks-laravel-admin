<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Ages\StoreAgeRequest;
use App\Http\Requests\Ages\UpdateAgeRequest;
use App\Http\Resources\AgeResource;
use App\Models\Age;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index(Request $request)
    {
        if ($request->pluck) {
            return Age::all()->pluck('age', 'id');
        }
        else {
            return AgeResource::collection(Age::latest()->paginate(10))->additional([
                'datatable' => [
                    'displayableColumns'=>Age::getModel()->getDisplayableColumns(),
                    'table' => Age::getModel()->getTable(),
                    'routeKey' => Age::getModel()->getRouteKeyName()
                ]
            ]);
        }
    }

    public function store(StoreAgeRequest $request)
    {
        $age = Age::create($request->only('age'));
        return response()->json(['status' => 'Successfully created!', 'age'=> $age],201);
    }

    public function show(Age $age)
    {
        return new AgeResource($age);
    }

    public function update(UpdateAgeRequest $request, Age $age)
    {
        $age->update($request->only('age'));
        return response()->json(['status' => 'Successfully updated!', 'age' => $age], 200);
    }

    public function destroy(Age $age)
    {
        $age->delete();
        return response()->json(['status' => 'Successfully deleted!'], 204);
    }
}
