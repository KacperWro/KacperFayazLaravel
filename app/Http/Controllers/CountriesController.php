<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CountriesController extends Controller
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
            ->with('countries', Country::orderBy('updated_at', 'DESC')->get());
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
            'continentID' => 'required',
            'languageID' => 'required',
            'countryName' => 'required',
            'capital' => 'required',
            'population' => 'required',
            'area' => 'required',
            'popDensity' => 'required',
            'history' => 'required',
            'culture' => 'required',
            'food' => 'required',
            'tourism' => 'required',

            // ,'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        // $request->image->move(public_path('images'), $newImageName);

        Country::create([
            'continentID' => $request->input('continentID'),
            'languageID' => $request->input('languageID'),
            'countryName' => $request->input('countryName'),
            'capital' => $request->input('capital'),
            'population' => $request->input('population'),
            'area' => $request->input('area'),
            'popDensity' => $request->input('popDensity'),
            'history' => $request->input('history'),
            'culture' => $request->input('culture'),
            'food' => $request->input('food'),
            'tourism' => $request->input('tourism'),
            'slug' => SlugService::createSlug(Country::class, 'slug', $request->countryName),
            // 'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')
            ->with('message', 'New country has been added');
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
            ->with('country', Country::where('slug', $slug)->first());
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
            ->with('country', Country::where('slug', $slug)->first());
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
            'continentID' => 'required',
            'languageID' => 'required',
            'countryName' => 'required',
            'capital' => 'required',
            'population' => 'required',
            'area' => 'required',
            'popDensity' => 'required',
            'history' => 'required',
            'culture' => 'required',
            'food' => 'required',
            'tourism' => 'required',
        ]);

        Country::where('slug', $slug)
            ->update([
                'continentID' => $request->input('continentID'),
                'languageID' => $request->input('languageID'),
                'countryName' => $request->input('countryName'),
                'capital' => $request->input('capital'),
                'population' => $request->input('population'),
                'area' => $request->input('area'),
                'popDensity' => $request->input('popDensity'),
                'history' => $request->input('history'),
                'culture' => $request->input('culture'),
                'food' => $request->input('food'),
                'tourism' => $request->input('tourism'),
                'slug' => SlugService::createSlug(Country::class, 'slug', $request->countryName),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/blog')
            ->with('message', 'Country has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $country = Country::where('slug', $slug);
        $country->delete();

        return redirect('/blog')
            ->with('message', 'Country has been successfully deleted');
    }
}

