<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-red-900 py-6 shadow-xl" style="padding-bottom:2.75em;">
            <div class="overflow-y-auto py-4 px-3 bg-red-50 rounded dark:bg-red-900 shadow-xl" style="position: absolute;z-index:100;top:0;width:15em;border-radius:0;">
                <ul class="space-y-2">
         
                 <li>
                     {{-- <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"> --}}
                         <button type="button" class="flex items-center p-2 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700" aria-controls="dropdown-sidebar" data-collapse-toggle="dropdown-sidebar">
                         {{-- <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg> --}}
                        <span class="text-5xl"><h5>≡</h5></span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         
                         </button>
                         <ul id="dropdown-sidebar" class="hidden py-2 space-y-2">
         
                             <li>
                                 <a href="#" class="flex items-center p-2 text-base font-normal text-red-900 rounded-lg dark:text-white hover:bg-red-100 dark:hover:bg-red-700">
                                    {{-- <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg> --}}
                                    <span class="ml-3">Home</span>
                                 </a>
                              </li>
                              <li>
                                 <button type="button" class="flex items-center p-2 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                       {{-- <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg> --}}
                                       <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Continents</span>
                                       <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                 </button>
                                 <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                       <li>
                                          <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">Asia</a>
                                       </li>
                                       <li>
                                          <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">Europe</a>
                                       </li>
                                       <li>
                                          <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">Africa</a>
                                       </li>
                                       <li>
                                         <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">Australia</a>
                                      </li>
                                      <li>
                                         <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">North America</a>
                                      </li>
                                      <li>
                                         <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">South America</a>
                                      </li>
                                      <li>
                                         <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">Antartica</a>
                                      </li>
                                 </ul>
                              </li>
                    
                              <li>
                                <button type="button" class="flex items-center p-2 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700" aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
                                      {{-- <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg> --}}
                                      <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Languages</span>
                                      <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <ul id="dropdown-example1" class="hidden py-2 space-y-2">
                                      <li>
                                         <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">Slavic</a>
                                      </li>
                                      <li>
                                         <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">Germanic</a>
                                      </li>
                                      <li>
                                         <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-red-900 rounded-lg transition duration-75 group hover:bg-red-100 dark:text-white dark:hover:bg-red-700">Asian</a>
                                      </li>
                                </ul>
                             </li>
                    
                              <li>
                                 <a href="#" class="flex items-center p-2 text-base font-normal text-red-900 rounded-lg dark:text-white hover:bg-red-100 dark:hover:bg-red-700">
                                    {{-- <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg> --}}
                                    <span class="flex-1 ml-3 whitespace-nowrap">Login</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="flex items-center p-2 text-base font-normal text-red-900 rounded-lg dark:text-white hover:bg-red-100 dark:hover:bg-red-700">
                                    {{-- <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg> --}}
                                    <span class="flex-1 ml-3 whitespace-nowrap">Recent Posts</span>
                                    <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                 </a>
                              </li>
                         </ul>
         
                  </li>
         
         
                </ul>
             </div>

            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline font-bold" href="/">Home</a>
                    <a class="no-underline hover:underline font-bold" href="/blog">Country Posts</a>
                    <a class="no-underline hover:underline font-bold" href="/langPosts">Language Posts</a>
                    @guest
                        <a class="no-underline hover:underline font-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline font-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline font-bold"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
  
</body>
</html>
