<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Cviebrock\EloquentSluggable\Services\SlugService;

class LanguagesController extends Controller
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
        return view('langPosts.index')
            ->with('languages', Language::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('langPosts.create');
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
            'langGroupID' => 'required',
            'languageName' => 'required',
            'description' => 'required',
            'speakersCount' => 'required',
           

            // ,'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        // $request->image->move(public_path('images'), $newImageName);

        Language::create([
            'langGroupID' => $request->input('langGroupID'),
            'languageName' => $request->input('languageName'),
            'description' => $request->input('description'),
            'speakersCount' => $request->input('speakersCount'),
            'slug' => SlugService::createSlug(Language::class, 'slug', $request->languageName),
            // 'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/langPosts')
            ->with('message', 'New language has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('langPosts.show')
            ->with('language', Language::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('langPosts.edit')
            ->with('language', Language::where('slug', $slug)->first());
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
            'langGroupID' => 'required',
            'languageName' => 'required',
            'description' => 'required',
            'speakersCount' => 'required',
        ]);

        Language::where('slug', $slug)
            ->update([
                'langGroupID' => $request->input('langGroupID'),
                'languageName' => $request->input('languageName'),
                'description' => $request->input('description'),
                'speakersCount' => $request->input('speakersCount'),
                'slug' => SlugService::createSlug(Language::class, 'slug', $request->languageName),
                // 'image_path' => $newImageName,
                'user_id' => auth()->user()->id
            ]);

        return redirect('/langPosts')
            ->with('message', 'Language has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $language = Language::where('slug', $slug);
        $language->delete();

        return redirect('/langPosts')
            ->with('message', 'Language has been successfully deleted');
    }
}

