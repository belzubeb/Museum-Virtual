@extends('layout.index')
@section('container')
@foreach ($galleries as $item)

<style>
    .hero-image {
        height: 100%;
        width: 100%;
        object-fit: cover;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    }

    .image-container {
        height: 50vh;
        overflow: hidden;
        position: relative;
    }

    .image-overlay {
        position: absolute;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.3);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .custom-underline {
        text-decoration: none;
        border-bottom: 1px solid currentColor;
        padding-bottom: 1px;
    }

    .underline-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid currentColor;
        padding-bottom: 0.5rem;
    }

    .underline-container h2 {
        margin: 0;
    }

    .underline-container button {
        margin-left: auto;
    }

    .slider-card {
        min-width: 25%;
        padding: 1rem;
        box-sizing: border-box;
    }

    .slider-card img {
        width: 100%;
        height: 12rem; /* Mengatur tinggi gambar */
        object-fit: cover;
    }

    .slider-card h2 {
        font-size: 1.25rem; /* Ukuran font h2 */
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .slider-card p {
        font-size: 0.875rem; /* Ukuran font paragraf */
        color: #6B7280; /* Warna teks */
    }

    /* Mobile view: Scroll vertikal di tempat */
    @media (max-width: 768px) {
        .galeri-container {
            overflow-y: auto; /* Aktifkan scroll vertikal */
            max-height: 48rem; /* Batasi tinggi galeri */
        }

        .galeri-grid {
            flex-direction: column; /* Stack item secara vertikal */
            gap: 1rem; /* Jarak antar item vertikal */
        }

        .slider-card {
            width: 98%; /* Kartu mengikuti lebar penuh layar */
        }
    }

</style>

<div class="image-container pt-16">
            <img src="{{ asset('images/bg-home.png')}}" alt="Hero Image" class="hero-image">
            <div class="image-overlay">
                <h1 class="text-2xl md:text-5xl font-bold mb-4 text-center" style="color: #FEFAE0;">Bangkit Bela Negaraku<br>Jaya Indonesiaku</h1>
                <a href="/About">
                <button class="bg-white text-black px-4 py-2 md:px-6 md:py-2 rounded-full font-bold hover:bg-gray-200 transition text-sm md:text-base">
                    SELENGKAPNYA
                </button>
                </a>
            </div>
        </div>
        <main class="mx-auto px-6 py-8">
            <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="space-y-4">
                    <h2 class="text-xl md:text-2xl font-bold flex justify-between items-center underline-container">
                        <span>Old Masters</span>
                        <button class="p-2">
                            <img src="{{asset('images/arrow-right-linear.svg')}}" alt="Arrow Right">
                        </button>
                    </h2>
                    <div class="h-32 md:h-48">
                        <img src="{{asset('images/cover-welcome.png')}}" alt="Gambar 1" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <h3 class="font-semibold text-xl custom-underline">{{ $item->Title }}</h3>
                    <p class="text-sm custom-underline">7 Mei 1949</p>
                    <p class="text-sm custom-underline">Hotel Des Indes, Jakarta</p>
                </div>
                <div class="space-y-4">
                    <h2 class="text-xl md:text-2xl font-bold flex justify-between items-center underline-container">
                        <span>Old Masters</span>
                        <button class="p-2">
                            <img src="{{asset('images/arrow-right-linear.svg')}}" alt="Arrow Right">
                        </button>
                    </h2>
                    <div class="h-32 md:h-48">
                        <img src="{{asset('images/cover-welcome.png')}}" alt="Gambar 2" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <h3 class="font-semibold text-xl custom-underline">Konferensi Meja Bundar</h3>
                    <p class="text-sm custom-underline">23 Agustus - 2 November 1949</p>
                    <p class="text-sm custom-underline">Den Haag, Belanda</p>
                </div>
                <div class="space-y-4">
                    <h2 class="text-xl md:text-2xl font-bold flex justify-between items-center underline-container">
                        <span>Old Masters</span>
                        <button class="p-2">
                            <img src="{{asset('images/arrow-right-linear.svg')}}" alt="Arrow Right">
                        </button>
                    </h2>
                    <div class="h-32 md:h-48">
                        <img src="{{asset('images/cover-welcome.png')}}" alt="Gambar 3" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <h3 class="font-semibold text-xl custom-underline">Proklamasi Kemerdekaan</h3>
                    <p class="text-sm custom-underline">17 Agustus 1945</p>
                    <p class="text-sm custom-underline">Jl. Pegangsaan Timur 56, Jakarta</p>
                </div>
            </section>        
            <section class="flex flex-col md:flex-row items-center bg-[#92A079] shadow-2xl">
                <div class="md:w-full p-4 md:p-8 text-center">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-center">Selamat Datang di<br>Seni dan Sejarah<br>Museum Bela Negara</h2>
                    <p class="mb-4 text-xl md:text-lg text-center" >Selamat datang di Museum Virtual Bela Negara, sebuah platform digital yang dirancang untuk memberikan Anda pengalaman eksplorasi sejarah, nilai, dan semangat Bela Negara. Di sini, Anda dapat menjelajahi koleksi artefak, foto, dan cerita inspiratif tentang perjuangan bangsa dalam mempertahankan kedaulatan negara. Kami berharap pengalaman Anda di museum virtual ini dapat meningkatkan pemahaman dan kecintaan Anda terhadap tanah air serta menginspirasi semangat Bela Negara dalam kehidupan sehari-hari. Selamat menikmati eksplorasi digital Anda!</p>
                    <div class="flex justify-center">
                        <button class="flex items-center space-x-2 font-semibold text-sm md:text-base justify-center">
                            <span>LEBIH LANJUT</span>
                            <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>            
                <div class="md:w-1/2 h-48 sm:h-80 md:h-96">
                    <img src="{{asset('images/cover-welcome.png')}}" alt="Museum Interior" class="w-full h-full object-cover object-center">
                </div>
            </section>
            <section class="my-8 md:my-16">
                <div class="underline-container">
                    <h2 class="text-xl md:text-2xl font-bold">Implementasi Bela Negara</h2>
                    <button class="flex items-center space-x-2 font-semibold text-xs md:text-sm">
                        <span>VIEW ALL IMPLEMENTASI BELA NEGARA</span>
                        <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                </div>
                <div class="galeri-container overflow-x-auto">
                    <div class="galeri-grid flex space-x-2 my-1">
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, praesentium.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, error.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, id?</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, sequi.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quia.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, vel.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, soluta.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, mollitia.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ratione.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, odio?</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, odio.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                        <div class="slider-card bg-white rounded-lg overflow-hidden flex flex-col">
                            <a href="">
                                <img src="{{ asset('images/bg-home.png')}}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                            </a>                    
                            <div class="p-2">
                                <h2 class="text-xl md:text-2xl font-bold my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, aliquid.</h2>
                                <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                                <p class="text-gray-600 my-2 text-sm md:text-base">Tuli Asia</p>
                                <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @endforeach

@endsection