@extends('layout.index')
@section('container')

<style>
    @media (max-width: 768px) {
        aside {
            margin-bottom: 0;
            width: 100%;
            height: 100%;
        }

        .news-item img {
            width: 24px;
            height: 24px;
        }
    }

    @media (min-width: 769px) {
        aside {
            width: 100%;
            height: auto;
        }
    }

    .horizontal-scroll {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
    }

    .horizontal-scroll .card {
        scroll-snap-align: start;
        flex-shrink: 0;
        background-color: white;
        border-radius: 0.5rem;
        overflow: hidden;
        width: 160px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .horizontal-scroll .card img {
        flex-shrink: 0;
        height: 160px;
        object-cover: cover;
        width: 100%;
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }

    .card h4 {
        margin-top: 0.5rem;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .card p {
        font-size: 0.75rem;
        color: #6B7280;
    }


    .horizontal-scroll img {
        scroll-snap-align: start;
        flex-shrink: 0;
        margin-right: 1rem;
    }

    .scrollable-vertical {
        max-height: 1000px;
        overflow-y: scroll;
    }

    .scrollable-text {
        max-height: 400px;
        overflow-y: auto;
        margin-bottom: 0;
    }

</style>

<body class="mt-20">
    <div class="relative w-full shadow-2xl px-4">
        <img src="/src/img/Frame96.png" alt="Gambar" class="w-full h-auto object-cover rounded-xl">
        <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t rounded-b-xl">
            <h2 class="text-white text-xl md:text-2xl font-bold">Perpisahan Magang Kampus Merdeka:</h2>
            <h2 class="text-white text-lg md:text-xl font-semibold">Pemahaman Holistik Dalam Dunia Pemuseuman</h2>
            <p class="text-white text-sm md:text-base">Desember 17, 2023</p>
        </div>
    </div>
    <div class="container max-w-full mb-8 mt-8 grid grid-cols-1 lg:grid-cols-4 gap-x-6">
        <main class="lg:col-span-3 p-4 shadow-md rounded-lg w-full">
            <h2 class="text-2xl font-semibold mb-4">Museum Batik Indonesia Sambut Umat Katolik Tuli Asia</h2>
        <p class="text-gray-500 mb-4">8 hours ago</p>
        <div class="text-gray-700">
            <img src="/src/img/Rectangle 12.png" alt="Gambar Pendukung" class="w-full object-cover rounded-lg mb-4">
            <div class="scrollable-text">
                <p class="text-lg md:text-base">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis eveniet porro et quo iusto cum voluptatibus maxime cupiditate enim ducimus incidunt distinctio possimus placeat tempore earum nam dolorem ipsum maiores odio, necessitatibus quas? Unde mollitia libero provident fugit, tempora quibusdam praesentium labore distinctio, similique quod voluptate accusamus quam ullam? Exercitationem, iusto ducimus eius quibusdam sed obcaecati accusamus quos, ab non odio aliquam debitis magnam cupiditate unde laudantium et impedit, veritatis a. Delectus sed alias, natus cumque quod iure. Ipsa cum quod recusandae eaque dolorem asperiores pariatur quam id placeat eligendi non, minus officiis iste facere. Molestiae quibusdam vero pariatur ullam, magni omnis. Nulla vero quis ipsum saepe omnis obcaecati ad. Voluptates magni sunt eos maiores a, deleniti impedit molestias ipsa molestiae reiciendis pariatur tempora blanditiis facilis, in architecto, soluta dignissimos nam laborum iste ratione nobis necessitatibus rem! Exercitationem eos iusto harum mollitia odit consectetur tempore amet. Molestias assumenda, necessitatibus cupiditate cum provident at reiciendis explicabo perferendis optio! Omnis aut eveniet eum, nulla corporis nihil atque nam vitae totam repellendus repellat assumenda iste minus quaerat quod incidunt eaque consectetur. Cumque repudiandae minus commodi sit quae eius nobis! Impedit porro culpa nam, recusandae quisquam sequi voluptate ab totam non enim, quos incidunt.
                </p>
            </div>
        </div>
        </main>
        <aside class="bg-white p-4 shadow-md rounded-lg flex flex-col h-full w-full">
            <h3 class="text-xl font-semibold">Berita Terkini</h3>
            <div class="scrollable-vertical overflow-y-scroll space-y-4 flex-grow">
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Berita1.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Frame96.png" alt="Gambar Berita 2" class="w-20 h-20 object-cover rounded-lg">
                    <span>Museum Nasional Jakarta Buka Pameran Batik Selama Bulan Oktober</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Frame97.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Rectangle 12.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Rectangle 15.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Berita1.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Frame96.png" alt="Gambar Berita 2" class="w-20 h-20 object-cover rounded-lg">
                    <span>Museum Nasional Jakarta Buka Pameran Batik Selama Bulan Oktober</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Frame97.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Rectangle 12.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Rectangle 15.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Berita1.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Frame96.png" alt="Gambar Berita 2" class="w-20 h-20 object-cover rounded-lg">
                    <span>Museum Nasional Jakarta Buka Pameran Batik Selama Bulan Oktober</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Frame97.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Rectangle 12.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Rectangle 15.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Berita1.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Frame96.png" alt="Gambar Berita 2" class="w-20 h-20 object-cover rounded-lg">
                    <span>Museum Nasional Jakarta Buka Pameran Batik Selama Bulan Oktober</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Frame97.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Rectangle 12.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
                <a href="#" class="flex items-center space-x-4 text-gray-700 hover:text-blue-500 transition">
                    <img src="/src/img/Rectangle 15.png" alt="Gambar Berita 1" class="w-20 h-20 object-cover rounded-lg">
                    <span>DKI Jakarta Raih Piala Mahavidya pada LCCM 2023, Mendikbudristek Dorong Generasi Muda Cintai Museum</span>
                </a>
            </div>
        </aside>
    </div>
    <section class="px-4 mb-8">
        <h3 class="text-xl font-semibold mb-4">Latests Week</h3>
        <div class="horizontal-scroll">
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Berita1.png" alt="Berita 1" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 1</h4>
                    <p class="text-xs text-gray-500">Uploaded 2 hours ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Frame96.png" alt="Berita 2" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 2</h4>
                    <p class="text-xs text-gray-500">Uploaded 5 hours ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Frame97.png" alt="Berita 3" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 3</h4>
                    <p class="text-xs text-gray-500">Uploaded 1 day ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 12.png" alt="Berita 4" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 4</h4>
                    <p class="text-xs text-gray-500">Uploaded 3 days ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 15.png" alt="Berita 5" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 5</h4>
                    <p class="text-xs text-gray-500">Uploaded 4 days ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Berita1.png" alt="Berita 1" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 1</h4>
                    <p class="text-xs text-gray-500">Uploaded 2 hours ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Frame96.png" alt="Berita 2" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 2</h4>
                    <p class="text-xs text-gray-500">Uploaded 5 hours ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Frame97.png" alt="Berita 3" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 3</h4>
                    <p class="text-xs text-gray-500">Uploaded 1 day ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 12.png" alt="Berita 4" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 4</h4>
                    <p class="text-xs text-gray-500">Uploaded 3 days ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 15.png" alt="Berita 5" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 5</h4>
                    <p class="text-xs text-gray-500">Uploaded 4 days ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 15.png" alt="Berita 5" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 5</h4>
                    <p class="text-xs text-gray-500">Uploaded 4 days ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 15.png" alt="Berita 5" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 5</h4>
                    <p class="text-xs text-gray-500">Uploaded 4 days ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 15.png" alt="Berita 5" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 5</h4>
                    <p class="text-xs text-gray-500">Uploaded 4 days ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 15.png" alt="Berita 5" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 5</h4>
                    <p class="text-xs text-gray-500">Uploaded 4 days ago</p>
                </div>
            </div>
            <div class="card bg-white shadow-lg rounded-lg w-40 flex-shrink-0 mr-4">
                <img src="/src/img/Rectangle 15.png" alt="Berita 5" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-2">
                    <h4 class="text-sm font-semibold">Judul Berita 5</h4>
                    <p class="text-xs text-gray-500">Uploaded 4 days ago</p>
                </div>
            </div>
        </div>
    </section>
</body>