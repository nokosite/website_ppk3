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
                    <h1 class="font-nanum font-bold text-white capitalize text-4xl sm:text-4xl md:text-5xl lg:text-6xl">
                        Destinasi Goa Raja
                    </h1>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-wrap items-center">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 px-4 mb-10">
                    <img class="max-w-[600px] rounded-md" src="{{ asset('assets/bg2.jpg') }}">
                </div>

                <!-- Right Content -->
                <div class="w-full lg:w-1/2 px-4">
                    <h4 class="font-bold uppercase text-sky-500 text-3xl mb-3">Tentang Goa Raja</h4>
                    <p class="text-base text-slate-500 mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur doloribus illo cum quam accusantium quos, similique nobis deleniti, optio quas sed esse labore dolor consequuntur enim! Necessitatibus architecto saepe inventore vero vel deleniti sapiente repudiandae quae voluptate repellendus, velit qui, quo quod illum impedit optio itaque molestiae, nemo iure sit delectus. Asperiores dolorem amet exercitationem cum dicta nobis pariatur molestiae sed debitis possimus et veritatis, eius perferendis, molestias adipisci dolore in deserunt optio fugit, quos ipsa labore suscipit. Dignissimos est deleniti esse nesciunt fugiat, accusamus cum. Totam corrupti ipsum nemo? Dolores necessitatibus perspiciatis molestias ratione quis aperiam provident, corrupti facere temporibus nisi nobis est repudiandae recusandae fuga eius facilis? Neque voluptatem autem quae, amet consequatur ducimus mollitia similique sunt quo itaque iste earum ullam vero accusamus eaque veniam quod libero dolorem velit blanditiis impedit. Explicabo cumque, ipsum adipisci voluptas est aliquid quis a, modi unde nemo quas dolorem vero vitae voluptate numquam minus quibusdam? Veritatis quia sint dolores animi consectetur quo enim ducimus, autem dicta minus nemo quas exercitationem unde aliquam sunt perspiciatis culpa distinctio consequuntur numquam error itaque voluptas? Delectus expedita inventore omnis fuga? Soluta, autem sequi voluptatem a iure magni nobis, rerum nulla alias pariatur fugit sint nisi!</p>
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
                <div class="break-inside-avoid">
                    <img src="{{ asset('assets/bg.jpeg') }}" alt="Galeri Image 1" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                
                <!-- Image 2 -->
                <div class="break-inside-avoid">
                    <img src="{{ asset('assets/bg.jpeg') }}" alt="Galeri Image 2" class="w-full h-auto rounded-lg shadow-lg">
                </div>
    
                <!-- Image 3 -->
                <div class="break-inside-avoid">
                    <img src="{{ asset('assets/bg2.png') }}" alt="Galeri Image 3" class="w-full h-auto rounded-lg shadow-lg">
                </div>
    
                <!-- Image 4 -->
                <div class="break-inside-avoid">
                    <img src="{{ asset('assets/bg.jpeg') }}" alt="Galeri Image 4" class="w-full h-auto rounded-lg shadow-lg">
                </div>
    
                <!-- Image 5 -->
                <div class="break-inside-avoid">
                    <img src="{{ asset('assets/bg.jpeg') }}" alt="Galeri Image 5" class="w-full h-auto rounded-lg shadow-lg">
                </div>
    
                <!-- Image 6 -->
                <div class="break-inside-avoid">
                    <img src="{{ asset('assets/bg2.png') }}" alt="Galeri Image 6" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
@endsection
