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
            <div class="relative w-screen -mx-6 md:-mx-12 lg:-mx-16 xl:-mx-20 shadow-2xl">
                <img src="{{ asset('images/cover-berita.png') }}" alt="Gambar" class="w-full h-auto object-cover rounded-xl">
                <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t rounded-b-xl">
                    <h2 class="text-white text-xl md:text-2xl font-bold">Perpisahan Magang Kampus Merdeka:</h2>
                    <h2 class="text-white text-lg md:text-xl font-semibold">Pemahaman Holistik Dalam Dunia Pemuseuman</h2>
                    <p class="text-white text-sm md:text-base">Desember 17, 2023</p>
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
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
                        </div>
                    </div>
                    <div class="slider-card bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                        <a href="">
                            <img src="{{ asset('images/bg-home.png') }}" alt="Image 1"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <h2 class="text-xl md:text-2xl font-bold mb-2">Museum Batik Indonesia</h2>
                            <p class="text-gray-600 text-sm md:text-base">Sambut Umat Katolik</p>
                            <p class="text-gray-600 mb-2 text-sm md:text-base">Tuli Asia</p>
                            <p class="text-gray-500 text-xs md:text-sm">8 hours ago</p>
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
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1"
                            class="w-full h-48 md:h-auto object-cover">
                    </a>
                    <div class="p-6 w-full md:w-2/3">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">DKI Jakarta Raih Piala Mahavidya pada LCCM 2023
                        </h2>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 12 Oktober 2023 – Lomba Cerdas Cermat
                            Museum (LCCM) tahun 2023 secara resmi ditutup yang ditandai dengan pengumuman para pemenang...
                        </p>
                    </div>
                </article>
                <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
                    <a href="" class="flex-shrink-0 w-full md:w-1/3">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1"
                            class="w-full h-48 md:h-auto object-cover">
                    </a>
                    <div class="p-6 w-full md:w-2/3">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">DKI Jakarta Raih Piala Mahavidya pada LCCM 2023
                        </h2>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 12 Oktober 2023 – Lomba Cerdas Cermat
                            Museum (LCCM) tahun 2023 secara resmi ditutup yang ditandai dengan pengumuman para pemenang...
                        </p>
                    </div>
                </article>
                <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
                    <a href="" class="flex-shrink-0 w-full md:w-1/3">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1"
                            class="w-full h-48 md:h-auto object-cover">
                    </a>
                    <div class="p-6 w-full md:w-2/3">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">DKI Jakarta Raih Piala Mahavidya pada LCCM 2023
                        </h2>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 12 Oktober 2023 – Lomba Cerdas Cermat
                            Museum (LCCM) tahun 2023 secara resmi ditutup yang ditandai dengan pengumuman para pemenang...
                        </p>
                    </div>
                </article>
                <article class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap md:flex-nowrap mb-8">
                    <a href="" class="flex-shrink-0 w-full md:w-1/3">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1"
                            class="w-full h-48 md:h-auto object-cover">
                    </a>
                    <div class="p-6 w-full md:w-2/3">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">DKI Jakarta Raih Piala Mahavidya pada LCCM 2023
                        </h2>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Jakarta, 12 Oktober 2023 – Lomba Cerdas Cermat
                            Museum (LCCM) tahun 2023 secara resmi ditutup yang ditandai dengan pengumuman para pemenang...
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
