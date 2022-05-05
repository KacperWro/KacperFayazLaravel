<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentCountry;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CommentCountryController extends Controller
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
            ->with('commentsCountries', CommentCountry::orderBy('updated_at', 'DESC')->get());
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
            'commentContent' => 'required',

            // ,'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        // $request->image->move(public_path('images'), $newImageName);

        CommentCountry::create([
            'commentContent' => $request->input('commentContent'),
            // 'image_path' => $newImageName,
            'slug' => SlugService::createSlug(CommentCountry::class, 'slug', $request->commentContent),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')
            ->with('message', 'New comment has been added');
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
            ->with('commentCountry', CommentCountry::where('slug', $slug)->first());
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
            ->with('commentCountry', CommentCountry::where('slug', $slug)->first());
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
            'commentCountry' => 'required',
            
        ]);

        CommentCountry::where('slug', $slug)
            ->update([
                'commentCountry' => $request->input('commentCountry'),
                'slug' => SlugService::createSlug(CommentCountry::class, 'slug', $request->commentContent),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/blog')
            ->with('message', 'Comment has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $commentCountry = CommentCountry::where('slug', $slug);
        $commentCountry->delete();

        return redirect('/blog')
            ->with('message', 'Comment has been successfully deleted');
    }
}

