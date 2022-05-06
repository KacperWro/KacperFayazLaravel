@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $country->countryName }}
        </h1>
    </div>
</div>

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/comment"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create comment
        </a>
    </div>
@endif

<div class="w-4/5 m-auto pt-20" style="word-wrap:break-word;margin-top:-8em;">
    <span class="text-gray-500" style="border-bottom:1px solid black;">
        By <span class="font-bold italic text-gray-800">{{ $country->user->name }}</span>, Created on {{ date('jS M Y', strtotime($country->updated_at)) }}
    </span>

    <br> <br> <br>
    <h1 class="text-4xl">General Information</h1>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        Capital: {{ $country->capital }},  Population: {{ $country->population }},  Area: {{ $country->area }}km^2, 
        Population Density: {{ $country->popDensity }}, 

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