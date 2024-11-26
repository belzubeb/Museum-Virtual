@extends('layout.index')
@section('container')

<style>
    .hidden {
        display: none;
    }

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

<body class="font-poppins bg-[#FBFCFE]">
    <main class="max-w-full mx-auto pt-16">
        <div class="container max-w-full mb-8 mt-8 p-6  rounded-lg">
            <h2 class="text-4xl font-semibold mb-2 text-[#172812]">Kemhan Ungkap Kompleksnya Ancaman, </h2>
                <h2 class="text-4xl font-semibold text-[#172812]">Harap Kesadaran Bela Negara Tumbuh</h2>
                <div class="flex items-center justify-start  space-x-4 py-8">
                    <span class="bg-gray-200 text-[#272742] font-bold px-4 py-1 rounded-full text-sm">Arsip Digital</span>
                    <p class="text-sm text-[#292828]">23 Oktober, 2024</p>
                </div>
            <div class="text-[#272742]">
                <img src="{{asset('images/kemhan.jpg')}}" alt="Gambar Pendukung" class="w-[100%] h-[500px] object-cover rounded-lg mb-4">
                    <p class="text-lg md:text-base">
                        <span class="font-bold">Jakarta- </span>
                        Sekretaris Jenderal Kementerian Pertahanan (Sekjen Kemhan) Marsekal Madya TNI Donny Ermawan Taufanto mengungkapkan dewasa ini ancaman yang dihadapi negara bukan hanya dalam bentuk militer, tapi juga dari nonmiliter. Untuk itu, dia menilai kompleksitas ancaman harus dihadapi dengan bela negara.
                        "Perkembangan lingkungan strategis baik global, regional, maupun nasional yang sangat dinamis dan kompleks, memunculkan berbagai ancaman, baik ancaman militer, nonmiliter, maupun hibrida, yang diprediksi masih mengancam kepentingan nasional di masa mendatang," kata Donny dalam Acara Rembuk Nasional Tahun 2022 di Hotel Pullman, Jakarta Barat, Selasa (25/1/2022).
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        "Kompleksitas ancaman inilah yang perlu dipahami dan dimengerti kita semua sebagai bagian dari unsur pertahanan negara. Untuk itu, diperlukan strategi yang ampuh dalam menghadapi segala bentuk ancaman, salah satunya adalah dengan bela negara," sambungnya.
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        Donny menyebut bela negara menjadi salah satu strategi pertahanan negara. Seluruh komponen bangsa, kata Donny, akan bersatu menyamakan visi-misi untuk kedaulatan dan keutuhan negara.
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        "Bela negara diyakini sebagai salah satu strategi dalam penyelenggaraan pertahanan negara di mana seluruh komponen bangsa bersatu, menyamakan visi-misi dalam usaha menjaga kedaulatan negara, keutuhan wilayah, serta keselamatan bangsa dan negara," katanya.
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        Donny menerangkan bela negara bukan hanya menjadi tugas dan kewajiban Kementerian Pertahanan, TNI dan Polri semata. Akan tetapi, menurut Donny, bela negara menjadi tugas dan kewajiban semua warga negara Indonesia sebagai bagian dari komponen bangsa.
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        "Sejarah telah membuktikan bahwa negara Indonesia dibentuk oleh komponen bangsa, pembentukan ini berawal dari pengorbanan yang dilakukan berpuluh-puluh tahun yang lalu dengan semangat bela negara. Dengan demikian bela negara bukan hanya menjadi tugas dan kewajiban Kementerian Pertahanan, TNI dan Polri semata, bela negara merupakan tugas dan kewajiban warga negara Indonesia sebagai bagian dari komponen bangsa," papar Donny.
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        Donny menyebut bela negara tidak mengenal latar belakang pendidikan dan pekerjaan. Semua warga negara Indonesia memiliki kewajiban untuk membela negara seperti dari kementerian lembaga, pemerintah daerah dan perusahaan swasta.
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        "Apa pun pendidikan latar belakang dan pekerjaan kita, semua memiliki hak kewajiban dan kesempatan yang sama untuk bela negara. Oleh karenanya dalam pelaksanaan bela negara bagi seluruh komponen bangsa, Kementerian Pertahanan membutuhkan peran dari Kementerian lembaga, TNI Polri, pemerintah daerah, BUMN serta perusahaan swasta," ungkapnya.
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        Lebih lanjut, Donny berharap acara Rembuk Nasional 2022 yang diikuti kementerian lembaga ini dapat berjalan lancar. Dia berharap melalui kegiatan ini, para peserta dapat mengetahui dan mendukung program pembinaan kesadaran bela negara.
                    </p>
                    <p class="text-lg md:text-base mt-6">
                        "Untuk itu, Rembuk Nasional Bela Negara tahun 2022 ini mengambil tema optimalisasi peran kementerian lembaga TNI Polri, pemerintah daerah dan komponen bangsa dalam menstandardisasikan program pembinaan kesadaran bela negara. Melalui kegiatan Rembuk Nasional ini, saya berharap akan dapat diketahui peran serta Kementerian lembaga pemerintah daerah TNI Polri dan komponen bangsa dalam mendukung program pembinaan kesadaran bela negara," tuturnya.
                    </p> 
                </div>
            </div>
        </div>

        <section class="slider-container mt-12 w-full">
            <button id="leftArrow" class="slider-arrow left" onclick="slide(-1)" aria-label="Previous">
                <img src="{{ asset('images/arrow-left.svg') }}" alt="" class="w-7">
            </button>
            <h3 class="pl-4 pt-2 text-[#172812]">Berita Terbaru</h3>
            <div id="sliderTrack" class="slider-track">
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
                <div class="slider-card rounded-lg overflow-hidden flex flex-col">
                    <a href="">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Image 1" class="w-full h-48 object-cover rounded-lg">
                    </a>                    
                    <div class="p-6">
                        <h2 class="text-[#172812] text-xl md:text-2xl mb-2">Museum Batik Indonesia</h2>
                        <p class="text-[#272742] text-xs md:text-sm">8 hours ago</p>
                    </div>
                </div>
            </div>
            <button id="rightArrow" class="slider-arrow right" onclick="slide(1)" aria-label="Next">
                <img src="{{ asset('images/arrow-right.svg') }}" alt="" class="w-7">
            </button>
        </section>
    </main>
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
</body>
