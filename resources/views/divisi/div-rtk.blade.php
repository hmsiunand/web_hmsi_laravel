@extends('header-footer')

@section('title', 'Divisi RTK')

@section('content')

    <main>
        <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi RTK</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                <img src="./img/pengurus/medkraf/medkraf.jpg" alt="divisi rtk" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Rumah Tangga dan Kesekretariatan?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Divisi yang berperan dalam pengelolaan, penataan, serta pemeliharaan kebersihan dan keindahan sekretariat HMSI Unand serta sebagai tim yang bertugas mengelola pengarsipan dan surat menyurat pengurus HMSI Unand serta urusan administrasi lainnya.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Menciptakan sekretariat yang terorganisir dengan tanggung jawab dan profesional sehinggan akan terciptanya sistem administrasi yang efektif dan efesien serta terwujudnya sekretariat yang nyaman untuk menunjang anggota dalam berkegiatan.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Mengelola dan menjaga kebersihan serta keindahan sekretariat dalam menciptakan kenyamanan bagi anggota untuk melaksanakan kegiatan sekretariat.</li>
                        <li>Mengajak seluruh warga HMSI secara tidak langsung agar dapat menciptakan lingkungan sekretriat yang nyaman.</li>
                        <li>Mengelola berkas dan dokumen kesekretariatan secara terorganisir dan mengoptimalkan kearsipan dokumen.</li>
                        <li>Menciptakan tata ruang sekretariat yang menarik serta menjaga kerapian sekretarian dan lingkungannya</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/rtk/IMG_8168.jpg" alt="kadiv rtk" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Athifa Rifda Andra</h2>
                <p>Kepala Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/rtk/IMG_8176.jpg" alt="sekbend rtk" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Niki Yulia Nada</h2>
                    <p>Sekretaris-Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class=" flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Ahmad Rifki Farid</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Nurul Insan</li>
                <li>Putra Ilham</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Fina Aulia Nazari</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
            <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
            <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Piket Rutin
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Perlu dibentuk jadwal piket rutin pengurus HMSI secara jelas, sehingga secara tidak langsung pengurus HMSI dapat bekerjasama dan ikut serta dalam menjaga dan membersihkan ruang kesekretariatan</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Mendata KRS seluruh pengurus HMSI 2023 dan menetapkan jadwal piket.</li>
                        <li>Pelaksanaan piket di setiap hari kerja kecuali hari libur.</li>
                        <li>Pengurus memiliki jatah 1x dalam seminggu untuk melaksanakan piket</li>
                        <li>Jumlah pengurus yang piket dalam sehari adalah 8 orang</li>
                        <li>Memantau dan mengontrol pelaksanaan piket melalui presensi yang disediakan (disertai dengan foto bukti kehadiran dengan cantuman tanggal)</li>
                        <li>Presensi berupa link gform / QR Code</li>
                        <li>Penetapan SOP dan sanksi lebih lanjut</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Bedah Sekre
                </div>
                <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya diadakan bedah sekretariat dimana pelaksanaannya dilakukan dengan melakukan goro/piket bersama dalam skala besar, sehingga ruang kesekretariatan dapat terjaga kenyamanan dan kebersihannya untuk dapat dipakai oleh seluruh warga HMSI.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <ol class="list-decimal list-inside">
                    <li>Membersihkan dan menata kembali ruang sekretariat.</li>
                    <li>Pengecekan inventaris.</li>
                    <li>Memantau dan mengontrol terlaksananya bedah sekretariat dengan pembuatan presensi.</li>
                    <li>Presensi dalam bentuk absen cetak.</li>
                    <li>Menyediakan konsumsi.</li>
                    <li>Menetapkan SOP dan sanksi untuk pengurus</li>
                </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Pengadaan Presensi
                </div>
                <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya pengadaan presensi untuk setiap rapat ataupun kegiatan global himpunan sebagai catatan bukti kehadiran pengurus dalam setiap kegiatan yang diadakan.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <ol class="list-decimal list-inside">
                    <li>Membuat presensi dengan google form (online) ataupun mencetak presensi (offline) pada setiap kegiatan HMSI yang bersifat global.</li>
                    <li>Menyebarkan presensi yang telah dibuat di setiap rapat atau kegiatan global HMSI.</li>
                </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Pengadaan dan Pengelolaan Inventaris
                </div>
                <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlu adanya pengadaan terkait Inventaris HMSI yang baik agar dapat menunjang seluruh kegiatan kesekretariatan. Selain itu, juga diperlukan pengelolaan inventaris berupa kegiatan pendataan inventaris yang jelas dan rapi, sehingga dapat mempermudah dalam melihat kerusakan atau kehilangan inventaris yang ada di ruang kesekretariatan HMSI.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <ol class="list-decimal list-inside">
                    <li>Melakukan pengadaan inventaris yang dibutuhkan untuk kegiatan kesekretariatan.</li>
                    <li>Melakukan pendataan inventaris yang ada di sekretariat HMSI. Dan pengecekan kembali kondisi inventaris di setiap bulannya.</li>
                    <li>Merapikan dan menjaga inventaris kesekretariatan HMSI</li>
                    <li>Melabeli seluruh inventaris milik HMSI.</li>
                    <li>Membuat SOP terkait peminjaman dan pengembalian inventaris. Serta sanksi kerusakan inventaris.</li>
                </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Pendataan dan Pengarsipan Biodata Anggota Baru HMSI
                </div>
                <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya pengumpulan dan pengarsipan biodata anggota baru HMSI dengan rapi dan jelas yang mungkin diperlukan untuk kepengurusan selanjutnya atau untuk keperluan lainnya.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <ol class="list-decimal list-inside">
                    <li>Membuat dan menyediakan formulir pendataan biodata anggota baru HMSI periode 2023 dalam bentuk google form</li>
                    <li>Mengarsipkan biodata anggota baru HMSI periode 2023 dalam bentuk softcopy</li>
                    <li>Membuat backup arsip biodata anggota baru HMSI periode 2023 di Google Drive</li>
                    <li>Menyalin arsip biodata anggota baru HMSI periode 2023 di PC sekretariat HMSI.</li>
                </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Pendataan dan Pengarsipan Biodata Pengurus HMSI
                </div>
                <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya pengumpulan dan pengarsipan biodata pengurus HMSI 2022 dengan rapi dan jelas yang mungkin diperlukan untuk kepengurusan selanjutnya atau untuk keperluan lainnya.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <ol class="list-decimal list-inside">
                    <li>Membuat dan menyediakan formulir pendataan biodata pengurus HMSI periode 2023 dalam bentuk google form</li>
                    <li>Mengarsipkan biodata pengurus HMSI periode 2023 dalam bentuk softcopy</li>
                    <li>Membuat backup arsip biodata pengurus HMSI periode 2023 di Google Drive</li>
                    <li>Menyalin arsip biodata pengurus HMSI periode 2023 di PC sekretariat HMSI</li>
                </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Sertifikat Pengurus
                </div>
                <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Perlunya suatu penghargaan kepada setiap pengurus HMSI untuk menghargai dedikasinya selama menjalankan kepengurusan dalam satu periode HMSI.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <ol class="list-decimal list-inside">
                    <li>Berkoordinasi dengan medkraf untuk desain sertifikat</li>
                    <li>Mengirimkan sertifikat kepada masing-masing pengurus lewat email.</li>
                </ol>
                </div>
            </div>
            </center>
        </section>
    </main>

@endsection