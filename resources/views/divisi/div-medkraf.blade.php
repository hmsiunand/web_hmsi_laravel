@extends('header-footer')

@section('title', 'Divisi Medkraf')

@section('content')

    <main>
        <section class="text-center py-6">
            <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Media Kreatif</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <img src="./img/pengurus/medkraf/medkraf.jpg" alt="divisi medkraf" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Media Kreatif?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Adalah divisi yang mengantarkan informasi melalui berbagai media dengan kreatifitas sebagai sumber dayanya sehingga menciptakan solusi dalam ranah komunikasi visual..</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Mewujudkan Divisi Media Kreatif HMSI Unand sebagai pengantar dan pengelola media informasi dari HMSI Unand serta meningkatkan kemampuan dan kreativitas anggota dengan menyajikan konten-konten yang unik dan menarik..</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Menjadi wadah pengantar informasi dan publikasi setiap kegiatan HMSI</li>
                        <li>Mengatur ketertiban penyampaian informasi yang ada.</li>
                        <li>Memaksimalkan media informasi yang ada dalam penyampaian informasi.</li>
                        <li>Menjadi wadah peningkatan skill dan kreativitas anggota.</li>
                        <li>Menyajikan konten-konten yang menarik, kreatif, dan inovatif melalui berbagai media sosial sesuai dengan perkembangan zaman.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/medkraf/IMG_8317.jpg" alt="kadiv medkraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Fathih Muhammad Alfi</h2>
                    <p>Ketua Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/medkraf/IMG_8486.jpg" alt="sekbend medkraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Akmal Rafi Nursya’bani</h2>
                    <p>Sekretaris-Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
            <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
            <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Bimbi Santriadi</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Rasyid Nugrahesa Riqua</li>
                <li>Salsabila Rahmah</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Daffa Abdillah</li>
            </ol>
            </div>
        </section>

        <section class="text-center py-6 px-10">
            <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
            <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Pengelolaan Sosial Media
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Diperlukannya wadah yang digunakan sebagai penyebaran informasi.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Mengelola media sosial dan berbagi informasi. (Media sosial yang digunakan yaitu Twitter, Instagram, LinkedIn, dan Youtube)</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Jasa Desain
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Menjadi tempat bagi anggota yang membutuhkan desain untuk berbagai media, seperti spanduk, banner, dll.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Membuat desain untuk berbagai kebutuhan, baik media cetak maupun media online sesusai SOP yang berlaku.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Foto Pengurus
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Diperlukan dokumentasi pengurus HMSI yang dipajang di ruang sekretariat HMSI sebagai informasi kepada pengunjung sekretariat HMSI.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Mengadakan sesi foto bersama kepengurusan HMSI periode 2023.</li>
                        <li>Mencetak foto tersebut ke dalam sebuah bingkai foto.</li>
                        <li>Memajang foto kepengurusan di sekretariat HMSI.</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Rekam Jejak
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Diperlukannya dokumentasi berupa foto dan video kegiatan-kegiatan yang dilakukan pengurus HMSI.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Mendokumentasikan dan editing video setiap kegiatan yang dilaksanakan oleh Himpunan Mahasiswa SI dan setiap pengambilan dokumentasi dimasukkan ke dalam Google Drive dan di upload ke media sosial HMSI.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Seminar Desain
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Diperlukannya pelatihan desain kepada pengurus HMSI maupun mahasiswa aktif FTI Unand.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Memberikan pelatihan desain kepada pengurus HMSI maupun mahasiswa aktif FTI Unand dengan pemateri yang memiliki keahlian di bidang desain.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Buku Tahunan
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Perlu adanya suatu dokumentasi untuk setiap kegiatan yang dilakukan selama periode kepengurusan sebagai kenang-kenangan bagi pengurus HMSI dan dapat menjadi motivasi bagi kepengurusan selanjutnya.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Membuat  desain dan mengumpulkan dokumentasi kegiatan selama setahun kepengurusan dalam bentuk album dengan keterangan kegiatan selama.</p>
                </div>
            </div>
            </center>
        </section>
    </main>

@endsection