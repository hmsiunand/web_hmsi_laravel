<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Saran;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'adminhmsi',
            'email' => 'admin@hmsi.si.fti.unand.ac.id',
            'password' => bcrypt('admin')
        ]);

        // Blog::factory(5)->create();
        
        // Saran::factory(5)->create();

        // Blog::create([
        //     'judul' => 'Apa itu lorem ipsum?',
        //     'slug' => 'apa-itu-lorem-ipsum?',
        //     'ringkasan' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.',
        //     'gambar' => 'lorem-ipsum.png',
        //     'artikel' => 'Mengutip berbagai sumber, lorem ipsum atau yang disebut lipsum merupakan teks standar yang ditempatkan untuk menempatkan elemen grafis atau penataan huruf (typesetting) dalam sebuah presentasi atau artikel. Lorem ipsum pertama kali dipakai saat seorang tukang cetak yang tak dikenal mengambil sebuah kumpulan teks. Dia mengacak teks tersebut menjadi sebuah buku contoh huruf. Namun teks ini baru populer pada 1960 dengan diluncurkannya lembaran letraset yang menggunakan kalimat tersebut. Popularitasnya makin menanjak seiring munculnya software publishing di komputer dekstop.',
            
        // ]);

        // Saran::create([
        //     'nama' => 'sesepuh',
        //     'saran' => 'Apa urusan anda menanyakan itu?'
        // ]);
        
        // Saran::create([
        //     'nama' => 'lord',
        //     'saran' => 'Kenapa kamu tanya begitu?'
        // ]);

    }
}
