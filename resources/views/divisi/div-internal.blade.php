@extends('header-footer')

@section('title', 'Divisi Internal')

@section('content')

    <main>
        <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Internal</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <img src="./img/pengurus/internal/internal.jpg" alt="divisi internal" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Internal?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Merupakan divisi yang berfungsi memfasilitasi hubungan antar pengurus dan warga HMSI sekaligus mempererat dan menjaga kekeluargaan di HMSI.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Menjadikan Divisi Internal sebagai penyedia kebutuhan warga HMSI bagi dalam akademik maupun non-akademik.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Memantau, menampung, mempertimbangkan, dan memperjuangkan aspirasi mahasiswa yang berkaitan dengan usaha peningkatan kesejahteraan mahasiswa dalam hal akademis, biaya, dan fasilitas.</li>
                        <li>Mengawasi berbagai kegiatan di dalam HMSI</li>
                        <li>Mempererat hubungan sesama warga Sistem Informasi</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/humas/IMG_8004.jpg" alt="kadiv internal" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Arif Wahyudi</h2>
                <p>Ketua Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/humas/IMG_7997.jpg" alt="sekbend internal" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Nabila Fitri Misyandra</h2>
                    <p>Sekretaris-Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Arieska Kharzani</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Syadza Intan Benya</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Mhd. Faiz Yunus</li>
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
                <p>Diperlukan pengurus yang memiliki academic knowledge, skill of thinking, management skill, dan communication skill untuk sebuah organisasi.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <p>Sharing dari pemateri</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Gathering Pengurus HMSI
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Diperlukan kegiatan yang dapat mempererat silaturahmi sesama pengurus HMSI sehingga dapat meningkatkan kerjasama yang lebih baik dalam kepengurusan</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <p>Makan bersama dan diskusi perihal HMSI</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Gathering HMSI
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Diperlukan kegiatan hiburan untuk mengurangi tingkat kejenuhan yang tinggi dan kegiatan yang dapat mempererat tali silaturahmi.</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <p>Outbound (Pantai)</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Aspirasi dan Saran
            </div>
            <div class="collapse-content"> 
                <p class="font-bold">Latar belakang</p>
                <p>Diperlukan wadah aspirasi dan saran warga Sistem Informasi terkait kebijakan yang dianggap menyimpang</p>
                <p class="font-bold mt-2">Bentuk Kegiatan</p>
                <p>Melakukan penyebaran aspirasi dan saran secara lisan maupun berupa link atau QR code dan juga melakukan pengecekan secara berkala terhadap aspirasi dan saran yang telah diberikan warga Sistem Informasi.</p>
            </div>
            </div>
        </center>
        </section>
    </main>

@endsection