<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LanguageGroup;
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
        return view('layouts.app')
            ->with('langGroups', LanguageGroup::orderBy('updated_at', 'DESC')->get());
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
            'langGroupName' => 'required',

            // ,'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        // $request->image->move(public_path('images'), $newImageName);

        LanguageGroup::create([
            'langGroupName' => $request->input('langGroupName'),
            'slug' => SlugService::createSlug(LanguageGroup::class, 'slug', $request->langGroupName),
            // 'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')
            ->with('message', 'New language group has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('layouts.show')
            ->with('langGroup', LanguageGroup::where('slug', $slug)->first());
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
            ->with('langGroup', LanguageGroup::where('slug', $slug)->first());
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
            'langGroupName' => 'required',
            
        ]);

        LanguageGroup::where('slug', $slug)
            ->update([
                'langGroupName' => $request->input('langGroupName'),
                'slug' => SlugService::createSlug(LanguageGroup::class, 'slug', $request->langGroupName),
                // 'image_path' => $newImageName,
                'user_id' => auth()->user()->id
            ]);

        return redirect('/blog')
            ->with('message', 'Language group has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $languageGroup = LanguageGroup::where('slug', $slug);
        $languageGroup->delete();

        return redirect('/blog')
            ->with('message', 'Language group has been successfully deleted');
    }
}

