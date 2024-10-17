<nav id="navbar" class="fixed w-full z-30 top-0 bg-white transition duration-300 ease-in-out p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo di Kiri -->
        <div class="flex items-center">
            <img src="{{ asset('images/upn-logo.png') }}" alt="UPN Logo" class="h-12 w-12">
        </div>

        <!-- Menu di Kanan -->
        <div class="hidden md:flex space-x-8">
            <a href="/" class="text-gray-800 hover:text-black transition duration-300">Beranda</a>
            <a href="/Gallery" class="text-gray-800 hover:text-black transition duration-300">Galeri</a>
            <a href="/News" class="text-gray-800 hover:text-black transition duration-300">Berita</a>
            <a href="/About" class="text-gray-800 hover:text-black transition duration-300">Tentang Kami</a>
        </div>

        <!-- Tombol Mobile Menu -->
        <button class="md:hidden text-black focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>

<script>
    // Ambil elemen navbar
    const navbar = document.getElementById('navbar');

    // Tambahkan event listener untuk mendeteksi scroll
    window.addEventListener('scroll', function() {
        // Jika scroll lebih dari 50px, tambahkan class untuk transparan
        if (window.scrollY > 50) {
            navbar.classList.remove('bg-white');
            navbar.classList.add('bg-transparent');
            navbar.classList.add('text-white');
        } else {
            // Jika tidak di-scroll atau kembali ke atas, kembalikan warna putih
            navbar.classList.remove('bg-transparent');
            navbar.classList.remove('text-white');
            navbar.classList.add('bg-white');
        }
    });
</script>
