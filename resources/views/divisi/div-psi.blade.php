@extends('header-footer')

@section('title', 'Divisi PSI')

@section('content')

    <main>
        <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi PSI</p>
        </section>

        <div class="hero min-h-screen ">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                <img src="{{ asset('img/pengurus/psi/psi.jpg') }}" alt="divisi psi" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
                </div>
                <div class="text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi PSI?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Divisi Pengembangan Skill dan Intelektual (PSI) merupakan divisi yang mewadahi mahasiswa Sistem Informasi dalam mengembangkan Skill dan cara berpikir sebagai seorang mahasiswa IT. Divisi ini berperan penting sebagai media mahasiswa Sistem Informasi untuk lebih mengenal perkembangan IT serta prospek kerja yang dibutuhkan dunia IT sekarang. Untuk itu divisi pengembangan skill dan intelektual membutuhkan anggota yang baik dan memiliki rasa tanggung jawab, serta dapat bekerja sama antar anggota divisi lainnya.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Mewadahi dan menarik minat mahasiswa Sistem Informasi dalam pengembangan skill dan cara berpikir di bidang IT.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Mewadahi  pengembangan minat dan bakat mahasiswa Sistem Informasi.</li>
                        <li>Menjadi wadah sebagai tempat untuk sharing wawasan atau ilmu yang dimiliki antar Mahasiswa Sistem informasi.</li>
                        <li>Meningkatkan softskill dan hardskill mahasiswa Sistem Informasi.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/psi/kadiv-psi.jpg') }}" alt="kadiv psi" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Muhammad Yudhistira</h2>
                <p>Kepala Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/psi/sekbend-psi.jpg') }}" alt="sekbend psi" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Karin Oktariani Effendi</h2>
                    <p>Sekretaris-Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class=" flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
            <li>Vallen Adithya Rekhsana</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Kemal Muhammad Hiero</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Fikran Shadiq Elfayit</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
        <div id="accordion-collapse" data-accordion="collapse" class="max-w-4xl">

            <h2 id="accordion-pemeliharaan-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black rounded-t-xl hover:bg-gray-100 bg-white" data-accordion-target="#accordion-pemeliharaan-body" aria-expanded="false" aria-controls="accordion-pemeliharaan-body">
                    <span class="text-black">Pemeliharaan dan Pengelolaan Sistem Informasi HMSI</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-pemeliharaan-body" class="hidden" aria-labelledby="accordion-pemeliharaan-heading">
                <div class="p-5 bg-base-100 text-left">
                    <p class="font-bold">Latar belakang</p>
                    <p>Karena dibutuhkan sebuah sistem informasi yang dapat mengelola informasi serta dapat diakses oleh HMSI</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Mengelola Website HMSI.</li>
                        <li>Melakukan maintenance website HMSI.</li>
                    </ol>
                </div>
            </div>

            <h2 id="accordion-xampp-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-xampp-body" aria-expanded="false" aria-controls="accordion-xampp-body">
                    <span class="text-black">Exam Preparation (XAMPP)</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-xampp-body" class="hidden" aria-labelledby="accordion-xampp-heading">
                <div class="p-5 bg-base-100 text-left">
                    <p class="font-bold">Latar belakang</p>
                    <p>Karena padatnya kegiatan di kampus yang membuat mahasiswa kesusahan untuk belajar dalam menghadapi ujian maka dibutuhkan sebuah kegiatan yang dapat membantu mahasiswa sistem informasi dalam mempersiapkan dirinya untuk menghadapi pelaksanaan ujian(UTS/UAS)</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Membuat google form untuk mewadahi daftar permintaan pelaksanaan XAMPP.</li>
                        <li>Mencari pemateri untuk berbagi dan sharing tentang mata kuliah tertentu.</li>
                        <li>Pelaksanaan XAMPP.</li>
                        <li>Memberikan Pembahasan Materi (Pembahasan Soal/Pembahasan Materi yang bersangkutan dengan materi ujian)</li>
                    </ol>
                </div>
            </div>

            <h2 id="accordion-pti-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-pti-body" aria-expanded="false" aria-controls="accordion-pti-body">
                    <span class="text-black">Pelatihan Teknologi Informasi</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-pti-body" class="hidden" aria-labelledby="accordion-pti-heading">
                <div class="p-5 bg-base-100 text-left">
                    <p class="font-bold">Latar belakang</p>
                    <p>Karena perkembangan teknologi yang cukup cepat serta semakin ketatnya persaingan dunia kerja di luar sana maka dibutuhkan sebuah kegiatan untuk dapat meningkatkan hardskill dari mahasiswa sistem informasi dalam menghadapi permintaan dunia kerja pada saat sekarang.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Pelaksanaan pelatihan/ workshop teknologi informasi, missal : Desain UI,pelatihan/workshop pemrograman dan/atau tutor teman sebaya.</li>
                        <li>Mencari pemateri untuk kegiatan pelatihan/workshop TI.</li>
                        <li>Pelaksanaan Pelatihan/Workshop</li>
                    </ol>
                </div>
            </div>

            <h2 id="accordion-isce-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white rounded-b-xl focus:rounded-b-none" data-accordion-target="#accordion-isce-body" aria-expanded="false" aria-controls="accordion-isce-body">
                    <span class="text-black">Information System Celebration & Event</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-isce-body" class="hidden" aria-labelledby="accordion-isce-heading">
                <div class="p-5 bg-base-100 text-left rounded-b-xl">
                <p class="font-bold">Latar belakang</p>
                <p>ISCE merupakan agenda 2 tahun sekali dari HMSI. ISCE bertujuan untuk mengenalkan Departemen Sistem Informasi Universitas Andalas. ISCE dilaksanakan agar dapat menumbuhkan dan memacu daya saing dalam mengikuti lomba di bidang IT. Rangkaian acara yang diadakan yaitu berupa Hackathon, Bazzar, Seminar UI/UX, Seminar Kewirausahaan, dan Workshop.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <p>Perlombaan di bidang IT, Bazzar, dan Workshop/Seminar.</p>
                </div>
            </div>

        </div>

        </center>
        </section>
    </main>

@endsection