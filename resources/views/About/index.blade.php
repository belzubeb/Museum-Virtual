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

<  <div class="image-container pt-16">
    <img src="/src/img/Rectangle 15.png" alt="Hero Image" class="hero-image">
    <div class="image-overlay">
        <h1 class="text-2xl md:text-2xl font-bold mb-4 text-center">About Us</h1>
        <p class="text-center text-base md:text-base px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita est fugiat velit obcaecati, consectetur commodi rerum ducimus repellendus! Accusamus perferendis corporis eius pariatur ad debitis commodi voluptas amet suscipit laborum sit molestiae dicta quasi, eum animi! Facilis fugiat doloribus quam nesciunt vitae totam autem nemo expedita explicabo, non in dolore?</p>
    </div>
</div>
</header>
<section class="py-16 px-8">
<div class="md:flex justify-between items-center space-y-4 md:space-y-0">
    <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Tentang Project</h2>
        <p class="text-base text-gray-700 leading-relaxed">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, blanditiis minus hic maiores corrupti perspiciatis ab repellat velit, harum vero corporis minima veritatis, officia quas porro at repellendus exercitationem totam? Quidem error aut eius, inventore earum sit accusantium. Nemo corporis facere sapiente aperiam. Praesentium nostrum omnis laudantium commodi totam, eaque quidem facilis fuga maxime molestias minima earum odit obcaecati dignissimos illo labore, perferendis tempora recusandae hic, ullam repellendus voluptas minus natus alias? Nesciunt a commodi veniam quidem libero ducimus neque accusantium dolorum reiciendis nobis pariatur dolor sint facere explicabo voluptatem quisquam culpa possimus maiores nulla, nam, cupiditate perferendis, in amet?
        </p>
    </div>
    <div class="md:w-1/2">
        <img src="/src/img/Rectangle 12.png" alt="Project Image" class="w-full rounded-lg shadow-lg">
    </div>
</div>
</section>
<section class="py-16 px-8">
<h2 class="text-center text-3xl font-bold mb-8">Meet Our Beautiful Team</h2>
<div class="flex overflow-x-auto space-x-8 py-4">
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 1</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, beatae.</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 2</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, deserunt.</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 3</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, explicabo!</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 4</h3>
            <p class="text-sm text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, et?</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 5</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, sapiente?</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 6</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, qui?</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 7</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, est.</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 8</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, nihil.</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 9</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, laboriosam.</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 10</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, amet?</p>
        </div>
    </div>
    <div class="team-card relative bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
        <img src="/src/img/Berita1.png" alt="Team Member" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 p-4 w-full">
            <h3 class="text-xl font-bold text-white">Member 11</h3>
            <p class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, iusto.</p>
        </div>
    </div>
</div>
</section>
<div class="bg-gray-200 rounded-lg mb-8 mx-4">
<section class="py-4 px-4">
    <h2 class="text-left text-3xl font-bold mb-8">Our Core Values</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
            <h3 class="text-2xl font-bold mb-4">Lorem ipsum dolor sit amet.</h3>
            <p class="text-base text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet blanditiis amet, tempore rerum quisquam nam unde necessitatibus voluptas quibusdam ipsum, debitis cum ea soluta voluptatem sit repudiandae natus vitae! Architecto sapiente dignissimos expedita suscipit error dicta minus fugiat aliquid fuga quaerat, tempore officiis possimus nobis libero. Cum dolorem suscipit quos.</p>
        </div>
        <div>
            <h3 class="text-2xl font-bold mb-4">Lorem ipsum dolor sit amet.</h3>
            <p class="text-base text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quisquam eum voluptas exercitationem perspiciatis perferendis enim id! Nesciunt eos numquam sint accusamus, inventore aut unde animi placeat? Unde amet alias id incidunt voluptas assumenda saepe! Blanditiis, cum inventore architecto nesciunt aut expedita commodi quam non, reprehenderit cupiditate amet sed. Delectus.</p>
        </div>
        <div>
            <h3 class="text-2xl font-bold mb-4">Lorem ipsum dolor sit amet.</h3>
            <p class="text-base text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut non recusandae dolor optio, animi aut vero a maiores consequatur earum iure nostrum! Nihil repudiandae sed facere voluptatibus facilis commodi aut eveniet saepe atque adipisci officia nesciunt necessitatibus quasi voluptatum amet laboriosam, id cum et, alias libero, ab possimus! Voluptatem, illo.</p>
        </div>
        <div>
            <h3 class="text-2xl font-bold mb-4">Lorem ipsum dolor sit amet.</h3>
            <p class="text-base text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut non recusandae dolor optio, animi aut vero a maiores consequatur earum iure nostrum! Nihil repudiandae sed facere voluptatibus facilis commodi aut eveniet saepe atque adipisci officia nesciunt necessitatibus quasi voluptatum amet laboriosam, id cum et, alias libero, ab possimus! Voluptatem, illo.</p>
        </div>
        <div>
            <h3 class="text-2xl font-bold mb-4">Lorem ipsum dolor sit amet.</h3>
            <p class="text-base text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut non recusandae dolor optio, animi aut vero a maiores consequatur earum iure nostrum! Nihil repudiandae sed facere voluptatibus facilis commodi aut eveniet saepe atque adipisci officia nesciunt necessitatibus quasi voluptatum amet laboriosam, id cum et, alias libero, ab possimus! Voluptatem, illo.</p>
        </div>
        <div>
            <h3 class="text-2xl font-bold mb-4">Lorem ipsum dolor sit amet.</h3>
            <p class="text-base text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut non recusandae dolor optio, animi aut vero a maiores consequatur earum iure nostrum! Nihil repudiandae sed facere voluptatibus facilis commodi aut eveniet saepe atque adipisci officia nesciunt necessitatibus quasi voluptatum amet laboriosam, id cum et, alias libero, ab possimus! Voluptatem, illo.</p>
        </div>
    </div>
</section>
</div>