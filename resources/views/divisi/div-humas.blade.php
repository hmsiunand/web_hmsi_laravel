@extends('header-footer')

@section('title', 'Divisi Humas')

@section('content')

    <main>
        <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Humas</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/humas/IMG_7990.jpg" alt="kadiv humas" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Salsabila Ramadhani Putri</h2>
                            <p>Ketua Divisi</p>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Hubungan Masyarakat?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Divisi Hubungan Masyarakat(Humas) merupakan divisi yang bertanggung jawab dalam menjalin hubungan dan kerjasama dengan pihak eksternal, untuk mengenalkan himpunan ke luar melalui kegiatan-kegiatan yang berkaitan dengan akademik maupun non-akademik, serta meningkatkan peran aktif mahasiswa dalam berbagai kegiatan.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Menjadi pusat pelayanan komunikasi dan informasi publik yang terpercaya guna membangun citra positif, nama baik HMSI.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Memperluas jaringan HMSI guna meningkatkan eksistensi HMSI Unand di lingkungan kampus maupun lingkungan luar kampus.</li>
                        <li>Meningkatkan hubungan eksternal HMSI Unand.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/humas/IMG_8004.jpg" alt="sekre humas" class="max-h-min"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Deyola Fadwa Shifana</h2>
                <p>Sekretaris</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/humas/IMG_7997.jpg" alt="bendahara humas" class="max-h-min"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Delicia Syifa Maghfira</h2>
                    <p>Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Shefilla Raisya Razade Stevano</li>
                <li>Zuha Bima Alfaruq</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Thomas Akram Ferdinan</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Muhammad Erlangga Adi Nugraha</li>
                <li>Faiz Abdullah</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                SI I'm coming
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Memperluas informasi mengenai perkuliahan termasuk Jurusan Sistem Informasi Universitas Andalas.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <ol class="list-decimal list-inside">
                    <li>Mengenalkan seputar dunia kampus, khususnya jurusan SI.</li>
                    <li>Meningkatkan minat para siswa/i SMA/sederajat untuk melanjutkan studinya ke perguruan tinggi, khususnya ke Jurusan Sistem Informasi Universitas Andalas.</li>
                </ol>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                HMSI collab
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlu adanya kerja sama antara HMSI dengan  lembaga  yang ada di Universitas Andalas atau di luar Universitas Andalas.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <ol class="list-decimal list-inside">
                    <li>Menjalin silaturahmi dengan lembaga yang ada di Universitas Andalas maupun di luar Universitas Andalas.</li>
                    <li>Bertukar ilmu dengan lembaga yang ada di Universitas Andalas maupun di luar Universitas Andalas.</li>
                </ol>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                HMSI corner
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Diperlukannya informasi tentang beasiswa dan lomba untuk mahasiswa/i Sistem Informasi Universitas Andalas.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <ol class="list-decimal list-inside">
                    <li>Untuk berbagi informasi kepada mahasiswa/i Sistem informasi mengenai beasiswa apa saja yang ada di tahun 2022/2023</li>
                    <li>Untuk berbagi informasi dan mengajak mahasiswa/i Sistem Informasi mengikuti lomba yang diselenggarakan di berbagai tempat dan ajang untuk menambah wawasan.</li>
                </ol>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                HMSI peduli
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Banyaknya musibah yang terjadi di sekitar kita yang memerlukan bantuan berupa dana.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Hasil pengumpulan donasi akan diberikan untuk korban yang tertimpa musibah dan untuk masyarakat yang membutuhkan.</p>
            </div>
            </div>
        </center>
        </section>
    </main>

@endsection