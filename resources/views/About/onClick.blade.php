@extends('layout.index')
@section('container')

<main class="mx-auto pl-4 pt-24">
    <section class="mb-8 px-6 md:px-20 lg:px-40">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Meeting Rutin Progres Project</h1>
        
        <!-- Gambar memenuhi layar -->
        <div class="my-4">
            <img src="{{ asset('images/foto-tim.png') }}" alt="Meeting Image" class="w-full h-auto rounded-lg shadow-md">
        </div>
    
        <!-- Tanggal dengan gaya italic -->
        <p class="text-gray-600 text-sm italic text-center">11 Oktober 2024</p>
    
        <!-- Paragraf dengan teks justify dan margin kiri-kanan -->
        <div class="mt-6 text-justify text-gray-700 text-lg leading-relaxed space-y-4">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nulla arcu. Integer ipsum est, volutpat in dictum in, accumsan non libero. Phasellus cursus aliquet consequat. Curabitur ultrices odio turpis, quis lobortis odio porttitor consectetur. Ut id magna ut sem condimentum bibendum. Suspendisse vitae ante velit. Nulla eget eros dui.
            </p>
            <p>
                Suspendisse potenti. Donec vel sodales mauris. Morbi sed metus nisi. In fermentum vulputate purus, non pharetra purus gravida ac. Duis eget hendrerit nunc. Praesent justo elit, hendrerit vel orci et, blandit rutrum nisi. Ut imperdiet tellus vitae tellus commodo, at interdum felis feugiat. Sed venenatis sem magna, vitae iaculis est sagittis id. Phasellus tristique tortor nec felis maximus, nec pharetra velit consequat.
                Vivamus hendrerit tincidunt egestas. Nullam non laoreet mi. Duis a mauris non elit ultrices suscipit nec quis urna. Ut imperdiet nibh vel tincidunt posuere. Nullam ullamcorper dignissim efficitur. Phasellus faucibus volutpat mi, et pharetra lorem rutrum eu.
            </p>
            <p>
                Integer lobortis ipsum nec nulla condimentum venenatis. Aenean iaculis, magna nec lobortis dapibus, arcu magna vulputate dolor, id elementum nisl justo et odio. Fusce volutpat massa arcu, non rutrum quam tempus ac. Duis nisi velit, vestibulum in metus at, pellentesque eleifend eros. Duis tincidunt varius ligula vitae pretium. Etiam eget varius leo. Suspendisse at augue vel justo tincidunt tristique. Cras vitae dapibus felis.
            </p>
            <p>
                In dapibus non odio id tincidunt. Mauris commodo nisl facilisis dui facilisis ornare. Cras blandit euismod magna sed aliquam. In finibus feugiat ornare. Praesent cursus nulla vel nunc vulputate, vel sollicitudin lectus ultrices. Sed at metus dignissim, blandit libero sed, mattis massa. Curabitur placerat fringilla sodales. Suspendisse tincidunt mi at neque ultrices, vitae pulvinar urna rutrum. Mauris in sollicitudin nunc.
            </p>
        </div>
    </section>
    
    <div class="py-4 px-4 rounded-lg">
        <section class="flex space-x-6 overflow-x-auto py-4">
            <div class="rounded-lg p-4 min-w-[250px]">
                <img src="{{ asset('images/cover-welcome.png')}}" alt="Progres Fullstack" class="rounded-md mb-4">
                <h3 class="text-lg font-bold">Progres Fullstack</h3>
                <p class="text-sm text-gray-500">11 Oktober 2024</p>
            </div>
            <div class="rounded-lg p-4 min-w-[250px]">
                <img src="{{ asset('images/cover-welcome.png')}}" alt="Progres Alice 3" class="rounded-md mb-4">
                <h3 class="text-lg font-bold">Progres Alice 3</h3>
                <p class="text-sm text-gray-500">11 Oktober 2024</p>
            </div>
            <div class="rounded-lg p-4 min-w-[250px]">
                <img src="{{ asset('images/cover-welcome.png')}}" alt="Progres Alice 3" class="rounded-md mb-4">
                <h3 class="text-lg font-bold">Progres Alice 3</h3>
                <p class="text-sm text-gray-500">11 Oktober 2024</p>
            </div>
            <div class="rounded-lg p-4 min-w-[250px]">
                <img src="{{ asset('images/cover-welcome.png')}}" alt="Progres Jurnal" class="rounded-md mb-4">
                <h3 class="text-lg font-bold">Progres Jurnal</h3>
                <p class="text-sm text-gray-500">11 Oktober 2024</p>
            </div>
            <div class="rounded-lg p-4 min-w-[250px]">
                <img src="{{ asset('images/cover-welcome.png')}}" alt="Progres Alice 2" class="rounded-md mb-4">
                <h3 class="text-lg font-bold">Progres Alice 2</h3>
                <p class="text-sm text-gray-500">11 Oktober 2024</p>
            </div>
            <div class="rounded-lg p-4 min-w-[250px]">
                <img src="{{ asset('images/cover-welcome.png')}}" alt="Progres Fullstack v2" class="rounded-md mb-4">
                <h3 class="text-lg font-bold">Progres Fullstack v2</h3>
                <p class="text-sm text-gray-500">11 Oktober 2024</p>
            </div>
        </section>
    </div>
</main>