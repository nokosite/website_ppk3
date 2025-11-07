@extends('frontend.layout')

@section('content')
    <section>
        <section id="index-galeri">
            <div id="home" class="relative w-full h-screen bg-no-repeat bg-center bg-cover bg-fixed"
                style="background-image: url({{ public_asset('assets/bg.webp') }});">
                {{-- Overlay --}}
                <div class="absolute inset-0 bg-black opacity-50"></div>
    
                {{-- Hero Content --}}
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center p-6">
                    <div class="container mx-auto">
                        <h1 class="font-nanum font-bold text-white capitalize text-4xl sm:text-4xl md:text-5xl lg:text-6xl">
                            Kumpulan Galeri Desa Jehem
                        </h1>
                    </div>
                </div>
            </div>
    
            <div class="container mx-auto px-4 py-36 sm:px-6 lg:px-8">
                <div class="text-center mb-10">
                    <h2 class="font-nanum font-bold text-3xl lg:text-4xl capitalize text-sky-900">Dokumentasi Desa Wisata Jegem</h2>
                </div>
    
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
                    {{-- Card 1 --}}
                        @foreach($galleries as $gallery) <!-- Menampilkan maksimal 3 foto -->
                        <div class="break-inside-avoid">
                            <img src="{{ storage_url_safe($gallery->gallery) }}" 
                                 alt="Galeri Image" 
                                 class="w-full h-auto rounded-lg shadow-lg">
                        </div>
                        @endforeach
                </div>
    
            </div>
        </section>
    </section>
@endsection
