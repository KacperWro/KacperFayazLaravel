@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $language->languageName }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20" style="word-wrap:break-word;margin-top:-8em;">
    <span class="text-gray-500" style="border-bottom:1px solid black;">
        By <span class="font-bold italic text-gray-800">{{ $language->user->name }}</span>, Created on {{ date('jS M Y', strtotime($language->updated_at)) }}
    </span>

    <br> <br> <br>

    <h1 class="text-4xl">Description</h1>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $language->description }}
    </p>

@endsection 