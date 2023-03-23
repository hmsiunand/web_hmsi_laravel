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
                    <img src="./img/pengurus/bikraf/bikraf.jpg" alt="divisi bikraf" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
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
                <figure><img src="./img/pengurus/bikraf/IMG_9009.jpg" alt="kadiv bikraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Syafira Putri Zahra</h2>
                <p>Ketua Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/bikraf/IMG_9010.jpg" alt="sekre bikraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Darma Zidane Gusnambi</h2>
                    <p>Sekretaris</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/bikraf/IMG_9010.jpg" alt="bendahara bikraf" class="max-h-min" loading="lazy"></figure>
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
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Gerai HMSI
            </div>
            <div class="collapse-content"> 
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
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Baju HMSI
            </div>
            <div class="collapse-content"> 
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
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                ID Card
            </div>
            <div class="collapse-content"> 
                <p class="font-bold mt-2">Latar Belakang</p>
                <p>Diperlukannya id card sebagai tanda kepengurusan HMSI 2023</p>
                <p class="font-bold">Bentuk Kegiatan</p>
                <p>Menyediakan id card untuk kepengurusan HMSI 2023</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Enterpreneur Learning
            </div>
            <div class="collapse-content"> 
                <p class="font-bold mt-2">Latar Belakang</p>
                <p>Meningkatnya peluang menjadi seorang wirausahawan dan pebisnis untuk mahasiswa, sehingga dibutuhkan wadah pengenalan dan sharing mengenai dunia bisnis dan wirausaha.</p>
                <p class="font-bold">Bentuk Kegiatan</p>
                <p>Mengadakan seminar dengan mengangkat tema yang berhubungan dengan kegiatan kewirausahaan.</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Merchandise
            </div>
            <div class="collapse-content"> 
                <p class="font-bold mt-2">Latar Belakang</p>
                <p>Adanya keperluan untuk menambah pemasukan HMSI dan menghasilkan ikon HMSI berupa produk.</p>
                <p class="font-bold">Bentuk Kegiatan</p>
                <p>Membuat merchandise untuk mahasiswa sistem informasi.</p>
            </div>
            </div>
        </center>
        </section>
    </main>

@endsection