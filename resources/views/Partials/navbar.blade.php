<nav id="navbar" class="fixed w-full z-30 top-0 bg-green-950 transition duration-300 ease-in-out p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo di Kiri -->
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/upn-logo.png') }}" alt="Upn Logo" class="h-12 w-12">
            <div class="text-[#FEFAE0]">
                <h1 class="text-lg font-bold leading-tight">Museum Bela Negara</h1>
                <p class="text-sm">UPN "Veteran" Jakarta</p>
            </div>
        </div>

        <!-- Menu di Kanan untuk Desktop -->
        <div class="hidden md:flex space-x-8">
            <a href="/" class="text-[#FEFAE0] hover:underline">Beranda</a>
            <a href="/Galleries" class="text-[#FEFAE0] hover:underline">Galeri</a>
            <a href="/News" class="text-[#FEFAE0] hover:underline">Berita</a>
            <a href="/About" class="text-[#FEFAE0] hover:underline">Tentang Kami</a>
        </div>

        <!-- Tombol Mobile Menu -->
        <button id="mobile-menu-btn" class="md:hidden text-[#FEFAE0] focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Menu Dropdown untuk Mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-green-950 text-[#FEFAE0] p-4">
        <a href="/" class="block py-2 text-[#FEFAE0] hover:underline">Beranda</a>
        <a href="/Galleries" class="block py-2 text-[#FEFAE0] hover:underline">Galeri</a>
        <a href="/News" class="block py-2 text-[#FEFAE0] hover:underline">Berita</a>
        <a href="/About" class="block py-2 text-[#FEFAE0] hover:underline">Tentang Kami</a>
    </div>
</nav>

<script>
    // Menangani perubahan warna navbar saat scroll
    
    // Menangani menu dropdown untuk mobile
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden'); // Toggle visibility menu mobile
    });
</script>
