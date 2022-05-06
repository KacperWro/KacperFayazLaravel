@extends('layouts.app')

@section('content')

<!-- This code has been taken from https://flowbite.com/docs/components/carousel/ -->

<div id="default-carousel" class="relative" data-carousel="slide" >
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96 shadow-xl" style="border-radius: 0">
         <!-- Item 1 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="USA">
        </div>
        <!-- Item 2 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/2560px-Flag_of_New_Zealand.svg.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="NEW Zealand">
        </div>
        <!-- Item 3 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="UK">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
  
</div>

{{-- Sidebar --}}

{{-- Recent Posts --}}

    <div class="text-center py-15 rounded-lg shadow-xl">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <br>
    <br> 

{{-- animation --}}
    <div class="flex justify-center items-center">
        <div class="spinner-grow inline-block w-8 h-8 bg-current rounded-full opacity-0 text-blue-600" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>

        <div class="spinner-grow inline-block w-8 h-8 bg-current rounded-full opacity-0 text-red-600" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>

      </div>
    
      <br>
      <br> 
{{-- Testimonials carousel real --}}
    
    <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark rounded-lg shadow-xl" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden py-10 mb-5">
          <div class="carousel-item active relative float-left w-full text-center">
            <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
              "This is one of the best blogs ever. I was able to write all about the country I 
              wanted to and it's culture! I also found all the information I was looking for."
            </p>
            <div class="mt-12 mb-6 flex justify-center">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                class="rounded-full w-24 h-24 shadow-lg"
                alt="smaple image"
              />
            </div>
            <p class="text-gray-500">- Anna Morian</p>
          </div>
          <div class="carousel-item relative float-left w-full text-center">
            <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
              "I find this blog very easy to navigate, the buttons are so handy that I never had to look
              for help or any sort of assistance"
            </p>
            <div class="mt-12 mb-6 flex justify-center">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
                class="rounded-full w-24 h-24 shadow-lg"
                alt="smaple image"
              />
            </div>
            <p class="text-gray-500">- Teresa May</p>
          </div>
          <div class="carousel-item relative float-left w-full text-center">
            <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
              "The best thing about this blog is the overall layout, it's very interactive and engaging that 
              its hard to keep yourself away from it."
            </p>
            <div class="mt-12 mb-6 flex justify-center">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rounded-full w-24 h-24 shadow-lg"
                alt="smaple image"
              />
            </div>
            <p class="text-gray-500">- Kate Allise</p>
          </div>
        </div>
        <button
          class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
{{-- subscribe to newsletter --}}
    <div class="container px-4">
        <div class="font-sans bg-gradient-to-b from-red-100 to-gray-100 rounded-lg shadow-xl p-4 text-center">
            <h2 class="font-bold break-normal text-xl md:text-3xl">Subscribe to Newsletter</h2>
            <h3 class="font-bold break-normal text-gray-600 text-sm md:text-base">Get the latest posts delivered right to your inbox</h3>
            <div class="w-full text-center pt-4">
                <form action="/register">
                    <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                        <input type="email" placeholder="youremail@example.com" class="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none">
                        <button type="submit" class="flex-1 mt-4 block md:inline-block appearance-none bg-blue-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-indigo-700">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection