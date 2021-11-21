<?php

namespace App;

use RefineriaWeb\RWRealEstate\Models\Property as ParentModel;


class Property extends ParentModel
{

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class,'properties_type_id');
    }

    public function propertyFeature(){
        return $this->hasOne(PropertyFeature::class);
    }
    public function agent(){
        return $this->belongsTo(Agent::class,'agent_id');
    }

    public function location(){
        return $this->belongsTo(Location::class,'location_id');
    }
}
