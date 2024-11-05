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

<div class="image-container pt-16">
    <img src="{{ asset('images/cover-berita.png')}}" alt="Hero Image" class="hero-image">
    <div class="image-overlay">
        <h1 class="text-5xl md:text-5xl font-bold mb-4 text-center">Tentang Kami</h1>
        <p class="text-center text-base md:text-base px-16 pt-4 md:pt-8">Selamat datang di website Museum Bela Negara, platform yang didedikasikan untuk melestarikan dan mempromosikan nilai-nilai perjuangan bangsa. Kami mengumpulkan, dan menyebarkan informasi terkait sejarah bela negara serta peran pahlawan dalam mempertahankan kedaulatan Indonesia. Website ini bertujuan memudahkan masyarakat untuk mengeksplorasi koleksi dan menumbuhkan semangat patriotisme.</p>
    </div>
</div>

<  <section class="py-16 px-8">
        <div class="md:flex justify-between items-center space-y-4 md:space-y-0">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Tentang Project</h2>
                <p class="text-base text-gray-700 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, blanditiis minus hic maiores corrupti perspiciatis ab repellat velit, harum vero corporis minima veritatis, officia quas porro at repellendus exercitationem totam? Quidem error aut eius, inventore earum sit accusantium. Nemo corporis facere sapiente aperiam. Praesentium nostrum omnis laudantium commodi totam, eaque quidem facilis fuga maxime molestias minima earum odit obcaecati dignissimos illo labore, perferendis tempora recusandae hic, ullam repellendus voluptas minus natus alias? Nesciunt a commodi veniam quidem libero ducimus neque accusantium dolorum reiciendis nobis pariatur dolor sint facere explicabo voluptatem quisquam culpa possimus maiores nulla, nam, cupiditate perferendis, in amet?
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('images/cover-welcome.png')}}" alt="Project Image" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </section>
    <section class="py-16 px-8">
        <h2 class="text-center text-3xl font-bold mb-8">Meet Our Beautiful Team</h2>
        <div class="flex overflow-x-auto space-x-8 py-4">
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 1</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, beatae.</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 2</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, deserunt.</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 3</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, explicabo!</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 4</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, et?</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 5</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, sapiente?</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 6</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, qui?</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 7</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, est.</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 8</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, nihil.</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 9</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, laboriosam.</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 10</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, amet?</p>
                </div>
            </div>
            <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                <img src="{{ asset('images/cth_team.png')}}" alt="Team Member" class="w-full h-48 object-cover">
                <div class="absolute bottom-0 left-0 p-4 w-full">
                    <h3 class="text-xl font-bold text-white">Member 11</h3>
                    <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, iusto.</p>
                </div>
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
                <p class="text-sm text-[#C5E1B5]">Ada lima nilai-nilai dasar yang dikembangkan dalam bela negara agar menjadi landasan sikap dan perilaku warga negara, yaitu cinta tanah air, sadar berbangsa dan bernegara, setia pada Pancasila sebagai ideologi negara, rela berkorban untuk bangsa dan negara, serta mempunyai kemampuan awal bela negara.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Cinta Tanah Air</h3>
                <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Sadar Berbangsa dan Bernegara</h3>
                <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Setia pada Pancasila sebagai Ideologi Negara</h3>
                <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Rela Berkorban untuk Bangsa dan Negara</h3>
                <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2 text-[#C5E1B5]">Mempunyai Kemampuan Awal Bela Negara</h3>
                <p class="text-sm text-[#C5E1B5]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ac nibh in faucibus. Integer mauris lorem, elementum non justo a, vehicula vehicula lorem.</p>
            </div>
        </div>
    </div>
    <div class="rounded-xl mb-2 mx-4">
        <section class="my-8 md:my-16">
            <div class="border-b-2 border-black pb-4">
                <h3 class="text-2xl md:text-3xl font-bold pt-30">Implementasi Bela Negara</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 pt-6">
                <a href="/AboutOnclick" class="p-4">
                    <img src="{{ asset('images/cover-welcome.png')}}" alt="Foto 1" class="w-full h-48 object-cover">
                    <h3 class="font-semibold text-xl custom-underline mt-2">Membuang Sampah Pada Tempatnya</h3>
                    <p class="text-sm custom-underline">8 hours ago</p>
                </a>
                <a href="/AboutOnclick" class="p-4">
                    <img src="{{ asset('images/bg-home.png')}}" alt="Foto 2" class="w-full h-48 object-cover">
                    <h3 class="font-semibold text-xl custom-underline mt-2">Mentaati peraturan yang sudah berlaku</h3>
                    <p class="text-sm custom-underline">8 hours ago</p>
                </a>
                <a href="/AboutOnclick" class="p-4">
                    <img src="{{ asset('images/bg-home.png')}}" alt="Foto 3" class="w-full h-48 object-cover">
                    <h3 class="font-semibold text-xl custom-underline mt-2">Melakukan Demonstrasi</h3>
                    <p class="text-sm custom-underline">8 hours ago</p>
                </a>
                <a href="/AboutOnclick" class="p-4">
                    <img src="{{ asset('images/bg-home.png')}}" alt="Foto 4" class="w-full h-48 object-cover">
                    <h3 class="font-semibold text-xl custom-underline mt-2">Meeting rutin progres project</h3>
                    <p class="text-sm custom-underline">8 hours ago</p>
                </a>
                <a href="/AboutOnclick" class="p-4">
                    <img src="{{ asset('images/bg-home.png')}}" alt="Foto 5" class="w-full h-48 object-cover">
                    <h3 class="font-semibold text-xl custom-underline mt-2">Survey Museum Perjuangan Indonesia</h3>
                    <p class="text-sm custom-underline">8 hours ago</p>
                </a>
                <a href="/AboutOnclick" class="p-4">
                    <img src="{{ asset('images/cover-welcome.png')}}" alt="Foto 6" class="w-full h-48 object-cover">
                    <h3 class="font-semibold text-xl custom-underline mt-2">Pembuatan Website Museum Bela Negara</h3>
                    <p class="text-sm custom-underline">8 hours ago</p>
                </a>
                <a href="/AboutOnclick" class="p-4">
                    <img src="{{ asset('images/bg-home.png')}}" alt="Foto 7" class="w-full h-48 object-cover">
                    <h3 class="font-semibold text-xl custom-underline mt-2">Pembentukan Struktur Organisasi</h3>
                    <p class="text-sm custom-underline">8 hours ago</p>
                </a>
                <a href="/AboutOnclick" class="p-4">
                    <img src="{{ asset('images/bg-home.png')}}" alt="Foto 8" class="w-full h-48 object-cover">
                    <h3 class="font-semibold text-xl custom-underline mt-2">Meeting rutin progres project</h3>
                    <p class="text-sm custom-underline">8 hours ago</p>
                </a>
            </div>
        </section>        
    </div>