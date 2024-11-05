@extends('layout.index')
@section('container')
@foreach ($galleries as $item)

<main class="pt-24 px-6 md:px-12 lg:px-16 xl:px-20">
    <div class="relative w-full shadow-2xl">
        <img src="{{ asset('images/cover-gallery.png')}}" alt="Gambar" class="w-full h-auto object-cover rounded-xl">
        <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t rounded-b-xl">
            <h2 class="text-white text-3xl md:text-2xl font-bold max-w-lg">Galeri</h2>
            <p class="text-white text-sm md:text-sm min-w-84 max-w-5xl font-semibold">Selamat datang di Galeri Museum Bela Negara, tempat kami menampilkan berbagai koleksi artefak, dokumen, dan memorabilia</p>
            <p class="text-white text-sm md:text-sm min-w-84 max-w-5xl font-semibold">yang menggambarkan semangat perjuangan dan dedikasi pahlawan-pahlawan bangsa dalam membela kedaulatan Indonesia</p>
            </div>
    </div>
    <div class="container mx-auto px-4 py-12">
        <div class="space-y-20">
            <a href="/GalleryOnclick" class="block">
            <div class="flex flex-col md:flex-row items-center md:items-start">
                <h2 class="text-7xl font-bold mb-4 md:mb-0 md:mr-8 text-gray-800">{{ $item->Tahun }}</h2>
                <div class="md:flex-1">
                    <p class="text-gray-600 mb-4 text-xl">{{$item->Description}}</p>
                    <button class="text-black font-bold px-4 py-2 rounded-full text-base border border-gray-400 hover:border-black transition flex items-center space-x-2">
                        <span>LEBIH LANJUT</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h16m0 0l-4-4m4 4l-4 4"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 md:mt-0 md:ml-8 md:w-1/3">
                    <img src="{{ asset('images/cover-welcome.png')}}" alt="1946" class="w-full h-auto object-cover rounded-xl">
                </div>
            </div>
            </a>
            <div class="flex flex-col md:flex-row-reverse items-center md:items-start">
                <h2 class="text-7xl font-bold mb-4 md:mb-0 md:ml-8 text-gray-800">1946</h2>
                <div class="md:flex-1 md:text-right">
                    <p class="text-gray-600 mb-4 text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem. Aliquam ut ante tortor. Cras posuere diam sit amet velit fringilla, dictum dapibus massa dignissim. Pellentesque sed auctor mi. Nullam condimentum mauris.</p>
                    <button class="text-black font-bold px-4 py-2 rounded-full text-base border border-gray-400 hover:border-black transition flex items-center space-x-2">
                        <span>LEBIH LANJUT</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h16m0 0l-4-4m4 4l-4 4"></path>
                        </svg>
                    </button>                        
                </div>
                <div class="mt-6 md:mt-0 md:mr-8 md:w-1/3">
                    <img src="{{ asset('images/cover-welcome.png')}}" alt="1946" class="w-full h-auto object-cover rounded-xl">
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center md:items-start">
                <h2 class="text-7xl font-bold mb-4 md:mb-0 md:mr-8 text-gray-800">1946</h2>
                <div class="md:flex-1">
                    <p class="text-gray-600 mb-4 text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem. Aliquam ut ante tortor. Cras posuere diam sit amet velit fringilla, dictum dapibus massa dignissim. Pellentesque sed auctor mi. Nullam condimentum mauris.</p>
                    <button class="text-black font-bold px-4 py-2 rounded-full text-base border border-gray-400 hover:border-black transition flex items-center space-x-2">
                        <span>LEBIH LANJUT</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h16m0 0l-4-4m4 4l-4 4"></path>
                        </svg>
                    </button>                        
                </div>
                <div class="mt-6 md:mt-0 md:ml-8 md:w-1/3">
                    <img src="{{ asset('images/cover-welcome.png')}}" alt="1946" class="w-full h-auto object-cover rounded-xl">
                </div>
            </div>
            <div class="flex flex-col md:flex-row-reverse items-center md:items-start">
                <h2 class="text-7xl font-bold mb-4 md:mb-0 md:ml-8 text-gray-800">1946</h2>
                <div class="md:flex-1 md:text-right">
                    <p class="text-gray-600 mb-4 text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem. Aliquam ut ante tortor. Cras posuere diam sit amet velit fringilla, dictum dapibus massa dignissim. Pellentesque sed auctor mi. Nullam condimentum mauris.</p>
                    <button class="text-black font-bold px-4 py-2 rounded-full text-base border border-gray-400 hover:border-black transition flex items-center space-x-2">
                        <span>LEBIH LANJUT</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h16m0 0l-4-4m4 4l-4 4"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 md:mt-0 md:mr-8 md:w-1/3">
                    <img src="{{ asset('images/cover-welcome.png')}}" alt="1946" class="w-full h-auto object-cover rounded-xl">
                </div>
            </div>
        </div>
    </div>
</main>
@endforeach