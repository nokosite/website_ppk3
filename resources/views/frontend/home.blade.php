@extends('frontend.layout')

@section('content')
    {{-- Hero Section Start --}}
    <section id="home">
        <div class="relative w-full h-screen bg-no-repeat bg-center bg-cover bg-fixed" style="background-image: url({{ url('public/assets/bg4.webp') }})">
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
                    <a href="{{ route('destination') }}"
                        class="text-base font-semibold text-white bg-sky-500 py-2 px-6 rounded-lg hover:shadow-lg transition duration-300">See
                        More</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- Jelajahi Section Start --}}
    <section id="tentang" class="bg-white py-20 lg:py-36">
        <div class="container mx-auto px-6 md:px-12 lg:px-24">
            <div class="flex flex-wrap items-center -mx-4">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
                    <h4 class="text-sky-500 font-semibold uppercase text-lg lg:text-xl mb-2">Tentang Desa Jehem</h4>
                    <h2 class="text-black font-bold text-3xl lg:text-4xl leading-snug mb-5">
                        Ternyata Bukan Desa Biasa?
                    </h2>
                    <p class="text-slate-600 text-base lg:text-lg leading-relaxed">
                        Desa Wisata Jehem adalah destinasi wisata unik yang menyajikan pesona alam dan budaya lokal di Kabupaten Bangli, Bali. Di tengah kehidupan tradisional yang kental, Jehem menawarkan pengalaman yang memikat dengan perpaduan antara alam hijau, aktivitas kreatif, dan tradisi budaya yang lestari.
                    </p>
                    <p class="mt-4 text-slate-600 text-base lg:text-lg leading-relaxed">
                        Nikmati suasana pedesaan yang asri dengan pemandangan hamparan sawah dan hutan bambu yang menenangkan. Desa ini dikenal dengan keramahan warganya yang menyambut wisatawan dengan hangat, serta berbagai kerajinan tangan seperti anyaman bambu dan pertunjukan seni tradisional yang autentik.
                    </p>
                </div>
    
                <!-- Right Content -->
                <div class="w-full lg:w-1/2 px-4">
                    <h3 class="text-2xl font-semibold text-black mb-4">Ikuti Kami</h3>
                    <p class="text-slate-600 text-base lg:text-lg leading-relaxed mb-6">
                        Desa Jehem menanti kedatangan Anda untuk merasakan sendiri keindahan yang tiada duanya. Temukan kedamaian, kehangatan, dan pengalaman otentik yang tak akan terlupakan. Mari, jelajahi Desa Jehem dan jadikan perjalanan Anda lebih bermakna!
                    </p>
                    <div class="flex items-center space-x-3">
                        <a href="https://linktr.ee/desawisatajehem" target="_blank"
                            class="w-10 h-10 rounded-full border border-gray-300 hover:border-sky-500 hover:bg-sky-500 hover:text-white flex justify-center items-center transition-all duration-300">
                            <svg class="fill-current" width="20" height="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Linktree</title><path d="m13.73635 5.85251 4.00467-4.11665 2.3248 2.3808-4.20064 4.00466h5.9085v3.30473h-5.9365l4.22865 4.10766-2.3248 2.3338L12.0005 12.099l-5.74052 5.76852-2.3248-2.3248 4.22864-4.10766h-5.9375V8.12132h5.9085L3.93417 4.11666l2.3248-2.3808 4.00468 4.11665V0h3.4727zm-3.4727 10.30614h3.4727V24h-3.4727z"/></svg>
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
                        src="{{ storage_url_safe($destination->gambar) }}" alt="Desa Jehem Image 1">
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/60 to-transparent">
                        <div class="p-4 text-white">
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
                        <img loading="lazy" class="w-full h-auto object-contain" src="{{ url('public/assets/logo/bem.webp') }}"
                            alt="Logo Bem">
                    </a>

                    {{-- Logo 2 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img loading="lazy" class="w-full h-auto object-contain" src="{{ url('public/assets/logo/desa_jehem.webp') }}"
                            alt="Logo Desa Jehem">
                    </a>

                    {{-- Logo 3 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img loading="lazy" class="w-full h-auto object-contain" src="{{ url('public/assets/logo/kampusmerdeka.webp') }}"
                            alt="Logo Kampus Merdeka">
                    </a>

                    {{-- Logo 4 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img loading="lazy" class="w-full h-auto object-contain" src="{{ url('public/assets/logo/kemendikbud.webp') }}"
                            alt="Logo Kemendikbud">
                    </a>

                    {{-- Logo 5 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img loading="lazy" class="w-full h-auto object-contain" src="{{ url('public/assets/logo/logo_ppk.webp') }}"
                            alt="Logo PPK">
                    </a>

                    {{-- Logo 6 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img loading="lazy" class="w-full h-auto object-contain" src="{{ url('public/assets/logo/ppk_ormawa.webp') }}"
                            alt="Logo PPK Ormawa">
                    </a>

                    {{-- Logo 7 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img loading="lazy" class="w-full h-auto object-contain" src="{{ url('public/assets/logo/primu.webp') }}"
                            alt="Logo Primu">
                    </a>

                    {{-- Logo 8 --}}
                    <a href="#" class="flex justify-center items-center max-w-[100px] sm:max-w-[120px] mx-4">
                        <img loading="lazy" class="w-full h-auto object-contain" src="{{ url('public/assets/logo/logo_desa.webp') }}"
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
    
            <!-- Loading Indicator -->
            <div id="loading" class="text-center">
                <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-sky-500 border-solid mx-auto"></div>
                <p class="mt-4 text-lg text-slate-600">Memuat galeri...</p>
            </div>
    
            <!-- Galeri Konten -->
            <div id="galeri-content" class="hidden">
                <div class="columns-1 md:columns-2 lg:columns-3 gap-4 space-y-4">
                    @foreach($galleries->take(3) as $gallery) <!-- Menampilkan maksimal 3 foto -->
                    <div class="break-inside-avoid">
                        <img src="{{ storage_url_safe($gallery->gallery) }}" 
                             alt="Galeri Image" 
                             class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                    @endforeach
                </div>
    
                @if($galleries->count() > 3)
                <div class="text-center mt-8">
                    <a href="{{ route('galeri') }}"
                       class="bg-sky-500 text-white px-6 py-2 rounded-md hover:bg-sky-700 transition">
                        See More
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>
    
    
@endsection
