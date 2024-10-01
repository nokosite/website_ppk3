@extends('frontend.layout')

@section('content')
    {{-- Hero Section Start --}}
    <section id="home">
        <div class="relative w-full h-screen bg-no-repeat bg-center bg-cover bg-fixed" style="background-image: url({{ asset('assets/bg.webp') }})">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center p-6">
                <div class="container mx-auto">
                    <h1 class="font-nanum font-thin text-white uppercase text-xl sm:text-2xl md:text-3xl lg:text-4xl">
                        visit
                        <span class="block font-bold tracking-[0.1em] text-4xl sm:text-5xl md:text-7xl lg:text-8xl">
                            jehem
                        </span>
                    </h1>
                    <p class="font-semibold italic text-white text-sm sm:text-base md:text-lg lg:text-xl mt-5 mb-10">
                        Explore and discover travel experiences
                    </p>
                    <a href="#jelajahi"
                        class="text-base font-semibold text-white bg-sky-500 py-2 px-6 rounded-lg hover:shadow-lg transition duration-300">See
                        More</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- Jelajahi Section Start --}}
    <section id="tentang" class="bg-white py-36">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 px-4 mb-10">
                    <h4 class="font-bold uppercase text-sky-500 text-xl mb-3">Tentang Desa Jehem</h4>
                    <h2 class="font-bold text-black text-3xl lg:text-4xl mb-3">Ternyata Bukan Desa Biasa?</h2>
                    <p class="text-base text-slate-500 lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Repellat nihil sint numquam similique? Natus accusantium ex provident repudiandae qui
                        cumque error odit laudantium quae maxime.</p>
                </div>

                <!-- Right Content -->
                <div class="w-full lg:w-1/2 px-4">
                    <h3 class="font-semibold text-2xl text-black mb-4">Ikuti Kita</h3>
                    <p class="text-base text-slate-500 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repudiandae error aut provident tenetur, architecto hic nemo minima perferendis incidunt
                        necessitatibus tempora voluptates!</p>
                    <div class="flex items-center">
                        <a href="https://instagram.com/maheskanoko" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full border border-black hover:border-sky-500 hover:bg-sky-500 hover:text-white flex justify-center items-center">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24">
                                <title>Instagram</title>
                                <path
                                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Jelajahi Section End --}}

    {{-- Destinasi Section Start --}}
    <section id="destinasi" class="bg-sky-100 py-36">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h4 class="font-mulish font-semibold text-lg lg:text-xl capitalize">Destinasi Wisata</h4>
                <h2 class="font-nanum font-bold text-5xl lg:text-6xl capitalize text-sky-500">Desa Jehem</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
                {{-- Card 1 --}}
                @foreach($destinations as $destination)
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img class="h-64 w-full object-cover transition-transform group-hover:scale-110 duration-200"
                        src="{{ Storage::url($destination->gambar) }}" alt="Desa Jehem Image 1">
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/60 to-transparent">
                        <div class="p-4 text-white">
                            <span class="text-green-900 bg-green-200 py-0 px-1 rounded">{{ $destination->author->name}}</span>
                            <span class="text-blue-900 bg-blue-200 py-0 px-1 rounded"><a href="{{ route('destination.category', $destination->category->slug) }}">{{ $destination->category->name }}</a></span>
                            <h3 class="text-xl font-bold mb-2">{{ $destination->title }}</h3>
                            <p>{{ $destination->excerpt }}</p>
                            <div class="mt-4">
                                <a href="{{ route('destination.show', $destination->slug) }}" class="btn bg-white text-black px-4 py-2 rounded-md font-semibold hover:bg-sky-500 hover:text-white transition">
                                    See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
    {{-- Destinasi Section End --}}


    {{-- Logo Section Start --}}
    <section id="logo" class="bg-white py-36 ">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 mt-3">
                <h4 class="font-mulish font-semibold text-lg lg:text-xl capitalize">Destinasi Wisata</h4>
                <h2 class="font-nanum font-bold text-5xl lg:text-6xl capitalize text-sky-500">Desa Jehem</h2>
                <h2 class="mt-3 font-nanum font-bold text-xl lg:text-2xl capitalize text-black">Support By</h2>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center space-x-8 lg:space-x-12">
                    {{-- Logo 1 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img class="w-full h-auto object-contain" src="{{ asset('assets/logo/bem.webp') }}"
                            alt="Logo Bem">
                    </a>

                    {{-- Logo 2 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img class="w-full h-auto object-contain" src="{{ asset('assets/logo/desa_jehem.webp') }}"
                            alt="Logo Desa Jehem">
                    </a>

                    {{-- Logo 3 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img class="w-full h-auto object-contain" src="{{ asset('assets/logo/kampusmerdeka.webp') }}"
                            alt="Logo Kampus Merdeka">
                    </a>

                    {{-- Logo 4 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img class="w-full h-auto object-contain" src="{{ asset('assets/logo/kemendikbud.webp') }}"
                            alt="Logo Kemendikbud">
                    </a>

                    {{-- Logo 5 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img class="w-full h-auto object-contain" src="{{ asset('assets/logo/logo_ppk.webp') }}"
                            alt="Logo PPK">
                    </a>

                    {{-- Logo 6 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img class="w-full h-auto object-contain" src="{{ asset('assets/logo/ppk_ormawa.webp') }}"
                            alt="Logo PPK Ormawa">
                    </a>

                    {{-- Logo 7 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img class="w-full h-auto object-contain" src="{{ asset('assets/logo/primu.webp') }}"
                            alt="Logo Primu">
                    </a>

                    {{-- Logo 8 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img class="w-full h-auto object-contain" src="{{ asset('assets/logo/logo_desa.webp') }}"
                            alt="Logo Desa">
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Logo Section End --}}

    <section id="galeri" class="bg-sky-100 py-36">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h4 class="font-mulish font-semibold text-lg lg:text-xl capitalize">Galeri</h4>
                <h2 class="font-nanum font-bold text-5xl lg:text-6xl capitalize text-sky-500">Galeri Desa Jehem</h2>
            </div>

            <!-- Masonry Grid Wrapper -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-4 space-y-4">
                <!-- Image 1 -->
                 @foreach($galleries as $gallery)
                    <div class="break-inside-avoid">
                        <img src="{{ Storage::url($gallery->gallery) }}" alt="Galeri Image 1" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                @endforeach

            </div>
        </div>

    </section>
@endsection
