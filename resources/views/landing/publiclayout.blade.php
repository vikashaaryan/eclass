<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') {{env("APP_NAME")}}| A Complete Coaching Soluation</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {!! ToastMagic::styles() !!}
</head>
<body>
    <div class="m-4 ">
        <nav class="bg-white  mx-auto  border rounded-full border-red-200  shadow-md">
            <div class="max-w-screen-xl mx-auto  flex flex-wrap items-center justify-between p-4 px-6">
                <!-- Logo and Brand Name -->
                <a href="{{ route('public.home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
        
                    <span
                        class="self-center text-3xl font-bold tracking-tight whitespace-nowrap text-blue-700   ">Aimers</span>
                </a>
        
                <!-- Mobile Toggle Button -->
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
        
                <!-- Navigation Links -->
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-semibold flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white ">
                        <li>
                            <a href="{{ route('public.home') }}"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-400 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">About us
                                </a>
                        </li>
                      @guest
                      <li>
                        <a href="{{route("login")}}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-400 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Student
                            Login</a>
                    </li>
                    <li>
                        <a href="{{route("public.apply")}}"
                            class=" py-2 bg-blue-500 text-white px-2 rounded-md">Apply For Admission</a>
                    </li>
                      @endguest
                      @auth
                      <li>
                        <a href="{{route("public.logout")}}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-400 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            logout</a>
                    </li>
                      @endauth
                       
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @section('content')
        
    @show
    {!! ToastMagic::scripts() !!}
</body>
</html>