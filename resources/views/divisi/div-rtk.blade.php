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
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/rtk/IMG_8165.jpg" alt="kadiv rtk" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Muhammad Afif</h2>
                            <p>Ketua Divisi</p>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Rumah Tangga dan Kesekretariatan?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Divisi yang berperan dalam pengelolaan, penataan, serta pemeliharaan kebersihan dan keindahan sekretariat HMSI Unand. Juga sebagai tim administrasi yang bertugas mengelola pengarsipan dan surat menyurat pengurus HMSI Unand serta urusan administrasi lainnya.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Menciptakan sekretariat yang terorganisir dengan manajerial dan tanggung jawab tinggi sehingga terciptanya sistem administrasi yang efektif dan efisien serta membangkitkan semangat kerja yang aktif dan dinamis.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Mengelola dan menjaga kebersihan serta keindahan sekretariat dalam menciptakan kenyamanan saat melakukan kegiatan yang dilaksanakan di sekretariat.</li>
                        <li>Menciptakan tata ruang sekretariat yang menarik minat, mata, dan hati.</li>
                        <li>Mengajak warga HMSI secara tidak langsung aktif dalam menciptakan sekretariat yang nyaman.</li>
                        <li>Mengelola segala berkas dan segala dokumen kesekretariatan secara terorganisir.</li>
                        <li>Menjaga kerapian sekretariat dan lingkungannya</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/rtk/IMG_8168.jpg" alt="sekre rtk" class="max-h-min"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Desrilia Putri Utami</h2>
                <p>Sekretaris</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/rtk/IMG_8176.jpg" alt="bendahara rtk" class="max-h-min"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Sri Ulfa Berliani</h2>
                    <p>Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class=" flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Dean Fisabil Andwi</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Radithya Romero Al Giffary</li>
                <li>Nadilla Saraswati</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Faradila Suwandi</li>
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
                    <p class="font-bold mt-2">Tujuan</p>
                    <p>Agar kebersihan dan kenyamanan ruangan sekretariat HMSI tetap terjaga</p>
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
                <p class="font-bold mt-2">Tujuan</p>
                <p>Agar  kebersihan dan kenyamanan ruangan sekretariat secara menyeluruh tetap terjaga dan terciptanya suasana baru pada ruangan sekretariat.</p>
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
                <p class="font-bold mt-2">Tujuan</p>
                <p>Agar adanya catatan bukti kehadiran pengurus dalam setiap rapat atau kegiatan global himpunan yang terlaksana.</p>
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
                <p class="font-bold mt-2">Tujuan</p>
                <p>Untuk menunjang seluruh kegiatan kesekretariatan dan memantau kondisi inventaris HMSI.</p>
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
                <p class="font-bold mt-2">Tujuan</p>
                <p>Agar informasi biodata anggota baru HMSI dapat tersimpan dalam bentuk softcopy, sehingga tidak mudah hilang dan dapat tersimpan dengan baik.</p>
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
                <p class="font-bold mt-2">Tujuan</p>
                <p>Agar informasi biodata pengurus HMSI 2022 dapat tersimpan dalam bentuk softcopy, sehingga tidak mudah hilang dan dapat tersimpan dengan baik.</p>
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
                <p class="font-bold mt-2">Tujuan</p>
                <p>Sebagai kenang-kenangan dan penghargaan selama satu periode kepengurusan.</p>
                </div>
            </div>
            </center>
        </section>
    </main>

@endsection