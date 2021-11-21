<?php

namespace App\Http\Controllers;

use App\Property;

class HomeController extends Controller
{
    public function index(){
        $properties = Property::with('propertyType','propertyFeature','location')->inRandomOrder()->take(10)->get();
        return view('home',compact('properties'));
    }
}
