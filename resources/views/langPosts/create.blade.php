@extends('layouts.app')

@section('content')

{{-- <p class="text-base md:text-sm text-green-500 font-bold">&lt; 
<a href="#" class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">BACK TO HOME</a></p> --}}

<div class="w-4/5 m-auto text-left">

    <p class="text-base md:text-sm text-red-900 font-bold pt-5 pl-5">&lt; 
    <a href="/" class="text-base md:text-sm text-red-900 font-bold no-underline hover:underline">BACK TO HOME</a></p>
        

    <div class="py-15">
        <h1 class="text-5xl text-red-900">
            Create Language Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto p-10 border shadow-lg">
    <form 
        action="/langPosts"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <h3 class="text-2xl font-semibold">Language Name:</h3>
        <input 
            type="text"
            name="languageName"
            placeholder="Please type in Language Name here..."
            class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">
            
            <br>

        <h3 class="text-2xl font-semibold">Language Group ID:</h3>
        <input 
            type="text"
            name="langGroupID"
            placeholder="Please type in Language Group ID here..."
            class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">

            <br>
        
            <h3 class="text-2xl font-semibold">Total Speakers:</h3>
        <input 
        type="text"
        name="speakersCount"
        placeholder="Please type in population of country here..."
        class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">

        <br>

        <h3 class="text-2xl font-semibold">Description:</h3>
        <textarea 
            name="description"
            placeholder="Please type in description of language here..."
            class="py-20 bg-transparent block border-b-1 w-full h-60 text-2xl outline-none"></textarea>

            <br>
        
        <h3 class="text-2xl pl-2 font-semibold"> Upload picture</h3>
        <div class="bg-grey-lighter pt-1">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file(s)
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            
            Submit Post
        </button>
    </form>
</div>

@endsection