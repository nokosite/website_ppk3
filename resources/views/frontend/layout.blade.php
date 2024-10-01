<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    {{-- SEO Meta Data --}}
    <meta name="title" content="Desa Wisata Jehem">
    <meta name="description" content="Selamat Datang di Desa Wisata Jehem">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Indonesia">
    <meta name="author" content="MahesKanoko">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- Header Start --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Left: Logo -->
                <a href="#home" class="block py-9 w-12 h-12 bg-no-repeat bg-center bg-contain"
                    style="background-image: url({{ asset('assets/logo/logo_desa.webp') }});"></a>

                <!-- Right: Navigation -->
                <div class="flex items-center">
                    <button id="hamburger" name="hamburger" type="button" class="lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>

                    <!-- Navigation Menu -->
                    <nav id="nav-menu"
                        class="hidden lg:block absolute lg:static right-4 top-full lg:top-0 py-5 lg:py-0 bg-white lg:bg-transparent shadow-lg lg:shadow-none rounded-lg lg:rounded-none">
                        <ul class="font-mulish font-semibold capitalize lg:flex">
                            <li class="group"><a href="{{ route('home') }}"
                                    class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">Beranda</a>
                            </li>
                            <li class="group"><a href="#tentang"
                                    class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">Jelajahi</a>
                            </li>
                            <li class="group"><a href="{{ route('destination') }}"
                                    class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">Destination</a>
                            </li>
                            @foreach($categories as $category)
                                <li class="group"><a href="{{ route('destination.category', $category->slug) }}"
                                        class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">{{ $category->name }}</a>
                                </li>
                            @endforeach
                            <li class="group"><a href="#galeri"
                                    class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">Galeri</a>
                            </li>
                            <li class="group"><a href="{{ url('admin/login') }}"
                                    class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">Login</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Header End --}}

    {{-- Dinamic Seksion --}}
    @yield('content')
    {{-- Dinamic Seksion END --}}

    <!-- Footer Start -->
    <footer>
        <div class="bg-sky-500 w-ful p-12 flex flex-col items-center">
            <img class="max-w-[120px]" src="{{ asset('assets/logo/logo_desa.webp') }}">
            <p class="mt-3 font-light text-center text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro perferendis iusto odio laboriosam dolore beatae exercitationem ullam! Quisquam, quam. Ut.
            </p>
        </div>

        <div class="bg-sky-700">
            <p class="text-white text-center">
                © Mahes Kanoko 2024. Hak Cipta DiLindungi
            </p>
        </div>
    </footer>
    <!-- Footer End -->
</body>

</html>
