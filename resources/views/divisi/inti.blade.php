@extends('header-footer')

@section('title', 'Inti')

@section('content')

    <main>
        <section class="text-center py-6">
            <p class="hmsi text-4xl sm:text-6xl text-white">Pengurus Inti</p>
        </section>

        <!-- ketua dan wakil -->
        <div class="px-3 py-16 sm:py-32 text-center">
        <p class="hmsi text-3xl sm:text-5xl text-white py-3">Ketua dan Wakil Ketua</p>
        <div class="flex flex-wrap justify-center mb-4">
            <div class="inline-block m-2 card w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/ketua.jpg" alt="ketua umum" class="max-h-min"></figure>
            <div class="card-body p-5">
                <h2 class="card-title justify-center">Muhammad Farhan Zuhdi</h2>
                <p>Ketua Umum</p>
            </div>
            </div>
            <div class="inline-block m-2 card w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/wakil.jpg" alt="wakil ketua"></figure>
                <div class="card-body p-5">
                    <h2 class="card-title justify-center">Muhammad Reza Rizki Rahmadi</h2>
                    <p>Wakil Ketua Umum</p>
                </div>
            </div>
        </div>
        <div class="text-neutral-content px-5 sm:px-10 md:px-16 lg:px-24 xl:px-40 2xl:px-64">
            <section class="py-3 text-center lg:text-left">
            <p class="text-xl sm:text-2xl font-bold">Visi :</p>
            <p class="py-3 text-justify indent-4 sm:text-lg">Mewujudkan HMSI sebagai organisasi yang inklusif, profesional, disiplin serta inovatif melalui reaktualisasi nilai-nilai religius dan intelektualitas sehingga menjadi organisasi yang berkompeten di bidangnya dengan memegang teguh prinsip kekeluargaan.</p>
            </section>
            <section class="py-3 text-center lg:text-left">
                <p class="text-xl sm:text-2xl font-bold">Misi :</p>
                <ol class="list-decimal list-inside py-3 sm:text-lg">
                <li>Menciptakan mahasiswa serta pengurus Himpunan Mahasiswa Sistem Informasi yang bertaqwa pada Tuhan Yang Maha Esa</li>
                <li>Menjadi wadah pengembangan potensi bagi mahasiswa Sistem Informasi</li>
                <li>Menjalankan organisasi dengan prinsip transparansi, akuntabilitas, tanggung jawab, dan independent</li>
                <li>Menjadikan HMSI inovatif dan bergerak sesuai dengan kemajuan zaman</li>
                <li>Menjadi wadah dalam memperjuangkan aspirasi mahasiswa dan menggerakan roda organisasi berdasarkan kebutuhan mahasiswa Sistem Informasi</li>
                <li>Membangun komunikasi dalam organisasi Himpunan Mahasiswa Sistem Informasi dengan sikap profesionalitas antara setiap elemen yang ada pada Jurusan Sistem Informasi</li>
                <li>Menjadikan Himpunan Mahasiswa Sistem Informasi sebagai organisasi yang memegang teguh prinsip-prinsip kekeluargaan</li>
                </ol>
            </section>
        </div>
        </div>
        
        <!-- sekre -->
        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-3 sm:px-16 2xl:px-0">
            <!-- ganti tulisan -->
            <p class="hmsi text-3xl sm:text-5xl lg:hidden text-white pt-4">Sekretaris umum</p>
                <div class="flex justify-center">
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/sekre.jpg" alt="sekretaris" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Annisha Aprillya</h2>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full">
                <h1 class="hidden text-center lg:block lg:text-left text-5xl font-bold">Sekretaris umum</h1>
                <p class="py-3 text-justify indent-4 sm:text-lg">Sekretaris Umum merupakan bagian dari struktur kepengurusan Himpunan Mahasiswa Sistem Informasi Universitas Andalas Periode 2022 yang memiliki fokus dalam melaksanakan tugas sebagai sekretaris seperti pengadaan SOP untuk surat-menyurat, pengarsipan, laporan-laporan yang terkait dengan Himpunan Mahasiswa Sistem Informasi (HMSI) baik berupa laporan pertanggungjawaban, penjadwalan kegiatan, maupun rancangan program kerja.</p>
                </div>
            </div>
        </div>
        
        <!-- bendahara -->
        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-3 sm:px-16 2xl:px-0">
                <!-- ganti tulisan -->
                <p class="hmsi text-3xl sm:text-5xl lg:hidden text-white pt-4">Bendahara umum</p>
                <div class="flex justify-center">
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/bendahara.jpg" alt="bendahara" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Raidha Qatrunnada</h2>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full">
                <h1 class="hidden text-center lg:block lg:text-left text-5xl font-bold">Bendahara umum</h1>
                <p class="py-3 text-justify indent-4 sm:text-lg">Bendahara merupakan bagian dari struktur kepengurusan Himpunan Mahasiswa Sistem Informasi Universitas Andalas Periode 2022. Bendahara bertanggung jawab membuat anggaran per periode, mengumpulkan iuran, mengatur keuangan dan segala hal yang berhubungan dengan keuangan HMSI Sistem Informasi Universitas Andalas.</p>
                </div>
            </div>
        </div>
    </main>

@endsection