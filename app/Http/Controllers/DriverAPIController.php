<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Http\Resources\DriverCollection;
use App\Http\Resources\DriverResource;
 
class DriverAPIController extends Controller
{
    public function index()
    {
        return new DriverCollection(Driver::paginate());
    }
 
    public function show(Driver $driver)
    {
        return new DriverResource($driver->___LOAD_RELATIONSHIPS___);
    }

    public function store(Request $request)
    {
        return new DriverResource(Driver::create($request->all()));
    }

    public function update(Request $request, Driver $driver)
    {
        $driver->update($request->all());

        return new DriverResource($driver);
    }

    public function destroy(Request $request, Driver $driver)
    {
        $driver->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}