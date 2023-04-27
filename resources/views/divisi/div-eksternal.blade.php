@extends('header-footer')

@section('title', 'Divisi Eksternal')

@section('content')

    <main>
        <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Eksternal</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <img src="{{ asset('img/pengurus/eksternal/eksternal.jpg') }}" alt="divisi eksternal" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Eksternal?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Merupakan divisi yang bertanggung jawab dalam menjalin hubungan dan kerjasama dengan pihak eksternal, untuk mengenalkan himpunan ke luar melalui kegiatan-kegiatan yang berkaitan dengan akademik maupun non-akademik, serta meningkatkan peran aktif mahasiswa dalam berbagai kegiatan.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Menjadikan divisi Eksternal sebagai kekuatan HMSI dalam bidang hubungan kerja sama dengan pihak luar HMSI, dan juga menjadi pusat pelayanan komunikasi dan informasi publik yang terpercaya guna membangun citra positif, nama baik HMSI.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Menjalin silaturahmi dan kerja sama yang baik antar lembaga di lingkungan FTI.</li>
                        <li>Memperkenalkan serta membuat hmsi dikenal baik di lingkungan kampus maupun masyarakat.</li>
                        <li>Membangun komunikasi antara setiap elemen yang ada pada jurusan sistem informasi dengan sikap profesionalitas.</li>
                        <li>Membangun eksternal HMSI yang kompeten dalam penyebarluasan informasi serta publikasi Jurusan Sistem Informasi.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/eksternal/kadiv-eksternal.jp') }}g" alt="kadiv eksternal" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Zuha Bima Alfaruq</h2>
                <p>Ketua Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/eksternal/sekbend-eksternal.jpg') }}" alt="sekbend eksternal" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Shefilla Raisya Razade Stevano</h2>
                    <p>Sekretaris-Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Hasya Zikra Alfrena</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Amalia Sandi alzahrah</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Suci Rahmadhani</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
        <div id="accordion-collapse" data-accordion="collapse" class="max-w-4xl">
            <h2 id="accordion-coming-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black rounded-t-xl hover:bg-gray-100 bg-white" data-accordion-target="#accordion-coming-body" aria-expanded="false" aria-controls="accordion-coming-body">
                    <span class="text-black">SI I'm coming</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-coming-body" class="hidden" aria-labelledby="accordion-coming-heading">
                <div class="p-5 bg-base-100 text-left">
                    <p class="font-bold">Latar belakang</p>
                    <p>Memperluas informasi mengenai perkuliahan termasuk Jurusan Sistem Informasi Universitas Andalas.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Memberikan materi seputar organisasi dan kepemimpinan.</li>
                        <li>Memberikan materi seputar dunia kampus.</li>
                        <li>Memberikan  materi tentang perkuliahan di Sistem Informasi dan peluang kerja setelah menamatkan perkuliahan khususnya setelah tamat di jurusan Sistem Informasi.</li>
                    </ol>
                </div>
            </div>

            <h2 id="accordion-collab-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-collab-body" aria-expanded="false" aria-controls="accordion-collab-body">
                    <span class="text-black">HMSI collab</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collab-body" class="hidden" aria-labelledby="accordion-collab-heading">
                <div class="p-5 bg-base-100 text-left">
                    <p class="font-bold">Latar belakang</p>
                    <p>Perlu adanya kerja sama antara HMSI dengan  lembaga  yang ada di Universitas Andalas atau di luar Universitas Andalas.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Sharing Informasi antara HMSI dan lembaga, terkait pengenalan Jurusan Sistem Informasi.</p>
                </div>
            </div>

            <h2 id="accordion-corner-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-corner-body" aria-expanded="false" aria-controls="accordion-corner-body">
                    <span class="text-black">HMSI corner</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-corner-body" class="hidden" aria-labelledby="accordion-corner-heading">
                <div class="p-5 bg-base-100 text-left">
                    <p class="font-bold">Latar belakang</p>
                    <p>Diperlukannya informasi tentang beasiswa dan lomba untuk mahasiswa/i Sistem Informasi Universitas Andalas.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Mem-posting setiap info tentang beasiswa dan lomba di media sosial seperti Instagram, group WA, dan membuat group di discord SI</p>
                </div>
            </div>

            <h2 id="accordion-peduli-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white rounded-b-xl focus:rounded-b-none" data-accordion-target="#accordion-peduli-body" aria-expanded="false" aria-controls="accordion-peduli-body">
                    <span class="text-black">HMSI peduli</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-peduli-body" class="hidden" aria-labelledby="accordion-peduli-heading">
                <div class="p-5 bg-base-100 text-left rounded-b-xl">
                    <p class="font-bold">Latar belakang</p>
                    <p>Banyaknya musibah yang terjadi di sekitar kita yang memerlukan bantuan berupa dana.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Mengumpulkan dan mengelola donasi untuk korban bencana alam atau masyarakat yang membutuhkan</li>
                        <li>Bakti Sosial ( Bulan Ramadhan )</li>
                    </ol>
                </div>
            </div>
        </div>
        </center>
        </section>
    </main>

@endsection