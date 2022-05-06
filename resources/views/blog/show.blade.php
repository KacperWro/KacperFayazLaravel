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

<div class="w-4/5 m-auto pt-20" style="word-wrap:break-word">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $country->user->name }}</span>, Created on {{ date('jS M Y', strtotime($country->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $country->history }}
    </p>
   

   
</div>

@foreach($country->post as $comment)
<div class="w-4/5 m-auto pt-20" style="word-wrap:break-word">
        {{ $comment->commentContent }}
    </diV>
       @endforeach

@endsection 