<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        $properties = Property::paginate(4);  // on peut renommer all() en paginate(nb_properties)
        //dd($properties);
        return view('incs.properties', [ 
            'properties' => $properties 
        ]);
    }

    public function show(Property $property, $id)
    {
        //$property = Property::where('slug', $slug)->firstOrFail();
        $property = Property::where('id', $id)->firstOrFail();
        //dd($property);

        return view('property', [
            'property' => $property
        ]);
    }

    public function admin()
    {
        return view('incs.admin');
    }
}
