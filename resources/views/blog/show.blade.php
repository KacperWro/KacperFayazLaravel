@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $country->countryName }}
        </h1>
    </div>
</div>


<div class="w-4/5 m-auto pt-20" style="word-wrap:break-word;margin-top:-8em;">
    <span class="text-gray-500" style="border-bottom:1px solid black;">
        By <span class="font-bold italic text-gray-800">{{ $country->user->name }}</span>, Created on {{ date('jS M Y', strtotime($country->updated_at)) }}
    </span>
    <img src="{{ asset('images/' . $country->image_path) }}" alt="" style="width:100%;margin-top:2em;">

    <br> <br> <br>
    <h1 class="text-4xl">General Information</h1>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        <strong>Capital:</strong> {{ $country->capital }} <br>
        <strong>Population:</strong> {{ $country->population }}<br>
            <strong>Area:</strong> {{ $country->area }}km^2 <br>
                <strong>Population Density:</strong> {{ $country->popDensity }}<br>

    </p>

    <h1 class="text-4xl">History</h1>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $country->history }}
    </p>

    <h1 class="text-4xl">Culture</h1>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $country->culture }}
    </p>

    <h1 class="text-4xl">Food</h1>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $country->food }}
    </p>

    <h1 class="text-4xl">Tourism</h1>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $country->tourism }}
    </p>
   

   
</div>

@if (Auth::check())

    <center>
    <form 
    action="/blog"
    method="POST"
    enctype="multipart/form-data"
    style="width:80%;margin-top:5em;">
    @csrf
    {{-- @method('PUT') --}}

<textarea 
    name="commentContent"
    placeholder="Post Comment Here"
    class="py-20 bg-transparent block border-b-1 w-full h-60 text-2xl outline-none"></textarea>

    <br>

    <input 
    type="hidden"
    name="countryID"
    value={{ $country->id }}
    class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">

    <br>

<button    
    type="submit"
    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
    
    Post Comment
</button>
</form>
</center>
@endif

<div class="w-4/5 m-auto pt-20" style="word-wrap:break-word">
@foreach($country->post as $comment)
<span class="text-gray-500" style="border-bottom:1px solid black;">
    By <span class="font-bold italic text-gray-800">{{ $comment->user->name }}</span>, Created on {{ date('jS M Y', strtotime($comment->updated_at)) }}
</span>
<p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $comment->commentContent }}
</p>
       @endforeach
</div>

@endsection 