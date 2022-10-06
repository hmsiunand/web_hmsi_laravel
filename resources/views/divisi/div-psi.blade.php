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
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100" title="panggilannya em-ye">
                        <figure><img src="./img/pengurus/psi/IMG_20220926.jpg" alt="kadiv psi" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Iqbal Manazil Yuni</h2>
                            <p>Ketua Divisi</p>
                        </div>
                    </div>
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
                        <li>Meningkatkan softskill dan hardskill mahasiswa Sistem Informasi di bidang IT.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/psi/IMG_8143.jpg" alt="sekre psi" class="max-h-min"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Riska Shifa Salsabilla</h2>
                <p>Sekretaris</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/psi/IMG_7941.jpg" alt="bendahara psi" class="max-h-min"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Rahmadina</h2>
                    <p>Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class=" flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
            <li>Ginda Teguh Imani</li>
            <li>Nada Safarina</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Kemal Muhammad Hiero</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Hagi Siraj Sumanta</li>
            <li>Alif Abdul Rauf</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Pemeliharaan dan Pengelolaan Sistem Informasi HMSI
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Karena dibutuhkan sebuah sistem informasi yang dapat mengelola informasi serta dapat diakses oleh HMSI</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Melakukan pemeliharaan sistem informasi HMSI dan mengelola sistem yang sudah ada</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Exam Preparation (XAMPP)
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Karena padatnya kegiatan di kampus yang membuat mahasiswa kesusahan untuk belajar dalam menghadapi ujian maka dibutuhkan sebuah kegiatan yang dapat membantu mahasiswa sistem informasi dalam mempersiapkan dirinya untuk menghadapi pelaksanaan ujian(UTS/UAS)</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Mewadahi mahasiswa Sistem Informasi dalam pembelajaran persiapan ujian, dan sebagai tempat berbagi ilmu antar sesama mahasiswa sistem informasi.</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Pelatihan Teknologi Informasi
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Karena perkembangan teknologi yang cukup cepat serta semakin ketatnya persaingan dunia kerja di luar sana maka dibutuhkan sebuah kegiatan untuk dapat meningkatkan hardskill dari mahasiswa sistem informasi dalam menghadapi permintaan dunia kerja pada saat sekarang.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>Mahasiswa sistem informasi memiliki hardskill yang berguna untuk membantu perkuliahan</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                HACKATHON
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>ISCE merupakan agenda 2 tahun sekali dari HMSI. ISCE seharusnya dilaksanakan pada tahun 2020 (tidak terlaksana karena Covid-19) dan tahun 2022. Menimbang semua kegiatan tahunan HIMA dan UKMF dimasukkan ke dalam LUSTRUM II FTI Unand, maka kegiatan ISCE 2022 akan dilaksanakan dengan ikut serta menyukseskan kegiatan Hackathon. Menimbang kepengurusan sebelumnya juga terlibat dalam proses pengonsepan acara yang berkoordinasi dengan Panitia Lustrum II.</p>
                <p class="font-bold mt-2">Tujuan</p>
                <p>HMSI ikut serta dalam menyukseskan acara hackathon </p>
            </div>
            </div>
        </center>
        </section>
    </main>

@endsection