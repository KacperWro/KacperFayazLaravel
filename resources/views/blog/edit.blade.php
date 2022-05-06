@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Country Post
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

<div class="w-4/5 m-auto pt-20">

    <form 
        action="/blog/{{ $country->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

    <h3 class="text-2xl font-semibold">Country Name:</h3>
    <input 
        type="text"
        name="countryName"
        value="{{ $country->countryName }}"
        class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">
        
        <br>

    <h3 class="text-2xl font-semibold">Continent ID:</h3>
   
    <input 
        type="text"
        name="continentID"
        value="{{ $country->continentID }}"
        class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">

        <br>
    <h3 class="text-2xl font-semibold">Language ID:</h3>
    <input 
        type="text"
        name="languageID"
        value="{{ $country->languageID }}"
        class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">
        
        <br>
        <h3 class="text-2xl font-semibold">Capital Name:</h3>
    <input 
        type="text"
        name="capital"
        value="{{ $country->capital }}"
        class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">
    
        <br>
        <h3 class="text-2xl font-semibold">Population:</h3>
    <input 
    type="text"
    name="population"
    value="{{ $country->population }}"
    class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">

    <br>

    <h3 class="text-2xl font-semibold">Country Area in KmSq:</h3>
    <input 
    type="text"
    name="area"
    value="{{ $country->area }}"
    class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">

    <br>

    <h3 class="text-2xl font-semibold">Country's Population Density:</h3>
    <input 
    type="text"
    name="popDensity"
    value="{{ $country->popDensity }}"
    class="bg-transparent block border-b-1 w-full h-10 text-2xl outline-none">

    <br>

    <h3 class="text-2xl font-semibold">History:</h3>
    <textarea 
        name="history"
        value="{{ $country->history }}"
        class="py-20 bg-transparent block border-b-1 w-full h-60 text-2xl outline-none"><?php echo $country->history ?></textarea>

        <br>

        <h3 class="text-2xl font-semibold">Culture:</h3>     
    <textarea 
    name="culture"
    value="{{ $country->culture }}"
    class="py-20 bg-transparent block border-b-1 w-full h-60 text-2xl outline-none"><?php echo $country->culture ?></textarea>

    <br>

    <h3 class="text-2xl font-semibold">Food:</h3>
    <textarea 
    name="food"
    value="{{ $country->food }}"
    class="py-20 bg-transparent block border-b-1 w-full h-60 text-2xl outline-none"><?php echo $country->food ?></textarea>

    <br>

    <h3 class="text-2xl font-semibold">Tourism:</h3>
    <textarea 
    name="tourism"
    value="{{ $country->tourism }}"
    class="py-20 bg-transparent block border-b-1 w-full h-60 text-2xl outline-none"><?php echo $country->tourism ?></textarea>

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

    {{-- <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}</textarea> 

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form> --}}
</div>

@endsection