@extends('layout.index')
@section('container')

<div class="image-container pt-16">
    <img src="/src/img/Rectangle 15.png" alt="Hero Image" class="hero-image">
    <div class="image-overlay">
        <h1 class="text-2xl md:text-4xl font-bold mb-4 text-center">Bangkit Bela Negaraku<br>Jaya Indonesiaku</h1>
        <button class="bg-white text-black px-4 py-2 md:px-6 md:py-2 rounded-full hover:bg-gray-200 transition text-sm md:text-base">LEARN MORE</button>
    </div>
</div>
<main class="mx-auto px-6 py-8">
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <div class="space-y-4 shadow-2xl">
            <h2 class="text-xl md:text-2xl font-bold flex justify-between items-center">
                <span class="custom-underline">Old Masters</span>
            <img src="/src/img/arrow-right-lienar.svg" alt="" class="p-2">
            </h2>
            <div class="bg-gray-200 h-32 md:h-48">
                <img src="/src/img/Rectangle 12.png" alt="Gambar 1" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold text-xl custom-underline">Perjanjian Roem Royen</h3>
            <p class="text-sm custom-underline">7 Mei 1949</p>
            <p class="text-sm custom-underline">Hotel Des Indes, Jakarta</p>
        </div>
        <div class="space-y-4 shadow-2xl">
            <h2 class="text-xl md:text-2xl font-bold flex justify-between items-center">
                <span class="custom-underline">Old Masters</span>
                <img src="/src/img/arrow-right-lienar.svg" alt="" class="p-2">
            </h2>
            <div class="bg-gray-200 h-32 md:h-48">
                <img src="/src/img/Rectangle 12.png" alt="Gambar 2" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold text-xl custom-underline">Konferensi Meja Bundar</h3>
            <p class="text-sm custom-underline">23 Agustus - 2 November 1949</p>
            <p class="text-sm custom-underline">Den Haag, Belanda</p>
        </div>
        <div class="space-y-4 shadow-2xl">
            <h2 class="text-xl md:text-2xl font-bold flex justify-between items-center">
                <span class="custom-underline">Old Masters</span>
                <img src="/src/img/arrow-right-lienar.svg" alt="" class="p-2">
            </h2>
            <div class="bg-gray-200 h-32 md:h-48">
                <img src="/src/img/Rectangle 12.png" alt="Gambar 3" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold text-xl custom-underline">Proklamasi Kemerdekaan</h3>
            <p class="text-sm custom-underline">17 Agustus 1945</p>
            <p class="text-sm custom-underline">Jl. Pegangsaan Timur 56, Jakarta</p>
        </div>
    </section>
    <section class="flex flex-col md:flex-row items-center bg-gray-100 shadow-2xl">
        <div class="md:w-1/2 p-4 md:p-8">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Welcome To<br>The Art And History<br>Museum Bela Negara</h2>
            <p class="mb-4 text-sm md:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <button class="flex items-center space-x-2 font-semibold text-sm md:text-base">
                <span>MORE ABOUT</span>
                <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </button>
        </div>
        <div class="md:w-1/2 h-48 md:h-64 lg:h-80">
            <img src="/src/img/Rectangle 12.png" alt="Museum Interior" class="w-full h-full object-cover object-center">
        </div>
    </section>
    <section class="my-8 md:my-16 shadow-2xl">
        <div class="underline-container">
            <h2 class="text-2xl md:text-3xl font-bold">Galery</h2>
            <button class="flex items-center space-x-2 font-semibold text-sm md:text-base">
                <span>VIEW ALL GALERY</span>
                <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </button>
        </div>
        <div class="text-center text-xl md:text-3xl font-bold pt-6">
            DISINI DI ISI FOTO FOTO DOKUMENTASI KITA<br>
            SEMUA JADI DI KOSONGKAN DAHULU KARENA<br>
            MAU DI TARO ABSTRAK AJA
        </div>
    </section>
</main>