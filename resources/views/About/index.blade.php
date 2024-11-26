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

        .team-card img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>

    <body class="font-poppins">
        <section class="relative text-[#FBFCFE] pt-20 md:pt-20">
            <img src="img/Rectangle 39.png" alt="Museum Interior"
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
                    <p class="text-base leading-relaxed text-[#272742]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, blanditiis minus hic maiores corrupti
                        perspiciatis ab repellat velit, harum vero corporis minima veritatis, officia quas porro at
                        repellendus exercitationem totam? Quidem error aut eius, inventore earum sit accusantium. Nemo
                        corporis facere sapiente aperiam. Praesentium nostrum omnis laudantium commodi totam, eaque quidem
                        facilis fuga maxime molestias minima earum odit obcaecati dignissimos illo labore, perferendis
                        tempora recusandae hic, ullam repellendus voluptas minus natus alias? Nesciunt a commodi veniam
                        quidem libero ducimus neque accusantium dolorum reiciendis nobis pariatur dolor sint facere
                        explicabo voluptatem quisquam culpa possimus maiores nulla, nam, cupiditate perferendis, in amet?
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="/src/img/Kelompok.png" alt="Project Image" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </section>

        <section class="py-16 px-8">
            <h2 class="text-left text-3xl font-bold mb-8 custom-underline text-[#172812]">Meet Our Beautiful Team</h2>
            <div class="flex overflow-x-auto space-x-8 py-4">
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Akhdan.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Muhamad Akhdan</h3>
                        <p class="text-base text-[#FBFCFE]">Ketua / Webdev</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Akbar.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Akbar Azacky</h3>
                        <p class="text-base text-[#FBFCFE]">Wakil / Animator</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Firda.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Nuzulul Firdaus</h3>
                        <p class="text-base text-[#FBFCFE]">Sekretaris / Designer</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Syawalia.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Syawalia Nurul</h3>
                        <p class="text-base text-[#FBFCFE]">Bendahara / Copywriter</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Evans.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Evans Ahmad</h3>
                        <p class="text-base text-[#FBFCFE]">Koor. Lapangan / Animator</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Sony.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Sony Saputra</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Webdev</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Bima.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Bima Dwidharma</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Copywriter</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Mujahid.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Mujahid Azzam</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Designer</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Irsyad.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Irsyad Irfan</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Animator</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="img/Samuel.JPG" alt="Team Member" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Samuel Mangihut</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Webdev</p>
                    </div>
                </div>
                <div class="team-card relative bg-[#FBFCFE] rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="/src/img/Faris.JPG" class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <h3 class="text-xl font-bold text-[#FBFCFE]">Faris Rama</h3>
                        <p class="text-base text-[#FBFCFE]">Staff / Webdev</p>
                    </div>
                </div>
            </div>
            <div class="carousel-container flex flex-col items-center mt-8">
                <div class="carousel w-full md:w-4/6 lg:w-3/5 rounded-lg shadow-lg overflow-hidden relative">
                    <div class="carousel-slide">
                        <img src="/src/img/webdev.JPG" alt="Team Image 1" class="w-full">
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/Design.JPG" alt="Team Image 2" class="w-full">
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/Alice.JPG" alt="Team Image 3" class="w-full">
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/Sekretaris.JPG" alt="Team Image 3" class="w-full">
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
                    <p class="text-sm text-[#C5E1B5]">Ada lima nilai-nilai dasar yang dikembangkan dalam bela negara agar
                        menjadi landasan sikap dan perilaku warga negara, yaitu cinta tanah air, sadar berbangsa dan
                        bernegara,
                        setia pada Pancasila sebagai ideologi negara, rela berkorban untuk bangsa dan negara, serta
                        mempunyai
                        kemampuan awal bela negara.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Cinta Tanah Air</h3>
                    <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        maximus
                        ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Sadar Berbangsa dan Bernegara</h3>
                    <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        maximus
                        ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Setia pada Pancasila sebagai Ideologi Negara</h3>
                    <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        maximus
                        ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Rela Berkorban untuk Bangsa dan Negara</h3>
                    <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        maximus
                        ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Mempunyai Kemampuan Awal Bela Negara</h3>
                    <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        maximus
                        ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
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
                        <img src="{{ asset('images/cover-welcome.png') }}" alt="Foto 1"
                            class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl custom-underline mt-2">Membuang Sampah Pada Tempatnya</h3>
                        <p class="text-sm custom-underline">8 hours ago</p>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Foto 2" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl custom-underline mt-2">Mentaati peraturan yang sudah berlaku</h3>
                        <p class="text-sm custom-underline">8 hours ago</p>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Foto 3" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl custom-underline mt-2">Melakukan Demonstrasi</h3>
                        <p class="text-sm custom-underline">8 hours ago</p>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Foto 4" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl custom-underline mt-2">Meeting rutin progres project</h3>
                        <p class="text-sm custom-underline">8 hours ago</p>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Foto 5" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl custom-underline mt-2">Survey Museum Perjuangan Indonesia</h3>
                        <p class="text-sm custom-underline">8 hours ago</p>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{ asset('images/cover-welcome.png') }}" alt="Foto 6"
                            class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl custom-underline mt-2">Pembuatan Website Museum Bela Negara</h3>
                        <p class="text-sm custom-underline">8 hours ago</p>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Foto 7" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl custom-underline mt-2">Pembentukan Struktur Organisasi</h3>
                        <p class="text-sm custom-underline">8 hours ago</p>
                    </a>
                    <a href="/Aboutshow" class="p-4">
                        <img src="{{ asset('images/bg-home.png') }}" alt="Foto 8" class="w-full h-48 object-cover">
                        <h3 class="font-semibold text-xl custom-underline mt-2">Meeting rutin progres project</h3>
                        <p class="text-sm custom-underline">8 hours ago</p>
                    </a>
                </div>
            </section>
        </div>
    </body>
