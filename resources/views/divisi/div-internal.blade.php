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
                    <img src="{{ asset('img/pengurus/internal/internal.jpg') }}" alt="divisi internal" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
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
                <figure><img src="{{ asset('img/pengurus/internal/kadiv-internal.jpg') }}" alt="kadiv internal" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Arif Wahyudi</h2>
                <p>Ketua Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/internal/sekbend-internal.jpg') }}" alt="sekbend internal" class="max-h-min" loading="lazy"></figure>
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
            <div id="accordion-collapse" data-accordion="collapse" class="max-w-4xl">

                <h2 id="accordion-upgrading-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black rounded-t-xl hover:bg-gray-100 bg-white" data-accordion-target="#accordion-upgrading-body" aria-expanded="false" aria-controls="accordion-upgrading-body">
                        <span class="text-black">Upgrading Pengurus HMSI</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-upgrading-body" class="hidden" aria-labelledby="accordion-upgrading-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold">Latar belakang</p>
                        <p>Diperlukan pengurus yang memiliki academic knowledge, skill of thinking, management skill, dan communication skill untuk sebuah organisasi.</p>
                        <p class="font-bold mt-2">Bentuk Kegiatan</p>
                        <p>Sharing dari pemateri</p>
                    </div>
                </div>

                <h2 id="accordion-gathering-pengurus-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-gathering-pengurus-body" aria-expanded="false" aria-controls="accordion-gathering-pengurus-body">
                        <span class="text-black">Gathering Pengurus HMSI</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-gathering-pengurus-body" class="hidden" aria-labelledby="accordion-gathering-pengurus-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold">Latar belakang</p>
                        <p>Diperlukan kegiatan yang dapat mempererat silaturahmi sesama pengurus HMSI sehingga dapat meningkatkan kerjasama yang lebih baik dalam kepengurusan</p>
                        <p class="font-bold mt-2">Bentuk Kegiatan</p>
                        <p>Makan bersama dan diskusi perihal HMSI</p>
                    </div>
                </div>

                <h2 id="accordion-gathering-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-gathering-body" aria-expanded="false" aria-controls="accordion-gathering-body">
                        <span class="text-black">Gathering HMSI</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-gathering-body" class="hidden" aria-labelledby="accordion-gathering-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold">Latar belakang</p>
                        <p>Diperlukan kegiatan hiburan untuk mengurangi tingkat kejenuhan yang tinggi dan kegiatan yang dapat mempererat tali silaturahmi.</p>
                        <p class="font-bold mt-2">Bentuk Kegiatan</p>
                        <p>Outbound (Pantai)</p>
                    </div>
                </div>

                <h2 id="accordion-aspirasi-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white rounded-b-xl focus:rounded-b-none" data-accordion-target="#accordion-aspirasi-body" aria-expanded="false" aria-controls="accordion-aspirasi-body">
                        <span class="text-black">Aspirasi dan Saran</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-aspirasi-body" class="hidden" aria-labelledby="accordion-aspirasi-heading">
                    <div class="p-5 bg-base-100 text-left rounded-b-xl">
                        <p class="font-bold">Latar belakang</p>
                        <p>Diperlukan wadah aspirasi dan saran warga Sistem Informasi terkait kebijakan yang dianggap menyimpang</p>
                        <p class="font-bold mt-2">Bentuk Kegiatan</p>
                        <p>Melakukan penyebaran aspirasi dan saran secara lisan maupun berupa link atau QR code dan juga melakukan pengecekan secara berkala terhadap aspirasi dan saran yang telah diberikan warga Sistem Informasi.</p>
                    </div>
                </div>

            </div>
        </center>
        </section>
    </main>

@endsection