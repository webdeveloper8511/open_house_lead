<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyControllers extends Controller
{
    public function property()
    {
        return view('dashboard.property.property');
    }

    public function propertyAdd(Request $request)
    {
        return $request->all();
    }
}
