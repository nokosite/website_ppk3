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
    <link rel="stylesheet" href="/build/assets/app-33e9feea.css" >
    <script src="/build/assets/app-cdac73cb.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>

    {{-- Header Start --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Left: Logo -->
                <a href="{{ route('home') }}" class="block py-9 w-12 h-12 bg-no-repeat bg-center bg-contain"
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
                            <li class="group">
                                <a href="{{ route('home') }}"
                                class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">
                                    Beranda
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ route('destination') }}"
                                class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">
                                    Destination
                                </a>
                            </li>
    
                            @if($categories->count() > 1)
                                <!-- Dropdown jika kategori lebih dari satu -->
                                <li class="relative group">
                                    <button id="categoryDropdownBtn"
                                    class="text-base text-black lg:text-white py-2 mx-8 flex items-center group-hover:text-sky-500">
                                        Jelajahi
                                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                    </button>
                                    <ul id="categoryDropdownMenu"
                                    class="hidden absolute left-0 mt-2 w-40 bg-white rounded-md shadow-lg">
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="{{ route('destination.category', $category->slug) }}"
                                                    class="block px-4 py-2 text-black hover:bg-sky-500 hover:text-white">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @elseif($categories->count() === 1)
                                <!-- Jika hanya ada satu kategori -->
                                <li class="group">
                                    <a href="{{ route('destination.category', $categories->first()->slug) }}"
                                        class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">
                                        {{ $categories->first()->name }}
                                    </a>
                                </li>
                            @endif
    
                            <li class="group">
                                <a href="{{ route('galeri')}}"
                                class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">
                                    Galeri
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ url('admin/login') }}"
                                class="text-base text-black lg:text-white py-2 mx-8 flex group-hover:text-sky-500">
                                    Login
                                </a>
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
    <footer class="bg-white py-32">
        <div class="container mx-auto px-6 md:px-12 lg:px-24 flex flex-col md:flex-row justify-between items-center">
            <!-- Logo dan Nama Website -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('assets/logo/logo_desa.webp') }}" alt="Logo" class="w-16">
                <span class="text-2xl font-bold text-sky-900">Desa Wisata Jehem</span>
            </div>
    
            <!-- Kolom Layanan -->
            <div class="mt-8 md:mt-0">
                <h3 class="text-lg font-semibold text-sky-900">LAYANAN</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-sky-500">Saran Destinasi</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-sky-500">Hubungi Kami</a></li>
                </ul>
            </div>
    
            <!-- Kolom Dukungan -->
            <div class="mt-8 md:mt-0">
                <h3 class="text-lg font-semibold text-sky-900">DUKUNGAN</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-sky-500">Tentang Desa Wisata Jehem</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-sky-500">Ketentuan</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-sky-500">Kebijakan Privasi</a></li>
                </ul>
            </div>
    
            <!-- Ikuti Kami Di -->
            <div class="mt-8 md:mt-0">
                <h3 class="text-lg font-semibold text-sky-900">IKUTI KAMI DI</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-sky-500">Instagram</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-sky-500">Facebook</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    <!-- Footer End -->
    <script>
            // Untuk membuat Navbar Fixed
        window.onscroll = function () {
            const header = document.querySelector('header');
            const fixedNav = header.offsetTop;
    
            if (window.pageYOffset > fixedNav) {
                header.classList.add('navbar-fixed')
            } else {
                header.classList.remove('navbar-fixed')
            }
        }
    
    
        // Hamburger Navbar ketika mode mobile 
        const hamburger = document.querySelector('#hamburger')
        // Variable untuk memunculkan menu beranda dll
        const navMenu = document.querySelector('#nav-menu')
    
        hamburger.addEventListener('click', function() {
            // untuk toggle ketika mau memunculkan menu beranda dll
            hamburger.classList.toggle('hamburger-active')
            // ketika burger nya sudah di klik
            navMenu.classList.toggle('hidden')
            
        });
    
    
        // Dropdown Toggle Logic
        const dropdownBtn = document.getElementById('categoryDropdownBtn');
        const dropdownMenu = document.getElementById('categoryDropdownMenu');
    
        dropdownBtn.addEventListener('click', () => {
            // Toggle the visibility of the dropdown menu
            dropdownMenu.classList.toggle('hidden');
        });
    
        // Optional: Close the dropdown if clicked outside
        document.addEventListener('click', (event) => {
            const isClickInside = dropdownBtn.contains(event.target) || dropdownMenu.contains(event.target);
            if (!isClickInside) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
