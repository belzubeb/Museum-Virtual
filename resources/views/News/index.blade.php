@extends('layout.index')
@section('container')

<main class="flex flex-col items-center pt-24 px-6 md:px-12 lg:px-16 xl:px-24">
    <div class="relative w-full shadow-2xl">
        <img src="/src/img/Frame96.png" alt="Gambar" class="w-full h-auto object-cover rounded-xl">
        <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t rounded-b-xl">
            <h2 class="text-white text-xl md:text-2xl font-bold">Perpisahan Magang Kampus Merdeka:</h2>
            <h2 class="text-white text-lg md:text-xl font-semibold">Pemahaman Holistik Dalam Dunia Pemuseuman</h2>
            <p class="text-white text-sm md:text-base">Desember 17, 2023</p>
        </div>
    </div>
    <section class="slider-container mt-12 w-full shadow-lg">
        <button id="leftArrow" class="slider-arrow left" onclick="slide(-1)" aria-label="Previous">
            <img src="/src/img/arrow-left.svg" alt="" class="w-7">
        </button>
        <h3 class="pl-1 pt-2">Lastest News</h3>
        <div id="sliderTrack" class="slider-track">
            <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="/src/img/Rectangle 15.png" alt="Image 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                    <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                    <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                    <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                </div>
            </div>
            <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="/src/img/Rectangle 12.png" alt="Image 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                    <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                    <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                    <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                </div>
            </div>
            <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="/src/img/Rectangle 12.png" alt="Image 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                    <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                    <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                    <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                </div>
            </div>
            <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="/src/img/Rectangle 12.png" alt="Image 4" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                    <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                    <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                    <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                </div>
            </div>
            <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="/src/img/Rectangle 15.png" alt="Image 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                    <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                    <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                    <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                </div>
            </div>
            <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="/src/img/Rectangle 12.png" alt="Image 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                    <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                    <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                    <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                </div>
            </div>
            <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="/src/img/Rectangle 12.png" alt="Image 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                    <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                    <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                    <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                </div>
            </div>
            <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="/src/img/Rectangle 12.png" alt="Image 4" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                    <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                    <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                    <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                </div>
            </div>
        </div>
        <button id="rightArrow" class="slider-arrow right" onclick="slide(1)" aria-label="Next">
            <img src="/src/img/arrow-right.svg" alt="" class="w-7">
        </button>
    </section>
    <section class="mt-12 w-full">
        <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
            <img src="/src/img/Rectangle 15.png" alt="Image 1" class="w-full md:w-1/3 h-48 object-cover">
            <div class="p-6 w-full md:w-2/3">
                <h2 class="text-2xl md:text-3xl font-bold mb-2">DKI Jakarta Raih Piala Mahavidya pada LCCM 2023</h2>
                <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 12 Oktober 2023 – Lomba Cerdas Cermat Museum (LCCM) tahun 2023 secara resmi ditutup yang ditandai dengan pengumuman para pemenang...</p>
            </div>
        </article>
        <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
            <img src="/src/img/Rectangle 15.png" alt="Image 2" class="w-full md:w-1/3 h-48 object-cover">
            <div class="p-6 w-full md:w-2/3">
                <h2 class="text-2xl md:text-3xl font-bold mb-2">DKI Jakarta Raih Piala Mahavidya pada LCCM 2023</h2>
                <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 12 Oktober 2023 – Lomba Cerdas Cermat Museum (LCCM) tahun 2023 secara resmi ditutup yang ditandai dengan pengumuman para pemenang...</p>
            </div>
        </article>
        <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
            <img src="/src/img/Rectangle 15.png" alt="Image 2" class="w-full md:w-1/3 h-48 object-cover">
            <div class="p-6 w-full md:w-2/3">
                <h2 class="text-2xl md:text-3xl font-bold mb-2">DKI Jakarta Raih Piala Mahavidya pada LCCM 2023</h2>
                <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 12 Oktober 2023 – Lomba Cerdas Cermat Museum (LCCM) tahun 2023 secara resmi ditutup yang ditandai dengan pengumuman para pemenang...</p>
            </div>
        </article>
    </section>
</main>