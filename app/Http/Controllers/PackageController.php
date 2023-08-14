<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageRequest;
use App\Models\Package;

class PackageController extends Controller
{
    public function store(StorePackageRequest $request)
    {
        $package = Package::create($request->all());

        return response()->json($package, 201);
    }
}
