@extends('layout.index')
@section('title', 'Tambah Berita')
@section('container')

<section class="bg-green-950 min-h-screen flex items-center justify-center">
    <div class="bg-[#FEFAE0] p-8 rounded-xl shadow-xl w-full max-w-lg">
        <h2 class="text-3xl font-bold text-green-950 mb-8 text-center">Tambah Berita</h2>
        <form id="newsForm" action="" method="POST" enctype="multipart/form-data">
            <div class="mb-6">
                <label for="judul" class="block text-green-950 font-medium mb-2">Judul</label>
                <input type="text" id="judul" name="judul"
                    class="w-full px-4 py-3 border border-green-950 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-950"
                    required>
            </div>
            <div class="mb-6">
                <label for="isi" class="block text-green-950 font-medium mb-2">Isi Tulisan</label>
                <textarea id="isi" name="isi"
                    class="w-full px-4 py-3 border border-green-950 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-950"
                    rows="5" required></textarea>
            </div>
            <div class="mb-6">
                <label for="cover" class="block text-green-950 font-medium mb-2">Foto Cover</label>
                <input type="file" id="cover" name="cover"
                    class="w-full px-4 py-3 border border-green-950 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-950"
                    accept="image/*" required>
            </div>
            <div class="mb-6">
                <label for="caption" class="block text-green-950 font-medium mb-2">Caption</label>
                <input type="text" id="caption" name="caption"
                    class="w-full px-4 py-3 border border-green-950 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-950"
                    required>
            </div>
            <div class="mb-6">
                <label for="keywords" class="block text-green-950 font-medium mb-2">Keywords</label>
                <input type="text" id="keywords" name="keywords"
                    class="w-full px-4 py-3 border border-green-950 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-950"
                    required>
            </div>
            <button type="submit"
                class="w-full bg-green-950 text-[#FEFAE0] px-6 py-3 rounded-lg shadow-lg hover:bg-[#FEFAE0] hover:text-green-950 border-2 border-green-950 transition duration-300">
                Kirim Berita
            </button>
        </form>
    </div>
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold text-green-950 mb-4">Berhasil!</h2>
            <p class="text-green-950 mb-6">Data berhasil dikirim.</p>
            <button onclick="closeModal()"
                class="bg-green-950 text-[#FEFAE0] px-4 py-2 rounded-lg hover:bg-[#FEFAE0] hover:text-green-950 border-2 border-green-950 transition duration-300">
                Tutup
            </button>
        </div>
    </div>

    <script>
        const form = document.getElementById('newsForm');
        const modal = document.getElementById('successModal');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form normal
            // Simulasikan pengiriman data
            setTimeout(() => {
                modal.classList.remove('hidden'); // Tampilkan modal
            }, 500);
        });

        function closeModal() {
            modal.classList.add('hidden'); // Sembunyikan modal
            form.reset(); // Reset form
        }
    </script>

</section>
@endsection

