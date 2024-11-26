@extends('layout.index')
@section('container')

<body class="font-poppins bg-[#FBFCFE]">
    <main class="w-full mx-auto mb-4 pt-20">
        <section class="w-full mx-auto px-4 py-4">
            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-4">
                    <span class="bg-gray-200 text-[#272742] font-bold px-4 py-1 rounded-full text-sm">Arsip Digital</span>
                    <p class="text-sm text-[#292828]">23 Oktober, 2024</p>
                </div>
                <h2 class="text-5xl md:text-6xl font-semibold text-[#172812] mt-4">{{ $gallery->Title }}</h2>
                <p class="text-5xl font-semibold text-[#172812] mt-4">{{ $gallery->Tahun }}</p>
            </div>
            <div class="mb-8">
                <img src="{{ asset('images/Galeri'. $gallery->Media1) }}" alt="Foto Perang" class="rounded-lg shadow-lg mx-auto">
            </div>
    
            <h3 class="text-lg font-semibold text-[#272742]">Latar Belakang dari {{ $gallery->Title }} ({{ $gallery->Tahun }})</h3>
            <div class="text-[#272742]"> {!! $gallery->Description !!}</div>
            <div class="mt-16">
                <h3 class="text-2xl font-bold text-[#172812] mb-8">Bukti Sejarah</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-[#FBFCFE] rounded-lg shadow-lg p-6 flex flex-col items-center">
                        <img src="{{ asset('images/Galeri'. $gallery->Media2) }}" alt="Foto Pahlawan" 
                            class="rounded-md mb-4 w-full h-80 object-cover">
                        <h4 class="font-bold text-lg text-[#172812] text-center">{{ $gallery->Pahlawan1 }}</h4>
                    </div>
                    <div class="bg-[#FBFCFE] rounded-lg shadow-lg p-6 flex flex-col items-center">
                        <img src="{{ asset('images/Galeri'. $gallery->Media3) }}" alt="Foto Pahlawan" 
                            class="rounded-md mb-4 w-full h-80 object-cover">
                        <h4 class="font-bold text-lg text-[#172812] text-center">{{ $gallery->Pahlawan2 }}</h4>
                    </div>
                    <div class="bg-[#FBFCFE] rounded-lg shadow-lg p-6 flex flex-col items-center">
                        <img src="{{ asset('images/Galeri'. $gallery->Media4) }}" alt="Foto Pahlawan" 
                            class="rounded-md mb-4 w-full h-80 object-cover">
                        <h4 class="font-bold text-lg text-[#172812] text-center">{{ $gallery->Pahlawan3 }}</h4>
                    </div>
                    <div class="bg-[#FBFCFE] rounded-lg shadow-lg p-6 flex flex-col items-center">
                        <img src="{{ asset('images/Galeri'. $gallery->Media5) }}" alt="Foto Pahlawan" 
                            class="rounded-md mb-4 w-full h-80 object-cover">
                        <h4 class="font-bold text-lg text-[#172812] text-center">{{ $gallery->Pahlawan4 }}</h4>
                    </div>
                </div>                             
            </div>
        </section>
    </main>
</body>
@endsection