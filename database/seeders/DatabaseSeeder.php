<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            "Name"=> "Sejarah"
        ]);
        
        Gallery::create([
            "Title"=>"Bandung Lautan Api",
            "category_id"=>"1",
            "Tahun"=>"1946",    
            "Description"=>"Peristiwa Bandung Lautan Api adalah salah satu peristiwa bersejarah yang sangat penting dalam perjuangan kemerdekaan Indonesia. Peristiwa ini terjadi pada tanggal 23-25 Maret 1946. Berikut adalah latar belakang yang memicu terjadinya peristiwa tersebut",
            "Media"=>"bandung.jpg"
        ]);

    }
}
