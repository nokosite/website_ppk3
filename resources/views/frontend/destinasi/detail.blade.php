@extends('frontend.layout')

@section('content')
    <section id="see-more">
        <!-- Hero Section -->
        <div id="home" class="relative w-full h-screen bg-no-repeat bg-center bg-cover bg-fixed" 
            style="background-image: url({{ storage_url_safe($destination->gambar) }});">
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Hero Content -->
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center p-6">
                <div class="container mx-auto">
                    <h1 class="mt-4 font-nanum font-bold text-white capitalize text-4xl md:text-5xl lg:text-6xl">
                        Destinasi {{ $destination->judul }}
                    </h1>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-wrap md:flex-nowrap items-start md:items-center">
                <!-- Left Image -->
                <div class="w-full md:w-1/2 px-4 mb-10 md:mb-0">
                    <img 
                    loading="lazy"
                    role="presentation" 
                    decoding="async"
                    fetchpriority="high"
                    class="rounded-md shadow-lg" src="{{ storage_url_safe($destination->gambar) }}" alt="Gambar Destinasi">
                </div>

                <!-- Right Content -->
                <div class="w-full md:w-1/2 px-4">
                    <h4 class="font-bold uppercase text-sky-500 text-3xl mb-3">Tentang {{ $destination->judul }}</h4>
                    <p class="text-base text-slate-500 mb-6">
                        {!! $destination->description !!}
                    </p>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="container mx-auto px-4 py-10">
            <div class="text-center mb-10">
                <h4 class="font-mulish font-semibold text-lg lg:text-xl capitalize">Galeri</h4>
                <h2 class="font-nanum font-bold text-5xl lg:text-6xl capitalize text-sky-500">Galeri Desa Jehem</h2>
            </div>

            <div id="loading" class="text-center">
                <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-sky-500 border-solid mx-auto"></div>
                <p class="mt-4 text-lg text-slate-600">Memuat galeri...</p>
            </div>

            <!-- Masonry Grid -->
            <div id="galeri-content" class="hidden">
                <div class="columns-1 md:columns-2 lg:columns-3 gap-4 space-y-4">
                    @foreach($destination->destination_galleries as $gallery)
                    <div class="break-inside-avoid overflow-hidden rounded-lg shadow-lg">
                        <img
                            loading="lazy"
                            role="presentation" 
                            decoding="async"
                            fetchpriority="high"
                            src="{{ storage_url_safe($gallery->gallery) }}" 
                            alt="Galeri Image" class="w-full h-auto object-cover">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Gmaps Section --}}
        <div class="container mx-auto px-4 py-10">
            <div class="text-center mb-10">
                <h2 class="font-nanum font-bold text-5xl lg:text-6xl capitalize text-sky-500">Google Maps</h2>
            </div>

            <div class="flex justify-center items-center">
                {!! $destination->google_maps !!}
            </div>
        </div>
    </section>
    
</section>

@endsection
