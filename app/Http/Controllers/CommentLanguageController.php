<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentLanguage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CommentLanguageController extends Controller
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
            ->with('commentsLanguages', CommentLanguage::orderBy('updated_at', 'DESC')->get());
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

        CommentLanguage::create([
            'commentContent' => $request->input('commentContent'),
            // 'image_path' => $newImageName,
            'slug' => SlugService::createSlug(CommentLanguage::class, 'slug', $request->commentContent),
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
            ->with('commentLanguage', CommentLanguage::where('slug', $slug)->first());
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
            ->with('commentLanguage', CommentLanguage::where('slug', $slug)->first());
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
            'commentLanguage' => 'required',
            
        ]);

        CommentLanguage::where('slug', $slug)
            ->update([
                'commentLanguage' => $request->input('commentLanguage'),
                'slug' => SlugService::createSlug(CommentLanguage::class, 'slug', $request->commentContent),
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
        $commentLanguage = CommentLanguage::where('slug', $slug);
        $commentLanguage->delete();

        return redirect('/blog')
            ->with('message', 'Comment has been successfully deleted');
    }
}

