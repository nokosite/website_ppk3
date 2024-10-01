@extends('frontend.layout')

@section('content')
    <section id="see-more">
        <div id="home" class="relative w-full h-screen bg-no-repeat bg-center bg-cover bg-fixed"
            style="background-image: url({{ asset('assets/bg2.jpg') }});">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black opacity-50"></div>

            {{-- Hero Content --}}
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center p-6">
                <div class="container mx-auto">
                <span class="text-green-900 bg-green-200 py-0 px-1 rounded">{{ $destination->author->name}}</span> -
                <span class="text-blue-900 bg-blue-200 py-0 px-1 rounded">{{ $destination->category->name }}</span>
                    <h1 class="mt-4 font-nanum font-bold text-white capitalize text-4xl sm:text-4xl md:text-5xl lg:text-6xl">
                        Destinasi {{ $destination->judul }}
                    </h1>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-wrap items-center">
                <!-- Left Content -->
                <div class="w-full px-4 mb-10">
                    <img class="rounded-md" src="{{ Storage::url($destination->gambar) }}">
                </div>

                <!-- Right Content -->
                <div class="w-full px-4">
                    <h4 class="font-bold uppercase text-sky-500 text-3xl mb-3">Tentang {{ $destination->judul }}</h4>
                    <p class="text-base text-slate-500 mb-6">
                        {!! $destination->description !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-10">
            <div class="text-center mb-10">
                <h4 class="font-mulish font-semibold text-lg lg:text-xl capitalize">Galeri</h4>
                <h2 class="font-nanum font-bold text-5xl lg:text-6xl capitalize text-sky-500">Galeri Desa Jehem</h2>
            </div>
    
            <!-- Masonry Grid Wrapper -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-4 space-y-4">
                <!-- Image 1 -->
                @foreach($destination->destination_galleries as $gallery)
                    <div class="break-inside-avoid">
                        <img src="{{ Storage::url($gallery->gallery) }}" alt="Galeri Image 1" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                @endforeach
                
            </div>
        </div>
@endsection
