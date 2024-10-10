@extends('layout.index')
@section('container')

<main class="pt-20">
    <div class="relative w-full shadow-2xl">
        <img src="{{ asset('images/bg-home.png') }}" alt="Gambar" class="w-full h-auto object-cover rounded-xl">
        <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t rounded-b-xl">
            <h2 class="text-white text-xl md:text-2xl font-bold">Perpisahan Magang Kampus Merdeka:</h2>
            <h2 class="text-white text-lg md:text-xl font-semibold">Pemahaman Holistik Dalam Dunia Pemuseuman</h2>
            <p class="text-white text-sm md:text-base">Desember 17, 2023</p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="space-y-20">
            <div class="flex flex-col md:flex-row items-center md:items-start">
                <h2 class="text-7xl font-bold mb-4 md:mb-0 md:mr-8 text-gray-800">1946</h2>
                <div class="md:flex-1">
                    <p class="text-gray-600 mb-4 text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem. Aliquam ut ante tortor. Cras posuere diam sit amet velit fringilla, dictum dapibus massa dignissim. Pellentesque sed auctor mi. Nullam condimentum mauris.</p>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full text-base">LEARN MORE</button>
                </div>
                <div class="mt-6 md:mt-0 md:ml-8 md:w-1/3">
                    <img src="/src/img/Rectangle 12.png" alt="1946" class="w-full h-auto object-cover">
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center md:items-start">
                <h2 class="text-7xl font-bold mb-4 md:mb-0 md:ml-8 text-gray-800">1946</h2>
                <div class="md:flex-1 md:text-right">
                    <p class="text-gray-600 mb-4 text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem. Aliquam ut ante tortor. Cras posuere diam sit amet velit fringilla, dictum dapibus massa dignissim. Pellentesque sed auctor mi. Nullam condimentum mauris.</p>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full text-base">LEARN MORE</button>
                </div>
                <div class="mt-6 md:mt-0 md:mr-8 md:w-1/3">
                    <img src="/src/img/Rectangle 15.png" alt="1946" class="w-full h-auto object-cover">
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center md:items-start">
                <h2 class="text-7xl font-bold mb-4 md:mb-0 md:mr-8 text-gray-800">1946</h2>
                <div class="md:flex-1">
                    <p class="text-gray-600 mb-4 text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem. Aliquam ut ante tortor. Cras posuere diam sit amet velit fringilla, dictum dapibus massa dignissim. Pellentesque sed auctor mi. Nullam condimentum mauris.</p>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full text-base">LEARN MORE</button>
                </div>
                <div class="mt-6 md:mt-0 md:ml-8 md:w-1/3">
                    <img src="/src/img/Rectangle 12.png" alt="1946" class="w-full h-auto object-cover">
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center md:items-start">
                <h2 class="text-7xl font-bold mb-4 md:mb-0 md:ml-8 text-gray-800">1946</h2>
                <div class="md:flex-1 md:text-right">
                    <p class="text-gray-600 mb-4 text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem. Aliquam ut ante tortor. Cras posuere diam sit amet velit fringilla, dictum dapibus massa dignissim. Pellentesque sed auctor mi. Nullam condimentum mauris.</p>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full text-base">LEARN MORE</button>
                </div>
                <div class="mt-6 md:mt-0 md:mr-8 md:w-1/3">
                    <img src="/src/img/Rectangle 15.png" alt="1946" class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </div>
</main>