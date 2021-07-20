<?php

namespace App\Manager;

use App\Http\Requests\PropertyRequest;
use App\Models\Property;

class PropertyManager
{
    // donc $propertyManager en prop private a injecter en parametre de la fonction construct dans le controller 
    // et la fonction build ses fonctions
    public function build(Property $property, PropertyRequest $request)     
    {           
        $property->title = $request->input('title');
        $property->category_id = $request->input('category_id');
        $property->type = $request->input('type');
        $property->furnished = $request->input('furnished');
        $property->photo = $request->input('photo');
        $property->rooms = $request->input('rooms');
        $property->area = $request->input('area');
        $property->description = $request->input('description');
        $property->user_id = $request->input('user_id');
        $property->user_phone = $request->input('user_phone');
        $property->user_mail = $request->input('user_mail');
        $property->price = $request->input('price');
        $property->save();
    }
}