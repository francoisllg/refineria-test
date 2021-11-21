<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function show($id){
        $property = Property::with('propertyType','propertyFeature','location')->findOrFail($id);
        return view('property_card',compact('property'));


    }
}
