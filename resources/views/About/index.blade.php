@extends('layout.index')
@section('container')

    <style>
        .hidden {
            display: none;
        }

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

        .team-card img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        . {
            text-decoration: none;
            border-bottom: 2px solid currentColor;
            padding-bottom: 2px;
        }

        .carousel {
            display: flex;
            transition: transform 0.6s ease-in-out;
            overflow: hidden;
            position: relative;
        }

        .carousel-slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 300%;
        }

        .carousel-slide {
            flex: 0 0 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.6s ease-in-out;
        }

        .carousel-slide.active {
            opacity: 1;
            position: static;
        }

        .carousel-slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .carousel-indicators {
            position: relative;
            z-index: 10;
            margin-top: 1rem;
        }

        .indicator {
            width: 12px;
            height: 12px;
            background-color: #C5E1B5;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .indicator.active {
            background-color: #C5E1B5;
            transform: scale(1.2);
        }

        .carousel-indicators .indicator {
            cursor: pointer;
            position: relative;
            width: 12px;
            height: 12px;
            background-color: #C5E1B5;
            border-radius: 50%;
            transition: all 0.3s ease-in-out;
        }

        .carousel-indicators .indicator.active {
            width: 32px;
            height: 12px;
            background-color: #172812;
            border-radius: 20px;
        }


        .carousel-indicators .indicator.active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #C5E1B5;
            border-radius: 50%;
            transition: all 0.3s ease-in-out;
        }
    </style>

    <body class="font-poppins">
        <section class="relative text-[#FBFCFE] pt-20 md:pt-20">
            <img src="{{ asset('images/member/Member.png') }}" alt="Museum Interior"
                class="w-full h-auto md:h-[600px] object-cover z-10 opacity-90">
            <div class="absolute inset-0 bg-black opacity-30"></div>
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-6 md:px-16 z-10">
                <h2 class="text-base md:text-xl font-bold">
                    Tentang Kami
                </h2>
                <p class="text-base md:text-lg mt-4 max-w-3xl">
                    Selamat datang di website Museum Bela Negara, platform yang didedikasikan untuk melestarikan dan
                    mempromosikan nilai-nilai perjuangan bangsa. Kami mengumpulkan, dan menyebarkan informasi terkait
                    sejarah bela negara serta peran pahlawan dalam mempertahankan kedaulatan Indonesia. Website ini
                    bertujuan memudahkan masyarakat untuk mengeksplorasi koleksi dan menumbuhkan semangat patriotisme.
                </p>
            </div>
        </section>
        <section class="py-16 px-8">
            <div class="md:flex justify-between items-start space-y-8 md:space-y-0">
                <div class="md:w-1/2 md:pr-16">
                    <h2 class="text-3xl font-bold mb-4 text-[#172812]">
                        Tentang Project
                    </h2>
                    <p class="text-base leading-relaxed text-[#272742] text-justify">
                        Museum Virtual Bela Negara diciptakan sebagai wujud komitmen untuk mendukung pelestarian nilai-nilai
                        patriotisme dan semangat kebangsaan di era digital. Website ini dirancang untuk memudahkan
                        masyarakat dalam mengeksplorasi sejarah dan perjuangan bangsa secara lebih mendalam. Dengan
                        pendekatan virtual, pengguna dapat mengakses koleksi artefak, foto, dan dokumen bersejarah kapan
                        saja dan di mana saja, tanpa harus mengunjungi lokasi fisik museum.
                    </p>
                    <p class="text-base leading-relaxed text-[#272742] text-justify mt-4">
                        Proyek ini bertujuan untuk menciptakan pengalaman edukasi yang menarik dengan memanfaatkan teknologi
                        visual modern. Dengan galeri yang interaktif dan berbagai fitur multimedia, generasi muda diharapkan
                        dapat lebih mudah memahami dan menghargai perjuangan para pahlawan. Selain itu, platform ini juga
                        memberikan ruang untuk menyampaikan nilai-nilai bela negara dengan cara yang relevan dan mudah
                        diterima oleh masyarakat digital.
                    </p>
                    <p class="text-base leading-relaxed text-[#272742] text-justify mt-4">
                        Melalui Museum Virtual Bela Negara, kami berupaya menginspirasi generasi masa kini untuk terus
                        menjaga semangat nasionalisme. Proyek ini tidak hanya menjadi bentuk penghormatan terhadap sejarah,
                        tetapi juga sebagai langkah penting dalam melestarikan warisan budaya bangsa melalui teknologi. Kami
                        percaya bahwa edukasi sejarah yang dikemas secara inovatif dapat menjadi pondasi kuat dalam
                        membangun karakter bangsa.
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/member/Kelompok.png') }}" alt="Project Image"
                        class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </section>

        <section class="py-16 px-8">
            <h2 class="text-left text-3xl font-bold mb-8  text-[#172812]">Meet Our Beautiful Team</h2>
            <div class="flex overflow-x-auto space-x-8 py-4">
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Akhdan.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Akhdan Najib</h3>
                        <p class="text-base text-[#FBFCFE]">Ketua / Webdev</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Akbar.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Akbar Azacky</h3>
                        <p class="text-base text-[#FBFCFE]">Wakil / Animator</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Firda.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Nuzulul Firdaus</h3>
                        <p class="text-base text-[#FBFCFE]">Sekretaris / Designer</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Syawalia.JPG') }}"alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Syawalia Nurul</h3>
                        <p class="text-base text-[#FBFCFE]">Bendahara / Copywriter</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Evans.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Evans Ahmad</h3>
                        <p class="text-base text-[#FBFCFE]">Koor. Lapangan / Animator</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Sony.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Sony Saputra</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Webdev</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Bima.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Bima Dwidharma</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Copywriter</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Mujahid.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Mujahid Azzam</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Designer</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Irsyad.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Irsyad Irfan</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Animator</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Samuel.JPG') }}" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Samuel Mangihut</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Webdev</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="{{ asset('images/member/Faris.JPG') }}" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Faris Rama</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Webdev</p>
                    </div>
                </div>
            </div>
            <div class="carousel-container flex flex-col items-center mt-8">
                <div class="carousel w-full md:w-4/6 lg:w-3/5 rounded-lg shadow-lg overflow-hidden relative">
                    <div class="carousel-slide">
                        <img src="{{ asset('images/member/webdev.JPG') }}" alt="Team Image 1" class="w-full">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('images/member/Design.JPG') }}" alt="Team Image 2" class="w-full">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('images/member/Alice.JPG') }}"alt="Team Image 3" class="w-full">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('images/member/Sekretaris.JPG') }}" alt="Team Image 3" class="w-full">
                    </div>
                </div>
                <div class="carousel-indicators flex justify-center mt-4 space-x-4">
                    <button class="indicator w-3 h-3 bg-[#FBFCFE] rounded-full transition-all duration-300 ease-in-out"
                        data-slide="0"></button>
                    <button class="indicator w-3 h-3 bg-[#FBFCFE] rounded-full transition-all duration-300 ease-in-out"
                        data-slide="1"></button>
                    <button class="indicator w-3 h-3 bg-[#FBFCFE] rounded-full transition-all duration-300 ease-in-out"
                        data-slide="2"></button>
                    <button class="indicator w-3 h-3 bg-[#FBFCFE] rounded-full transition-all duration-300 ease-in-out"
                        data-slide="3"></button>
                </div>
            </div>
        </section>
        <div class="bg-[#151512] text-[#d1d5d2] rounded-lg mb-8 mx-4 p-4">
            <div class="bg-[#92A079] text-[#172812] rounded-lg px-4 py-2">
                <h2 class="text-3xl font-bold">Prinsip Bela Negara</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">5 Prinsip Bela Negara</h3>
                    <p class="text-sm text-[#C5E1B5]">
                        Bela Negara didasarkan pada lima nilai utama: cinta tanah air, kesadaran berbangsa dan bernegara,
                        setia
                        kepada Pancasila sebagai ideologi negara, rela berkorban untuk bangsa dan negara, serta memiliki
                        kemampuan
                        awal bela negara. Prinsip-prinsip ini menjadi fondasi untuk membentuk sikap dan perilaku warga
                        negara yang
                        bertanggung jawab.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Cinta Tanah Air</h3>
                    <p class="text-sm text-[#C5E1B5]">
                        Cinta tanah air berarti menghargai dan mencintai budaya, tradisi, serta kekayaan alam Indonesia.
                        Wujud
                        konkret dari prinsip ini adalah melestarikan lingkungan, menghormati simbol negara, dan menjaga
                        kedaulatan
                        bangsa.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Sadar Berbangsa dan Bernegara</h3>
                    <p class="text-sm text-[#C5E1B5]">
                        Prinsip ini mengajarkan pentingnya kesadaran akan keberagaman Indonesia sebagai sebuah bangsa yang
                        satu.
                        Masyarakat diharapkan memahami peran mereka dalam menjaga persatuan dan keberlanjutan negara.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Setia kepada Pancasila sebagai Ideologi Negara</h3>
                    <p class="text-sm text-[#C5E1B5]">
                        Pancasila sebagai dasar negara menjadi pedoman dalam kehidupan bermasyarakat, berbangsa, dan
                        bernegara.
                        Kesetiaan terhadap Pancasila diwujudkan melalui pengamalan nilai-nilai luhur yang terkandung di
                        dalamnya.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Rela Berkorban untuk Bangsa dan Negara</h3>
                    <p class="text-sm text-[#C5E1B5]">
                        Rela berkorban adalah sikap yang menunjukkan kesediaan untuk mendahulukan kepentingan bangsa di atas
                        kepentingan pribadi atau kelompok. Prinsip ini mencakup pengorbanan waktu, tenaga, bahkan nyawa demi
                        kejayaan bangsa.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Memiliki Kemampuan Awal Bela Negara</h3>
                    <p class="text-sm text-[#C5E1B5]">
                        Kemampuan awal bela negara mencakup pengetahuan dan keterampilan dasar untuk mendukung pertahanan
                        negara.
                        Contohnya adalah memahami pentingnya keamanan nasional dan siap berkontribusi dalam situasi darurat.
                    </p>
                </div>
            </div>
        </div>
        <div class="rounded-xl mb-2 mx-4">
            <section class="my-8 md:my-16">
                <div class="border-b-2 border-black pb-4">
                    <h3 class="text-2xl md:text-3xl font-bold pt-30">Implementasi Bela Negara</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 pt-6">
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{asset('images/implementasi/sampah.jpg')}}" alt="Foto 1"
                            class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl  mt-2">Membuang Sampah Pada Tempatnya</h3>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{asset('images/implementasi/lalu-lintas.jpg')}}" alt="Foto 2" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl  mt-2">Mentaati peraturan yang sudah berlaku</h3>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{asset('images/implementasi/demo.jpg')}}" alt="Foto 3" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl  mt-2">Melakukan Demonstrasi</h3>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{asset('images/implementasi/foto-tim.png')}}" alt="Foto 4" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl  mt-2">Meeting rutin progres project</h3>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{asset('images/implementasi/museum.jpg')}}" alt="Foto 5" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl  mt-2">Survey Museum Perjuangan Indonesia</h3>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{asset('images/implementasi/ngoding.jpg')}}" alt="Foto 6" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl  mt-2">Pembuatan Website Museum Bela Negara</h3>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{asset('images/implementasi/Prestasi.jpg')}}" alt="Foto 7" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl  mt-2">Berprestasi untuk Bangsa</h3>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{asset('images/implementasi/gotong-royong.jpg')}}" alt="Foto 8" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl  mt-2">Melakukan Gotong Royong</h3>
                    </a>
                </div>
            </section>
        </div>
        <script>
            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('.indicator');

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });

                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('active', i === index);
                });

                currentSlide = index;
            }

            function nextSlide() {
                const nextIndex = (currentSlide + 1) % slides.length;
                showSlide(nextIndex);
            }

            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    showSlide(index);
                });
            });

            setInterval(nextSlide, 5000);

            showSlide(currentSlide);
        </script>
    </body>
