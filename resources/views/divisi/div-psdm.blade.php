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
                    <img src="{{ asset('img/pengurus/psdm/psdm.jpg') }}" alt="divisi psdm" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
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
                <figure><img src="{{ asset('img/pengurus/psdm/kadiv-psdm.jpg') }}" alt="kadiv psdm" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Arbiyan Realson</h2>
                <p>Ketua Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/psdm/sekbend-psdm.jpg') }}" alt="sekbend psdm" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Rafiqatul Ulya</h2>
                    <p>Sekretaris-Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-6">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
            <li>Muhammad Ikhlas</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Dio Apridandi</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            
            <div id="accordion-collapse" data-accordion="collapse" class="max-w-4xl">

                <h2 id="accordion-heading-isl">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black rounded-t-xl hover:bg-gray-100 bg-white" data-accordion-target="#accordion-body-isl" aria-expanded="false" aria-controls="accordion-body-isl">
                        <span class="text-black">ISL (Information System League)</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-body-isl" class="hidden" aria-labelledby="accordion-heading-isl">
                    <div class="p-5 bg-base-100 text-left">
                    <p class="mb-2 font-bold">Latar belakang</p>
                    <p>Perlu adanya kegiatan keolahragaan yang dapat meningkatkan silaturahmi antar mahasiswa sistem informasi sehingga dapat menimbulkan jiwa sportivitas</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Menyebarkan link gform untuk mensurvey perlombaan olahraga yang diinginkan mahasiswa sistem informasi untuk dilombakan.</li>
                        <li>Melaksanakan perlombaan olahraga yang dapat diikuti oleh seluruh mahasiswa aktif sistem informasi berdasarkan hasil survey</li>
                    </ol>
                    </div>
                </div>

                <h2 id="accordion-pendataan-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-pendataan-body" aria-expanded="false" aria-controls="accordion-pendataan-body">
                        <span class="text-black">Pendataan Prestasi Mahasiswa</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-pendataan-body" class="hidden" aria-labelledby="accordion-pendataan-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold">Latar belakang</p>
                        <p>Data mahasiswa berprestasi diperlukan oleh pihak jurusan maupun HMSI untuk mempersiapkan mahasiswa menghadapi lomba akademis kedepannya dan untuk mengapresiasi mahasiswa yang berprestasi</p>
                        <p class="font-bold mt-2">Bentuk Kegiatan</p>
                        <ol class="list-decimal list-inside">
                            <li>Pengisian formulir mahasiswa berprestasi HMSI yang dapat digunakan untuk keperluan pihak jurusan maupun HMSI.</li>
                            <li>Berkoordinasi dengan divisi Medkraf untuk apresiasi mahasiswa yang berprestasi dalam bentuk ucapan selamat melalui feed/story di media sosial Instagram.</li>
                        </ol>
                    </div>
                </div>

                <h2 id="accordion-kaderisasi-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-kaderisasi-body" aria-expanded="false" aria-controls="accordion-kaderisasi-body">
                        <span class="text-black">Kaderisasi HMSI 2023</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-kaderisasi-body" class="hidden" aria-labelledby="accordion-kaderisasi-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold">Latar belakang</p>
                        <p>Perlunya pelaksanaan kaderisasi 2023 untuk proses pembinaan sikap, karakter dan pola pikir setiap mahasiswa SI tahun 2022 yang dipertanggungjawabkan oleh pengurus HMSI 2022 sampai terbentuknya pengurus HMSI 2023</p>
                        <p class="font-bold mt-2">Bentuk Kegiatan</p>
                        <ol class="list-decimal list-inside">
                            <li>Melaksanakan kaderisasi secara offline (pemberian materi oleh pihak internal dan eksternal dari HMSI)</li>
                            <li>Menjalankan teknis dari kaderisasi yang akan dijalankan sesuai konsep yang telah dirancang</li>
                            <li>Melakukan sosialisasi kepada warga HMSI untuk melantik angkatan 2022 menjadi anggota muda dan anggota biasa</li>
                            <li>Pembacaan Surat Keputusan (SK) setelah proses kaderisasi selesai</li>
                        </ol>
                    </div>
                </div>

                <h2 id="accordion-seminar-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-seminar-body" aria-expanded="false" aria-controls="accordion-seminar-body">
                        <span class="text-black">Pemberitahuan Seminar Hasil dan KP Mahasiswa</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-seminar-body" class="hidden" aria-labelledby="accordion-seminar-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold">Latar belakang</p>
                        <p>Perlunya informasi terkait mahasiswa sistem informasi yang semhas agar dapat meningkatkan partisipasi untuk menghadiri semhas mahasiswa tersebut.</p>
                        <p class="font-bold mt-2">Bentuk Kegiatan</p>
                        <ol class="list-decimal list-inside">
                            <li>Mencari informasi jadwal seminar hasil dan seminar KP anggota HMSI.</li>
                            <li>Berkoordinasi dengan jurusan dan divisi Eksternal dalam menyampaikan informasi anggota HMSI yang akan melaksanakan seminar hasil dan KP melalui WhatsApp Group.</li>
                        </ol>
                    </div>
                </div>

                <h2 id="accordion-pelepasan-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white rounded-b-xl focus:rounded-b-none" data-accordion-target="#accordion-pelepasan-body" aria-expanded="false" aria-controls="accordion-pelepasan-body">
                        <span class="text-black">Pelepasan Anggota Biasa Sistem Informasi 2023</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-pelepasan-body" class="hidden" aria-labelledby="accordion-pelepasan-heading">
                    <div class="p-5 bg-base-100 text-left rounded-b-xl">
                        <p class="font-bold">Latar belakang</p>
                        <p>Perlunya sarana untuk memberikan informasi terkait jurusan sistem informasi dan juga kampus kepada mahasiswa baru SI agar dapat mengenal jurusan dan himpunan secara singkat yang ada di Sistem Informasi.</p>
                        <p class="font-bold mt-2">Bentuk Kegiatan</p>
                        <ol class="list-decimal list-inside">
                            <li>Melakukan parade wisuda untuk anggota biasa SI yang telah menyelesaikan masa studinya.</li>
                            <li>Berkoordinasi dengan divisi Eksternal dalam menyampaikan informasi anggota biasa HMSI yang akan wisuda melalui WhatsApp Group.</li>
                            <li>Berkoordinasi dengan divisi Medkraf untuk Apresiasi terhadap anggota biasa HMSI yang wisuda dalam bentuk ucapan selamat melalui feed/story di media sosial Instagram.</li>
                        </ol>
                    </div>
                </div>

            </div>

        </center>
        </section>

    </main>

@endsection