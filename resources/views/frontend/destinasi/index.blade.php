@extends('frontend.layout')

@section('content')
    <section id="index-destinasi">
        <div id="home" class="relative w-full h-screen bg-no-repeat bg-center bg-cover bg-fixed"
            style="background-image: url({{ asset('assets/bg2.jpg') }});">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black opacity-50"></div>

            {{-- Hero Content --}}
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center p-6">
                <div class="container mx-auto">
                    <h1 class="font-nanum font-bold text-white capitalize text-4xl sm:text-4xl md:text-5xl lg:text-6xl">
                        Jelajahi Destinasi Yang Anda Inginkan
                    </h1>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-36 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="font-nanum font-bold text-3xl lg:text-4xl capitalize text-sky-900">Anda Mau Kemana?</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
                {{-- Card 1 --}}
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img class="h-64 w-full object-cover transition-transform group-hover:scale-110 duration-200"
                        src="{{ asset('assets/bg.jpeg') }}" alt="Desa Jehem Image 1">
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/60 to-transparent">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-bold mb-2">Mahes Kanoko</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, ratione?</p>
                            <div class="mt-4">
                                <button
                                    class="btn bg-white text-black px-4 py-2 rounded-md font-semibold hover:bg-sky-500 hover:text-white transition">
                                    See More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img class="h-64 w-full object-cover transition-transform group-hover:scale-110 duration-200"
                        src="{{ asset('assets/bg.jpeg') }}" alt="Desa Jehem Image 2">
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/60 to-transparent">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-bold mb-2">Gunung Batur</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, ratione?</p>
                            <div class="mt-4">
                                <button
                                    class="btn bg-white text-black px-4 py-2 rounded-md font-semibold hover:bg-sky-500 hover:text-white transition">
                                    See More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img class="h-64 w-full object-cover transition-transform group-hover:scale-110 duration-200"
                        src="{{ asset('assets/bg.jpeg') }}" alt="Desa Jehem Image 3">
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/60 to-transparent">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-bold mb-2">Danau Beratan</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, ratione?</p>
                            <div class="mt-4">
                                <button
                                    class="btn bg-white text-black px-4 py-2 rounded-md font-semibold hover:bg-sky-500 hover:text-white transition">
                                    See More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
