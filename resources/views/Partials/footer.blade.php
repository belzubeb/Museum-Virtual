<!-- resources/views/footer.blade.php -->
<footer class="bg-green-950 text-white py-4 md:py-8">
    <div class="w-full flex flex-col items-center md:flex-row md:justify-between mb-8 px-6 space-y-6 md:space-y-0">
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h2 class="text-3xl md:text-5xl font-bold text-[#FEFAE0]">
                Bangkit Bela Negaraku<br>Jaya Indonesiaku
            </h2>
        </div>
        <div class="w-full md:w-1/2 flex justify-center md:justify-end">
            <img src="{{ asset('images/peta.png') }}" alt="Peta Indonesia" class="w-2/3 opacity-50">
        </div>
    </div>

    <div class="mx-auto px-6 flex flex-col md:flex-row justify-between md:gap-x-16 space-y-8 md:space-y-0">
        <div class="mb-4 md:mb-0 space-y-3">
            <h3 class="font-semibold text-lg mb-4">UPN Museum Virtual</h3>
            <p>Jalan R.S. Fatmawati Raya, Pondok Labu, Cilandak, South Jakarta City,<br>Jakarta 12450</p>
            <p>Email: <a href="mailto:info@museumvirtual.id" class="underline text-blue-600">info@museumvirtual.id</a>
            </p>
            <p>Telepon: (0274) 123456</p>
        </div>

        <!-- Bagian Tengah: Tautan -->
        <div class="mb-6 md:mb-0">
            <h3 class="text-lg font-bold mb-2">Navigasi</h3>
            <ul>
                <li class="mb-2"><a href="/" class="hover:underline">Beranda</a></li>
                <li class="mb-2"><a href="/Gallery" class="hover:underline">Galeri</a></li>
                <li class="mb-2"><a href="/News" class="hover:underline">Berita</a></li>
                <li class="mb-2"><a href="/About" class="hover:underline">Tentang Kami</a></li>
            </ul>
        </div>

        <!-- Bagian Kanan: Media Sosial -->
        <div>
            <h3 class="text-lg font-bold mb-2">Ikuti Kami</h3>
            <div class="flex space-x-4">
                <a href="#" class="text-blue-500 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.42 3.6 8.07 8.26 8.78v-6.22h-2.5v-2.56h2.5v-1.95c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.18 2.24.18v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.83h2.76l-.44 2.56h-2.32v6.22c4.66-.71 8.26-4.36 8.26-8.78 0-5.5-4.46-9.96-9.96-9.96z" />
                    </svg>
                </a>
                <a href="#" class="text-blue-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22.46 6c-.77.35-1.6.59-2.46.69.89-.54 1.56-1.39 1.88-2.4-.83.5-1.76.87-2.75 1.07-.78-.84-1.88-1.37-3.11-1.37-2.35 0-4.26 1.91-4.26 4.26 0 .33.03.65.1.96-3.54-.18-6.68-1.88-8.78-4.47-.37.64-.59 1.39-.59 2.19 0 1.52.77 2.86 1.95 3.64-.71-.02-1.38-.22-1.97-.54v.06c0 2.12 1.51 3.88 3.51 4.29-.37.1-.77.15-1.17.15-.29 0-.57-.03-.85-.08.57 1.77 2.21 3.06 4.15 3.09-1.52 1.19-3.43 1.91-5.51 1.91-.36 0-.72-.02-1.07-.06 1.96 1.26 4.29 2 6.79 2 8.15 0 12.6-6.75 12.6-12.6 0-.19 0-.37-.01-.56.87-.63 1.62-1.42 2.21-2.32z" />
                    </svg>
                </a>
                <a href="#" class="text-pink-500 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.42 3.6 8.07 8.26 8.78v-6.22h-2.5v-2.56h2.5v-1.95c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.18 2.24.18v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.83h2.76l-.44 2.56h-2.32v6.22c4.66-.71 8.26-4.36 8.26-8.78 0-5.5-4.46-9.96-9.96-9.96z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="text-center mt-8">
        <p class="text-gray-500">&copy; 2024 UPN Museum Virtual. All Rights Reserved.</p>
    </div>
    </div>
</footer>
