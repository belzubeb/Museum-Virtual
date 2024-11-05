@extends('layout.index')
@section('container')

<main class="mx-auto mb-4 pt-20">
    <section class="flex flex-col md:flex-row md:space-y-0">
        <div class="w-full md:w-1/3 md:pl-0">
            <img src="{{asset('images/Monumen.png')}}" alt="Monument" class="w-full h-full object-cover">
        </div>
        <div class="w-full bg-black text-white p-8">
            <div class="mb-6">
                <h2 class="text-sm font-semibold uppercase">Arsip Digital</h2>
                <h1 class="text-3xl font-bold mt-2">Pertempuran Ambarawa: Sejarah, Tokoh, Budaya</h1>
                <p class="mt-4 text-gray-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nulla arcu. Integer ipsum est, volutpat in dictum in, accumsan non libero. Phasellus cursus aliquet consequat. Curabitur ultrices odio turpis, quis lobortis odio porttitor consectetur. Ut id magna ut sem condimentum bibendum. Suspendisse vitae ante velit. Nulla eget eros dui.
                    Suspendisse potenti. Donec vel sodales mauris. Morbi sed metus nisi. In fermentum vulputate purus, non pharetra purus gravida ac. Duis eget hendrerit nunc. Praesent justo elit, hendrerit vel orci et, blandit rutrum nisi. Ut imperdiet tellus vitae tellus commodo, at interdum felis feugiat. Sed venenatis sem magna, vitae iaculis est sagittis id. Phasellus tristique tortor nec felis maximus, nec pharetra velit consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nulla arcu. Integer ipsum est, volutpat in dictum in, accumsan non libero. Phasellus cursus aliquet consequat. Curabitur ultrices odio turpis, quis lobortis odio porttitor consectetur. Ut id magna ut sem condimentum bibendum. Suspendisse vitae ante velit. Nulla eget eros dui.
                    Suspendisse potenti. Donec vel sodales mauris. Morbi sed metus nisi. In fermentum vulputate purus, non pharetra purus gravida ac. Duis eget hendrerit nunc. Praesent justo elit, hendrerit vel orci et, blandit rutrum nisi. Ut imperdiet tellus vitae tellus commodo, at interdum felis feugiat. Sed venenatis sem magna, vitae iaculis est sagittis id. Phasellus tristique tortor nec felis maximus, nec pharetra velit consequat.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-[#172812] text-white rounded-lg flex flex-col items-center">
                    <img src="{{ asset('images/cth_pahlawan.png')}}" alt="Pahlawan" class="rounded-md w-full h-64 object-cover">
                    <span class="font-semibold mt-2">Pahlawan</span>
                    <span class="text-green-300">Jendral Sudirman</span>
                </div>
                <div class="bg-[#172812] text-green-300 rounded-lg flex flex-col items-center">
                    <img src="{{ asset('images/cth_pahlawan.png')}}" alt="Senjata Tradisional" class="rounded-md w-full h-64 object-cover">
                    <span class="font-semibold mt-2">Senjata Tradisional</span>
                    <span class="text-green-300">Jendral Sudirman</span>
                </div>
                <div class="bg-[#172812] text-green-300 rounded-lg flex flex-col items-center">
                    <img src="{{ asset('images/cth_pahlawan.png')}}" alt="Budaya Daerah" class="rounded-md w-full h-64 object-cover">
                    <span class="font-semibold mt-2">Budaya Daerah</span>
                    <span class="text-green-300">Jendral Sudirman</span>
                </div>
                <div class="bg-[#172812] text-green-300 rounded-lg flex flex-col items-center">
                    <img src="{{ asset('images/cth_pahlawan.png')}}" alt="Pahlawan" class="rounded-md w-full h-64 object-cover">
                    <span class="font-semibold mt-2">Pahlawan</span>
                    <span class="text-green-300">Jendral Sudirman</span>
                </div>
                <div class="bg-[#172812] text-green-300 rounded-lg flex flex-col items-center">
                    <img src="{{ asset('images/cth_pahlawan.png')}}" alt="Senjata Tradisional" class="rounded-md w-full h-64 object-cover">
                    <span class="font-semibold mt-2">Senjata Tradisional</span>
                    <span class="text-green-300">Jendral Sudirman</span>
                </div>
                <div class="bg-[#172812] text-green-300 rounded-lg flex flex-col items-center">
                    <img src="{{ asset('images/cth_pahlawan.png')}}" alt="Budaya Daerah" class="rounded-md w-full h-64 object-cover">
                    <span class="font-semibold mt-2">Budaya Daerah</span>
                    <span class="text-green-300">Jendral Sudirman</span>
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-between items-center mt-4 mx-8">
        <a href="#" class="text-black-700 flex items-center space-x-2 hover:underline">
            <span>←</span>
            <span>Sebelumnya</span>
        </a>
        <a href="#" class="text-black-700 flex items-center space-x-2 hover:underline">
            <span>Selanjutnya</span>
            <span>→</span>
        </a>
    </section>
</main>

@endsection