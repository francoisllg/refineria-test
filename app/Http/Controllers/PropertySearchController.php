<?php

namespace App\Http\Controllers;

use App\Location;
use App\Property;
use Illuminate\Http\Request;

class PropertySearchController extends Controller
{
    public function index(){
        $properties = Property::select('properties.*')
            ->join('properties_features','properties_features.property_id','=','properties.id')
            ->join('properties_types','properties_types.id','=','properties.properties_type_id')
            ->join('locations','locations.id','=','properties.location_id')->orderBy('properties_features.price')->paginate(20);
        $locations = Location::all()->sortBy('name');
        return view('properties',compact('properties','locations'));
    }

    public function search(Request $request){

                $properties = Property::select('properties.*')
                    ->join('properties_features','properties_features.property_id','=','properties.id')
                    ->join('properties_types','properties_types.id','=','properties.properties_type_id')
                    ->join('locations','locations.id','=','properties.location_id')
                    ->when($request->reference !== null, function ($query) use ($request) {
                       $query->where('reference','=', $request->reference);
                    })->when($request->property_type !== null, function ($query) use ($request) {
                       $query->where('properties_type_id','=', $request->property_type);
                    })->when($request->price_from !== null, function ($query) use ($request) {
                        $query->where('price','>=', $request->price_from);
                    })->when($request->price_to !== null, function ($query) use ($request) {
                        $query->where('price','<=', $request->price_to);
                    })->when($request->bathrooms > 0, function ($query) use ($request) {
                        $query->where('bathrooms','=', $request->bathrooms);
                    })->when($request->rooms > 0, function ($query) use ($request) {
                        $query->where('bedrooms','=', $request->rooms);
                    })->when($request->location !== null, function ($query) use ($request) {
                        $query->where('locations.id','=', $request->location);
                    })->when(isset($request->garaje), function ($query) use ($request) {
                        $query->where('garaje','=', 1);
                    })->when(isset($request->garden), function ($query) use ($request) {
                        $query->where('garden','=', 1);
                    })->when(isset($request->private_pool), function ($query) use ($request) {
                        $query->where('private_pool','=', 1);
                    })->when(isset($request->community_pool), function ($query) use ($request) {
                        $query->where('community_pool','=', 1);
                    })->orderBy('properties_features.price')->paginate(20);


        $locations = Location::all();
        return view('properties',compact('properties','locations'));

    }
}
