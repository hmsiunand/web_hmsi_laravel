@extends('header-footer')

@section('title', 'Divisi PSDM')

@section('content')

    <main>         
        <section class="text-center py-6">
            <p class="hmsi text-4xl sm:text-6xl text-white">Divisi PSDM</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/psdm/IMG_7841.jpg" alt="kadiv psdm" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Ahmad Fauzan Alqadri</h2>
                            <p>Ketua Divisi</p>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi PSDM?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Divisi yang bertanggung jawab dalam menghimpun anggota HMSI dalam mengoptimalkan dan memberdayakan seluruh potensi yang dimiliki melalui kegiatan yang berkaitan dengan nonakademik, meningkatkan peran aktif mahasiswa dalam berbagai kegiatan, serta dapat memberikan solusi terhadap masalah yang dihadapi anggota HMSI.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Meningkatkan kualitas sumber daya mahasiswa menjadi lebih produktif dan kompeten serta juga turut serta meningkatkan tanggung jawab sosial mahasiswa terhadap masyarakat sekitar berlandaskan budaya, kekeluargaan, nilai - nilai religius dan intelektual serta mampu menampung wadah kreativitas setiap anggotanya.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Mengadakan program-program akademik maupun non-akademik untuk meningkatkan softskill mahasiswa.</li>
                        <li>Menjadi wadah anggota HMSI dalam mewujudkan kreativitas dan gagasannya.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/psdm/IMG_7865.jpg" alt="sekre psdm" class="max-h-min"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Reysha Irsyalina</h2>
                <p>Sekretaris</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/psdm/IMG_7910.jpg" alt="bendahara psdm" class="max-h-min"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Winanda A. Harisya</h2>
                    <p>Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-6">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
            <li>Boby Darmawan</li>
            <li>Muhammad Farhan. A</li>
            <li>Doni Hamdani</li>
            <li>Muhammad Idris</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Vallen Adithya Rekhsana</li>
            <li>Muhammad Zaim Milzam</li>
            <li>Muhammad Yudhistira</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Siti Nur Aisah</li>
            <li>Muhammad Farhan. A</li>
            <li>Doni Hamdani</li>
            <li>Muhammad Idris</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Upgrading Pengurus HMSI
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya pemberian materi terkait problematika berorganisasi pengurus HMSI untuk menjalankan kepengurusan</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Meningkatkan mutu dan menambah pengetahuan pengurus HMSI mengenai problematika berorganisasi.</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Gathering Pengurus HMSI
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlu adanya kegiatan yang dapat mempererat silaturahmi antar pengurus HMSI periode 2022 agar kerjasama dalam kepengurusan dapat berjalan dengan baik.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <ol class="list-decimal list-inside">
                <li>Menumbuhkan rasa kekeluargaan antar pengurus HMSI periode 2022.</li>
                <li>Menambahkan kekompakan pengurus HMSI periode 2022.</li>
                <li>Menjalin silaturahmi antara pengurus HMSI 2022.</li>
                </ol>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Pengelolaan Saran dan Pengaduan
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya wadah agar mahasiswa SI dapat menyampaikan saran dan keluhan terkait masalah akademik dan non akademik</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Sebagai wadah untuk menyampaikan saran dan keluhan terkait masalah akademik dan non akademik.</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                ISL (Information System League)
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlu adanya kegiatan keolahragaan yang dapat meningkatkan silaturahmi antar mahasiswa sistem informasi sehingga dapat menimbulkan jiwa sportivitas</p>
                <p class="font-bold mt-2">Tujuan</p>
                <ol class="list-decimal list-inside">
                <li>Mempererat tali silaturahmi sesama anggota HMSI.</li>
                <li>Meningkatkan kebersamaan dan jiwa sportivitas.</li>
                </ol>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Pendataan Prestasi Mahasiswa
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Data mahasiswa berprestasi diperlukan oleh pihak jurusan maupun HMSI untuk mempersiapkan mahasiswa menghadapi lomba akademis kedepannya dan untuk mengapresiasi mahasiswa yang berprestasi</p>
                <p class="font-bold mt-2">Tujuan</p>
                <ol class="list-decimal list-inside">
                <li>Meningkatkan motivasi anggota HMSI untuk selalu berprestasi.</li>
                <li>Bentuk apresiasi kepada anggota HMSI yang berprestasi.</li>
                </ol>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Kaderisasi HMSI 2021
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya pelaksanaan kaderisasi 2021  untuk proses pembinaan sikap, karakter dan pola pikir setiap mahasiswa SI tahun 2021 yang dipertanggungjawabkan oleh pengurus HMSI 2022 sampai terbentuknya pengurus HMSI 2023</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Pembentukan sikap, karakter dan pola pikir seluruh mahasiswa SI tahun 2021 sesuai dengan konsep kaderisasi sampai dilantiknya mereka menjadi anggota sah HMSI </p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Perancangan Kaderisasi HMSI 2022
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya persiapan pembentukan panitia dan penyusunan konsep kaderisasi 2022  untuk proses pembinaan sikap, karakter dan pola pikir setiap mahasiswa SI tahun 2022 yang dipertanggungjawabkan oleh pengurus HMSI 2022 sampai terbentuknya pengurus HMSI 2023</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Pembentukan panitia dan konsep kaderisasi HMSI 2022</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Pemberitahuan Seminar Hasil dan KP Mahasiswa
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya informasi terkait mahasiswa sistem informasi yang semhas agar dapat meningkatkan partisipasi untuk menghadiri semhas mahasiswa tersebut.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Meningkatkan partisipasi anggota HMSI untuk menghadiri seminar hasil dan KP mahasiswa Sistem Informasi.</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Penyambutan Mahasiswa Baru Sistem Informasi 2022
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya sarana untuk memberikan informasi terkait jurusan sistem informasi dan juga kampus kepada mahasiswa baru SI agar dapat mengenal jurusan dan himpunan secara singkat yang ada di Sistem Informasi.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Sarana berbagi informasi bagi mahasiswa baru SI untuk mengetahui hal-hal seputar jurusan dan himpunan.</p>
            </div>
            </div>
        </center>
        </section>
    </main>

@endsection