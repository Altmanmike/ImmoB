<?php

namespace App\Http\Controllers;

use create; // ?
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Manager\PropertyManager;
use App\Http\Requests\PropertyRequest;

class PropertyController extends Controller
{
    private $propertyManager;

    public function __construct(PropertyManager $propertyManager)
    {
        $this->propertyManager = $propertyManager;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $properties = Property::paginate(8); //::all()
        return view('property.index', [
           'properties' => $properties 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $categories, Property $properties) 
    {
        //
        $categories = Category::all();
        $properties = Property::all();
        return view('property.create', [
            'categories' => $categories,
            'properties' => $properties
        ]);
        //return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PropertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        //
        /*$validatedData = $request->validate([
            'name'  => 'required|min:5|max:255',
            'email' => 'required|min:5,max:255|email'
        ]);*/

        //dd($request->all());

        $validated = $request->validated();

        // plus besoin avec le manager
        /*
        Property::create([
            'title'         => $request->input('title'),
            'category_id'   => $request->input('category_id'),             
            'type'          => $request->input('type'),
            'furnished'     => $request->input('furnished'),
            'photo'         => $request->input('photo'),
            'rooms'         => $request->input('rooms'),
            'area'          => $request->input('area'), 
            'description'   => $request->input('description'),
            'price'         => $request->input('price')
        ]);*/

        $this->propertyManager->build(new Property(), $request);
        
        return redirect()->route('properties.index')->with('warning', "Le bien a été correctement enregistré");  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, Category $category, $id) //, Category $category, $id
    {
        //
        $property = Property::where('id', $id)->firstOrFail();
        $categories = Category::all();
        //dd($property);
        //dd($category);
        //dd($categories);
        /*return view('property.edit', [
            'property' => $property,
            'categories' => $categories,
            'category' => $category
        ]);*/
        return view('property.edit', [
            'property' => $property,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PropertyRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, Property $property, $id)
    {
        // ON UTILISE UN MANAGER DONC ON PLACE CELA DANS LE MANAGER 
        $property = Property::where('id', $id)->firstOrFail();
        
        /*       
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
        $property->save();*/

        //dd($property);
        //dd(get_class_methods($this->propertyManager));

        $this->propertyManager->build($property, $request);

        //dd($this->propertyManager);
        //dd($property);

        return redirect()->route('properties.index')->with('warning', "Le bien a été mis à jour!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Property $property, $id) //, $id
    {
        $property = Property::where('id', $id)->firstOrFail();
        //dd($property);
        $property->delete();
        return redirect()->route('properties.index')->with('warning', "Le bien a été correctement supprimé!");
    }
}
