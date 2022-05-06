<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Continent;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ContinentsController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')
            ->with('continents', Continent::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'continentName' => 'required',

            // ,'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        // $request->image->move(public_path('images'), $newImageName);

        Continent::create([
            'continentName' => $request->input('continentName'),
            'slug' => SlugService::createSlug(Continent::class, 'slug', $request->continentName),
            // 'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')
            ->with('message', 'New continent has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('continent', Continent::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
            ->with('continent', Continent::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'continentName' => 'required',
            
        ]);

        Continent::where('slug', $slug)
            ->update([
                'continentName' => $request->input('continentName'),
                'slug' => SlugService::createSlug(Continent::class, 'slug', $request->continentName),
                // 'image_path' => $newImageName,
                'user_id' => auth()->user()->id
            ]);

        return redirect('/blog')
            ->with('message', 'Continent has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $continent = Continent::where('slug', $slug);
        $continent->delete();

        return redirect('/blog')
            ->with('message', 'Continent has been successfully deleted');
    }
}

