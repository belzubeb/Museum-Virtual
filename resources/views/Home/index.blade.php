@extends('layout.index')
@section('container')
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
            height: 12rem;
            object-fit: cover;
        }

        .slider-card h2 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .slider-card p {
            font-size: 0.875rem;
            color: #6B7280;
        }

        @media (max-width: 768px) {
            .galeri-container {
                overflow-y: auto;
                max-height: 48rem;
            }

            .galeri-grid {
                flex-direction: column;
                gap: 1rem;
            }

            .slider-card {
                width: 98%;
            }
        }
    </style>

<section class="relative text-[#FBFCFE] pt-24 px-4">
    <div class="w-full h-[600px] bg-black bg-opacity-20 rounded-lg" style="background-image: url('img/unsplash.svg'); background-size: cover; background-position: center; background-blend-mode: multiply;"></div>
    <div class="absolute inset-0 flex flex-col justify-center items-start text-left px-6 md:px-16">
        <h2 class="text-4xl md:text-6xl font-bold">MUSEUM BELA NEGARA</h2>
        <h2 class="text-4xl md:text-4xl mt-4 font-bold">UPN “ Veteran “ Jakarta</h2>
        <p class="text-base md:text-base mt-4 max-w-3xl font-reguler">
            Selamat datang di Museum Virtual Bela Negara, sebuah platform digital yang dirancang untuk memberikan Anda pengalaman eksplorasi sejarah, nilai, dan semangat Bela Negara. Di sini, Anda dapat menjelajahi koleksi artefak, foto, dan cerita inspiratif tentang perjuangan bangsa dalam mempertahankan kedaulatan negara.
        </p>
        <a href="about_us.html" class="text-[#272742] bg-[#FBFCFE] font-semibold px-5 py-2 rounded-2xl text-base border border-gray-400 hover:border-black transition flex items-center space-x-2 mt-4">
            <span>Detail Museum</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h16m0 0l-4-4m4 4l-4 4"></path>
            </svg>
        </a>    

    </div>
</section>

<section class="w-full py-16 px-4">
    <div class="md:flex items-start space-x-8 mx-auto w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6 w-full md:w-1/2">
            <a href="galeri_detail.html" class="bg-[#FBFCFE] rounded-lg shadow-md overflow-hidden block">
                <img src="img/Rectangle 18.png" alt="Perjanjian Roem Royen" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-bold text-[#172812]">Perjanjian Roem Royen</h4>
                    <p class="text-sm text-[#272742]">Terjadi pada tahun 1940, di Jakarta</p>
                </div>
            </a>
            
            <a href="galeri_detail.html" class="bg-[#FBFCFE] rounded-lg shadow-md overflow-hidden block">
                <img src="img/Rectangle 18.png" alt="Peristiwa Rengasdengklok" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-bold text-[#172812]">Peristiwa Rengasdengklok</h4>
                    <p class="text-sm text-[#272742]">Terjadi pada tahun 1940, di Jakarta</p>
                </div>
            </a>
    
            <a href="galeri_detail.html" class="bg-[#FBFCFE] rounded-lg shadow-md overflow-hidden block">
                <img src="img/Rectangle 18.png" alt="Konferensi Meja Bundar" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-bold text-[#172812]">Konferensi Meja Bundar</h4>
                    <p class="text-sm text-[#272742]">Terjadi pada tahun 1940, di Jakarta</p>
                </div>
            </a>
    
            <a href="galeri_detail.html" class="bg-[#FBFCFE] rounded-lg shadow-md overflow-hidden block">
                <img src="img/Rectangle 18.png" alt="Sumpah Pemuda" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-bold text-[#172812]">Sumpah Pemuda</h4>
                    <p class="text-sm text-[#272742]">Terjadi pada tahun 1940, di Jakarta</p>
                </div>
            </a>
        </div>
    
        <div class="w-full md:w-1/2 mt-8 md:mt-0">
            <h2 class="text-2xl md:text-4xl font-bold text-[#172812]">Galeri Sejarah Bela Negara</h2>
            <p class="text-[#172812] text-base max-w-2xl mt-8">
                Sebuah perjalanan yang mengajak kita untuk memahami, menghargai, dan meneladani semangat bela negara dari masa ke masa. 
                Di sini, setiap pameran bercerita tentang kisah-kisah inspiratif para pejuang dan tokoh yang berkorban untuk mempertahankan 
                kedaulatan, persatuan, dan kemajuan bangsa. Membawa Anda lebih dekat dengan peristiwa dan tokoh-tokoh berpengaruh. Temukan 
                inspirasi, pelajari nilai-nilai luhur bela negara, dan rasakan semangat patriotisme dalam setiap koleksi yang dipamerkan.
            </p>
            <div class="flex justify-end mt-6 pr-6">
                <a href="galeri.html" class="text-[#272742] bg-[#FBFCFE] font-semibold px-5 py-2 rounded-full text-base border border-gray-400 hover:border-black transition flex items-center space-x-2">
                    <span>Telusuri Galeri Sejarah</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h16m0 0l-4-4m4 4l-4 4"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
</section>
    
<section class="w-full py-16">
    <div class="w-full text-center">
        <h2 class="text-2xl md:text-4xl font-bold text-[#172812]">Implementasi Perilaku Bela Negara</h2>
        <p class="text-[#272742] text-base max-w-5xl mx-auto mt-8 font-reguler">
            Melalui konten interaktif, Anda akan menemukan berbagai contoh perilaku bela negara yang relevan dan mudah dilakukan oleh setiap warga negara, baik di lingkungan keluarga, komunitas, maupun dalam profesi. Dari menjaga persatuan hingga berperan aktif dalam kegiatan sosial, halaman ini menampilkan berbagai cara agar kita semua dapat berkontribusi dalam membangun bangsa.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-10 w-full px-4">
            <a href="implementasi_detail.html" class="bg-[#FBFCFE] rounded-lg shadow-md overflow-hidden block">
                <img src="img/Rectangle 36.png" alt="Prestasi" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-bold text-[#172812]">Berprestasi untuk Bangsa</h4>
                    <p class="text-sm text-[#272742]">Mengembangkan potensi diri dalam bidang akademis, olahraga, seni, atau keterampi....</p>
                </div>
            </a>
            <a href="implementasi_detail.html" class="bg-[#FBFCFE] rounded-lg shadow-md overflow-hidden block">
                <img src="img/Rectangle 36.png" alt="Gotong Royong" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-bold text-[#172812]">Gotong Royong</h4>
                    <p class="text-sm text-[#272742]">Mengembangkan potensi diri dalam bidang sosial, mempererat kerukunan dan kerja....</p>
                </div>
            </a>
            <a href="implementasi_detail.html" class="bg-[#FBFCFE] rounded-lg shadow-md overflow-hidden block">
                <img src="img/Rectangle 36.png" alt="Menjaga Lingkungan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-bold text-[#172812]">Menjaga Lingkungan</h4>
                    <p class="text-sm text-[#272742]">Memastikan kebersihan dan melindungi alam demi generasi yang akan datang....</p>
                </div>
            </a>
            <a href="implementasi_detail.html" class="bg-[#FBFCFE] rounded-lg shadow-md overflow-hidden block">
                <img src="img/Rectangle 36.png" alt="Menjadi Relawan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-bold text-[#172812]">Menjadi Relawan</h4>
                    <p class="text-sm text-[#272742]">Berpartisipasi dalam kegiatan sosial untuk membantu sesama di masyarakat....</p>
                </div>
            </a>
        </div>
    </div>

</section>
<section class="w-full pb-16 bg-[#FBFCFE]">
    <div class="w-full text-center px-4">
        <h2 class="text-2xl md:text-4xl font-bold text-[#172812]">
            Nikmati Perjalanan Virtual Museum Bela Negara
        </h2>
        <div class="flex justify-center mt-10">
            <div class="relative w-full max-w-4xl bg-[#FBFCFE] overflow-hidden px-4 md:px-8 rounded-lg">
                <div class="aspect-video" id="video-container">
                    <iframe
                        id="video-frame"
                        src="https://www.youtube.com/embed/TmPBMzl18aI?si=KoizQfmlAGvqcguy"
                        title="Video Museum Bela Negara"
                        frameborder="0"
                        class="w-full h-full"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
