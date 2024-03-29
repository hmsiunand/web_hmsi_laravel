@extends('header-footer')

@section('title', 'Divisi Bikraf')

@section('content')

    <main>
        <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Bisnis Kreatif</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <img src="{{ asset('img/pengurus/bikraf/bikraf.jpg') }}" alt="divisi bikraf" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Bisnis Kreatif?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Merupakan sebuah divisi pemberdayaan kewirausahaan di kalangan keluarga Sistem Informasi untuk mengembangkan minat dan bakat mahasiswa dibidang kewirausahaan dengan mengedepankan segala aspek pertumbuhan perekonomian dalam bisnis kreatif melalui potensi ide dan sumber daya manusianya.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Menjadikan mahasiswa Sistem Informasi yang kreatif, inovatif, serta memiliki bekal kemampuan manajerial dalam bidang bisnis kreatif agar dapat menjadi penggerak dalam pertumbuhan perekonomian dan peningkatan kualitas hidup</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Menjalankan bisnis untuk menunjang pendanaan kegiatan HMSI.</li>
                        <li>Memberikan wadah untuk mengembangkan ide bisnis dan bisnis kreatif yang berjalan antar mahasiswa Sistem Informasi</li>
                        <li>Berpartisipasi dalam berbagai kegiatan yang bertemakan bisnis dan kewirausahaan, untuk meningkatkan Bikraf yang lebih baik</li>
                        <li>Menjalin kerja sama antar divisi HMSI lainnya dalam menunjang kegiatan bisnis kreatif Membangun dan mengembangkan kerjasama dengan kemitraan terkait (partnership) yang saling menguntungkan.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/bikraf/kadiv-bikraf.jpg') }}" alt="kadiv bikraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Syafira Putri Zahra</h2>
                <p>Ketua Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/bikraf/sekre-bikraf.jpg') }}" alt="sekre bikraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Darma Zidane Gusnambi</h2>
                    <p>Sekretaris</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="{{ asset('img/pengurus/bikraf/bendahara-bikraf.jpg') }}" alt="bendahara bikraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Yohanda</h2>
                    <p>Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Ariq Abdurrahman Hakim</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Fahri Andika Sanjaya</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            <div id="accordion-collapse" data-accordion="collapse" class="max-w-4xl">
                <h2 id="accordion-gerai-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black rounded-t-xl hover:bg-gray-100 bg-white" data-accordion-target="#accordion-gerai-body" aria-expanded="false" aria-controls="accordion-gerai-body">
                        <span class="text-black">Gerai HMSI</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-gerai-body" class="hidden" aria-labelledby="accordion-gerai-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold mt-2">Latar Belakang</p>
                        <p>Tempat bagi mahasiswa Sistem Informasi untuk melakukan transaksi dan program kerja utama yang relevan dengan bikraf</p>
                        <p class="font-bold">Bentuk Kegiatan</p>
                        <ol class="list-decimal list-inside">
                            <li>Promosi dan penjualan produk berupa makanan dan minuman di gerai HMSI. Serta adanya promosi melalui media sosial</li>
                            <li>Pengecekan stok produk setiap minggu dan pencatatan stok produk.</li>
                            <li>Catatan akumulasi penjualan, pengeluaran, untung, serta kerugian.</li>
                        </ol>  
                    </div>
                </div>

                <h2 id="accordion-baju-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-baju-body" aria-expanded="false" aria-controls="accordion-baju-body">
                        <span class="text-black">Baju HMSI</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-baju-body" class="hidden" aria-labelledby="accordion-baju-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold mt-2">Latar Belakang</p>
                        <p>Diperlukannya baju HMSI sebagai identitas untuk mahasiswa Sistem Informasi</p>
                        <p class="font-bold">Bentuk Kegiatan</p>
                        <ol class="list-decimal list-inside">
                            <li>Pendataan mahasiswa Sistem Informasi angkatan 2022</li>
                            <li>Penerimaan dan pencatatan pembayaran baju.</li>
                            <li>Pemesanan baju kepada vendor.</li>
                            <li>Pembagian baju kepada mahasiswa Sistem Informasi angkatan 2023.</li>
                        </ol> 
                    </div>
                </div>

                <h2 id="accordion-idcard-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-idcard-body" aria-expanded="false" aria-controls="accordion-idcard-body">
                        <span class="text-black">ID Card</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-idcard-body" class="hidden" aria-labelledby="accordion-idcard-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold mt-2">Latar Belakang</p>
                        <p>Diperlukannya id card sebagai tanda kepengurusan HMSI 2023</p>
                        <p class="font-bold">Bentuk Kegiatan</p>
                        <p>Menyediakan id card untuk kepengurusan HMSI 2023</p>
                    </div>
                </div>

                <h2 id="accordion-enterpreneur-learning-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white" data-accordion-target="#accordion-enterpreneur-learning-body" aria-expanded="false" aria-controls="accordion-enterpreneur-learning-body">
                        <span class="text-black">Enterpreneur Learning</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-enterpreneur-learning-body" class="hidden" aria-labelledby="accordion-enterpreneur-learning-heading">
                    <div class="p-5 bg-base-100 text-left">
                        <p class="font-bold mt-2">Latar Belakang</p>
                        <p>Meningkatnya peluang menjadi seorang wirausahawan dan pebisnis untuk mahasiswa, sehingga dibutuhkan wadah pengenalan dan sharing mengenai dunia bisnis dan wirausaha.</p>
                        <p class="font-bold">Bentuk Kegiatan</p>
                        <p>Mengadakan seminar dengan mengangkat tema yang berhubungan dengan kegiatan kewirausahaan.</p>
                    </div>
                </div>

                <h2 id="accordion-merchandise-heading">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-black hover:bg-gray-100 bg-white rounded-b-xl focus:rounded-b-none" data-accordion-target="#accordion-merchandise-body" aria-expanded="false" aria-controls="accordion-merchandise-body">
                        <span class="text-black">Merchandise</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-merchandise-body" class="hidden" aria-labelledby="accordion-merchandise-heading">
                    <div class="p-5 bg-base-100 text-left rounded-b-xl">
                        <p class="font-bold mt-2">Latar Belakang</p>
                        <p>Adanya keperluan untuk menambah pemasukan HMSI dan menghasilkan ikon HMSI berupa produk.</p>
                        <p class="font-bold">Bentuk Kegiatan</p>
                        <p>Membuat merchandise untuk mahasiswa sistem informasi.</p>
                    </div>
                </div>
            </div>

        </center>
        </section>
    </main>

@endsection