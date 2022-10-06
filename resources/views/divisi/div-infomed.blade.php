@extends('header-footer')

@section('title', 'Divisi Infomed')

@section('content')

    <main>
        <section class="text-center py-6">
            <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Informasi dan Media</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/infomed/IMG_9014(1).jpg" alt="kadiv infomed" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Fadhilla Islamita Putri</h2>
                            <p>Ketua Divisi</p>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Informasi dan Media?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Divisi Informasi dan Media adalah divisi yang mengelola informasi, komunikasi, serta publikasi media antara Himpunan Mahasiswa Sistem Informasi dengan seluruh civitas akademika FTI Unand dan lembaga formal kampus dengan memanfaatkan berbagai media.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Mewujudkan Divisi Informasi dan Media HMSI Unand sebagai pengelola, penyedia dan publikasi informasi HMSI Unand kepada seluruh warga serta civitas academica Sistem Informasi.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Menjadi wadah pengelolaan informasi dan publikasi setiap kegiatan HMSI bagi mahasiswa Sistem Informasi</li>
                        <li>Mengatur ketertiban penyampaian informasi yang ada.</li>
                        <li>Memaksimalkan media informasi yang ada dalam penyampaian informasi.</li>
                        <li>Menjadi wadah pengembangan potensi minat dan bakat mahasiswa sistem informasi dalam bidang publikasi dan dokumentasi.</li>
                        <li>Menyajikan konten-konten yang menarik, kreatif, dan inovatif melalui berbagai media sosial sesuai dengan perkembangan zaman.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/infomed/IMG_8317.jpg" alt="sekre infomed" class="max-h-min"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Lisca Angriani</h2>
                    <p>Sekretaris</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/infomed/IMG_8486.jpg" alt="bendahara infomed" class="max-h-min"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Distifia Oktari</h2>
                    <p>Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
            <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
            <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Siti Nina Azwalia Tanjung</li>
                <li>Fauzan Maizardi</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Fathia Rahma Nazhifa</li>
                <li>Rafiqah</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Muhammad Rayhan Rizaldi</li>
                <li>Lara Busyanil</li>
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
                    <p class="font-bold mt-2">Tujuan</p>
                    <ol class="list-decimal list-inside">
                        <li>Berbagi informasi terkait perkuliahan maupun informasi umum yang berkaitan dengan akademik.</li>
                        <li>Memberitahu perihal kegiatan pengurus HMSI.</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    i-Think
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Adanya isu-isu terkini terkait IT maupun pengetahuan umum yang perlu dipublikasikan.</p>
                    <p class="font-bold mt-2">Tujuan</p>
                    <p>Menginformasikan atau mengedukasikan masyarakat akan isu-isu terkini terkait IT maupun pengetahuan umum.</p>
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
                    <p class="font-bold mt-2">Tujuan</p>
                    <p>Sebagai informasi kepengurusan HMSI periode 2022 kepada pengunjung sekretariat sekaligus kenang-kenangan.</p>
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
                    <p class="font-bold mt-2">Tujuan</p>
                    <p>Pengambilan dokumentasi berupa foto dan video setiap kegiatan pengurus HMSI.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Webinar Desain
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Diperlukannya pelatihan desain kepada pengurus HMSI maupun mahasiswa aktif FTI Unand.</p>
                    <p class="font-bold mt-2">Tujuan</p>
                    <p>Memberikan pelatihan desain bagi Pengurus HMSI Unand dan mahasiswa aktif FTI Unand dan dapat menjadi dasar bagi Pengurus HMSI Unand dan mahasiswa aktif FTI Unand dalam melakukan kegiatan desain.</p>
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
                    <p class="font-bold mt-2">Tujuan</p>
                    <p>Sebagai kenang-kenangan dan motivasi bagi kepengurusan di periode berikutnya.</p>
                </div>
            </div>
            </center>
        </section>
    </main>

@endsection