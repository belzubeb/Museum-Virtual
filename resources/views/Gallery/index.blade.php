@extends('layout.index')
@section('container')

        <main class="pt-24 px-4 md:px-4 lg:px-4 xl:px-4 font-poppins">
            <div class="relative w-full shadow-2xl">
                <img src="{{ asset('images/cover-gallery.png') }}" alt="Gambar"
                    class="w-full h-auto object-cover rounded-xl">
                <div class="absolute inset-0 bg-black bg-opacity-60 rounded-xl"></div>
                <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t rounded-b-xl">
                    <h2 class="text-[#FBFCFE] text-sm md:text-3xl font-bold w-full">Galeri</h2>
                    <p class="text-[#FBFCFE] text-xs md:text-xl w-full leading-relaxed">
                        Selamat datang di Galeri Museum Bela Negara, tempat kami menampilkan berbagai koleksi artefak,
                        dokumen, dan memorabilia yang menggambarkan semangat perjuangan dan dedikasi pahlawan-pahlawan
                        bangsa dalam membela kedaulatan Indonesia.
                    </p>
                </div>
            </div>
            <div class="container mx-auto px-4 py-12">
                <div class="space-y-20">
                    @foreach ($galleries as $gallery)
                        @if ($loop->odd)
                            <a href="/Galleries/{{ $gallery->id }}" class="block">
                                <div class="flex flex-col md:flex-row items-center md:items-start">
                                    <div class="flex-1 md:pr-4">
                                        <h2 class="text-5xl font-bold text-[#172812]">{{ $gallery->Title }}</h2>
                                        <div class="text-[#272742] text-lg mt-4 overflow-hidden max-h-20">
                                            {!! $gallery->Description !!}
                                        </div>
                                        <button
                                            class="mt-4 text-[#272742] font-bold px-4 py-2 rounded-full text-base border border-gray-400 hover:border-black transition flex items-center space-x-2">
                                            <span>Baca Sejarah</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 12h16m0 0l-4-4m4 4l-4 4"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex-shrink-0 mt-6 md:mt-0 md:ml-4">
                                        <img src="{{ asset('images/Galeri' . $gallery->Media1) }}" alt="Content Perang"
                                            class="w-full md:w-80 h-80 object-cover rounded-xl">
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="Galleries/{{ $gallery->id }}" class="block">
                                <div class="flex flex-col md:flex-row-reverse items-center md:items-start">
                                    <div class="flex-1 md:pl-4 text-left md:text-right flex flex-col justify-between">
                                        <div>
                                            <h2 class="text-5xl font-bold text-[#172812]">{{ $gallery->Title}}</h2>
                                            <div class="text-[#272742] text-lg mt-4 overflow-hidden max-h-20">
                                                {!! $gallery->Description !!}
                                            </div>                                        
                                        </div>
                                        <div class="mt-4 md:mt-8 self-end text-[#272742] font-bold px-4 py-2 rounded-full text-base border border-gray-400 hover:border-black transition flex items-center space-x-2">
                                            <span>Baca Sejarah</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h16m0 0l-4-4m4 4l-4 4"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 mt-6 md:mt-0 md:ml-4">
                                        <img src="{{ asset('images/Galeri' . $gallery->Media1) }}" alt="Content Perang"
                                            class="w-full md:w-80 h-80 object-cover rounded-xl">
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </main>