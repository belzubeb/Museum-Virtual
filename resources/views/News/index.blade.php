@extends('layout.index')
@section('container')

    <style>
        .slider-container {
            position: relative;
            overflow: hidden;
        }

        .slider-container h3 {
            font-weight: 600;
            font-size: 27px;
        }


        .slider-track {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .slider-card {
            min-width: 25%;
            padding: 1rem;
            box-sizing: border-box;
        }

        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: black;
            background-color: transparent;
            border: none;
            padding: 0.5rem;
            font-size: 2rem;
            border-radius: 50%;
            cursor: pointer;
            z-index: 10;
        }

        .slider-arrow.left {
            right: 40px;
            top: 28px;
        }

        .slider-arrow.right {
            right: 10px;
            top: 28px;
        }

        .slider-arrow.disabled {
            color: gray;
            cursor: not-allowed;
        }

        @media (max-width: 768px) {
            .slider-card {
                min-width: 100%;
            }

            .slider-arrow {
                display: none;
            }

            .slider-container {
                overflow-x: scroll;
            }
        }
    </style>

    <body class="font-poppins">
        <main class="flex flex-col items-center pt-24 px-4 md:px-4 lg:px-4 xl:px-4">
            <div class="relative w-full shadow-2xl">
                <img src="{{ asset('images/cover-berita.png') }}" alt="Gambar" class="w-full h-auto object-cover rounded-xl">
                <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t rounded-b-xl">
                    <h2 class="text-white text-xl md:text-2xl font-bold">Berita Terbaru: Eksplorasi Bela Negara</h2>
                    <p class="text-white text-sm md:text-base">Jelajahi informasi terkini tentang acara, edukasi, dan koleksi
                        Museum Bela Negara. Temukan inspirasi dari perjuangan bangsa di sini.</p>
                </div>
            </div>
            <section class="slider-container mt-12 w-full shadow-lg">
                <button id="leftArrow" class="slider-arrow left" onclick="slide(-1)" aria-label="Previous">
                    <img src="{{ asset('images/arrow-left.svg') }}" alt="" class="w-7">
                </button>
                <h3 class="pl-1 pt-2">Lastest News</h3>
                <div id="sliderTrack" class="slider-track">
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="/Newsshow">
                            <img src="{{ asset('images/berita/berita1.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Bamsoet Ingatkan Pentingnya Bela Negara
                                untuk Wujudkan Pemilu Damai</h2>
                            <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/berita/berita2.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Bamsoet ajak Bela Negara dengan sukseskan
                                pilkada serentak </h2>
                            <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/berita/berita3.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-[#172812] text-xl md:text-2xl mb-2">10 Contoh Pengingkaran Kewajiban Bela Negara
                                di Indonesia, Apa Saja?</h2>
                            <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/berita/berita4.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Jokowi Terbitkan Perpres Kebijakan Pembinaan
                                Kesadaran Bela Negara</h2>
                            <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/berita/berita5.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Kemhan Ungkap Kompleksnya Ancaman, Harap
                                Kesadaran Bela Negara TumbuhMuseum Batik Indonesia</h2>
                            <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/berita/berita6.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Prabowo Bacakan Amanat Jokowi: Apa Pun
                                Profesinya Wajib Bela Negara</h2>
                            <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/berita/berita7.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Peraih 33 Medali Olimpiade Matematika
                                Dipilih Jadi Kader Bela Negara Kemhan RI</h2>
                            <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                </div>
                <button id="rightArrow" class="slider-arrow right" onclick="slide(1)" aria-label="Next">
                    <img src="{{ asset('images/arrow-right.svg') }}" alt="" class="w-7">
                </button>
            </section>
            <section class="mt-12 w-full">
                <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
                    <a href="" class="flex-shrink-0 w-full md:w-1/3">
                        <img src="{{ asset('images/berita/berita5.png') }}" alt="Image 1"
                            class="w-full h-48 md:h-auto object-cover">
                    </a>
                    <div class="p-6 w-full md:w-2/3">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">Kemhan Ungkap Kompleksnya Ancaman, Harap Kesadaran
                            Bela Negara Tumbuh
                        </h2>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 25 Jan 2022 – Sekretaris Jenderal
                            Kementerian Pertahanan (Sekjen Kemhan) Marsekal Madya TNI Donny Ermawan Taufanto mengungkapkan
                            dewasa ini ancaman yang dihadapi negara bukan hanya dalam bentuk militer, tapi juga dari
                            nonmiliter. Untuk itu, dia menilai kompleksitas ancaman harus dihadapi dengan bela negara.
                            "Perkembangan lingkungan strategis baik global, regional, maupun nasional yang sangat dinamis
                            dan kompleks, memunculkan berbagai ancaman, baik ancaman militer, nonmiliter, maupun hibrida,
                            yang diprediksi masih mengancam kepentingan nasional di masa mendatang," kata Donny dalam Acara
                            Rembuk Nasional Tahun 2022 di Hotel Pullman, Jakarta Barat, Selasa (25/1/2022).
                        </p>
                    </div>
                </article>
                <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
                    <a href="" class="flex-shrink-0 w-full md:w-1/3">
                        <img src="{{ asset('images/berita/berita6.png') }}" alt="Image 1"
                            class="w-full h-48 md:h-auto object-cover">
                    </a>
                    <div class="p-6 w-full md:w-2/3">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">Prabowo Bacakan Amanat Jokowi: Apa Pun Profesinya
                            Wajib Bela Negara
                        </h2>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 19 Des 2021 - Menteri Pertahanan RI
                            Prabowo Subianto memimpin upacara memperingati Hari Bela Negara (HBN) ke-73 Tahun 2021. Pada
                            kesempatan tersebut, Prabowo menyampaikan amanat Presiden Joko Widodo (Jokowi) terkait bela
                            negara.
                            Upacara dilakukan di Pelataran Monumen Tugu Api Dr.(H.C.) Ir. Soekarno di Kemhan, Jakarta,
                            Minggu (19/12/2021). Disebutkan semangat bela negara dilakukan oleh seluruh rakyat untuk menjaga
                            kedaulatan Negara Kesatuan Republik Indonesia (NKRI).
                        </p>
                    </div>
                </article>
                <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
                    <a href="" class="flex-shrink-0 w-full md:w-1/3">
                        <img src="{{ asset('images/berita/berita7.png') }}" alt="Image 1"
                            class="w-full h-48 md:h-auto object-cover">
                    </a>
                    <div class="p-6 w-full md:w-2/3">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">Peraih 33 Medali Olimpiade Matematika Dipilih Jadi
                            Kader Bela Negara Kemhan RI
                        </h2>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Peraih 33 medali emas kompetisi matematika dan
                            sains internasional, Mischka Aoki dan Devon Kei Enzo tak berhenti menorehkan prestasi. Kali ini
                            mereka dinobatkan sebagai kader bela negara oleh Direktorat Jenderal Potensi (Ditjen Pothan)
                            Pertahanan Kemhan RI.
                            Pemberian penghargaan ini diberikan langsung oleh Dirjen Pothan, Mayjen TNI Dadang Hendrayudha
                            dalam acara Ngopi Daring Bela Negara "Muda Berkarya di Era 4.0", Kamis 28 Oktober 2021. "Dalam
                            kesempatan ini saya akan memberikan khusus kepada mereka (Mischka dan Devon) yakni sebuah pin
                            medali penghargaan sebagai kader bela negara," katanya dalam acara yang disiarkan Youtube Ngopi
                            Daring Bela Negara.
                        </p>
                    </div>
                </article>
            </section>
        </main>
    </body>
    <script>
        let currentIndex = 0;
        let autoSlideInterval;

        function updateArrows() {
            const totalSlides = document.getElementById('sliderTrack').children.length;
            const slidesPerView = window.innerWidth > 768 ? 4 : 1;
        }

        function slide(direction) {
            const track = document.getElementById('sliderTrack');
            const totalSlides = track.children.length;
            const slidesPerView = window.innerWidth > 768 ? 4 : 1;
            const sliderWidth = track.clientWidth / slidesPerView;

            currentIndex += direction * slidesPerView;

            if (currentIndex >= totalSlides) {
                currentIndex = 0;
            }

            if (currentIndex < 0) {
                currentIndex = totalSlides - slidesPerView;
            }

            track.style.transform = `translateX(-${currentIndex * sliderWidth}px)`;
        }

        function startAutoSlide() {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(() => {
                slide(1);
            }, 3000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        updateArrows();
        startAutoSlide();

        window.addEventListener('resize', () => {
            updateArrows();

            const track = document.getElementById('sliderTrack');
            const slidesPerView = window.innerWidth > 768 ? 4 : 1;
            const sliderWidth = track.clientWidth / slidesPerView;
            track.style.transform = `translateX(-${currentIndex * sliderWidth}px)`;
        });

        const sliderContainer = document.querySelector('.slider-container');

        sliderContainer.addEventListener('mouseenter', stopAutoSlide);
        sliderContainer.addEventListener('mouseleave', startAutoSlide);

        document.querySelectorAll('.slider-card').forEach(card => {
            card.addEventListener('click', (event) => {
                event.stopPropagation();
            });
        });
    </script>
