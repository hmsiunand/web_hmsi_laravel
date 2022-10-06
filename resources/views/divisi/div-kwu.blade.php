@extends('header-footer')

@section('title', 'Divisi Kewirausahaan')

@section('content')

    <main>
        <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Kewirausahaan</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/kwu/IMG_9006.jpg" alt="kadiv kwu" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">M. Kevin Beslia Fadillah</h2>
                            <p>Ketua Divisi</p>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Kewirausahaan?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Divisi kewirausahaan adalah divisi yang berperan untuk membantu pencarian sumber dana HMSI dalam bentuk kegiatan kewirausahaan,yang tidak hanya berfokus pada keuntungan tetapi juga turut serta dalam proses pengembangan kreativitas berwirausaha mahasiswa sistem informasi.</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Menjadikan Divisi Kewirausahaan yang unggul dan menghasilkan wirausaha masa depan yang handal dengan cara mengembangkan kreativitas dan inovasi bisnis serta membantu keuangan HMSI.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Mengembangkan bisnis sederhana untuk menunjang perekonomian mahasiswa dan HMSI.</li>
                        <li>Menjadikan kewirausahaan sebagai penghubung berwirausaha bagi mahasiswa jurusan sistem informasi. </li>
                        <li>Ikut berpartisipasi dalam kegiatan yang bertemakan kewirausahaan yang diadakan oleh kampus maupun diluar kampus.</li>
                        <li>Menjalin kerja sama antar divisi HMSI lainnya dalam menunjang kegiatan wirausaha.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/kwu/IMG_9009.jpg" alt="sekre kwu" class="max-h-min"></figure>
                <div class="card-body">
                <h2 class="card-title justify-center">Ananda Fitria</h2>
                <p>Sekretaris</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/kwu/IMG_9010.jpg" alt="bendahara kwu" class="max-h-min"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Ruth Emeralda Raihan</h2>
                    <p>Bendahara</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Muhammad Al Hafiz</li>
                <li>Gita Putri</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Tri Ayunia Patma Lubis</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Baitul Azizah</li>
                <li>Taufik Hidayat</li>
            </ol>
        </div>
        </section>

        <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Warung HMSI
            </div>
            <div class="collapse-content"> 
                <p class="font-bold mt-2">Tujuan</p>
                <ol class="list-decimal list-inside">
                    <li>Mengasah kemampuan pengurus dan anggota himpunan dalam berwirausaha.</li>
                    <li>Memudahkan anggota HMSI dan lingkungan HMSI dalam pemenuhan kebutuhannya sesuai dengan yang disediakan oleh warung HMSI ini.</li>
                    <li>Menambah pemasukan HMSI.</li>
                </ol>
                <p class="font-bold">Bentuk Kegiatan</p>
                <p>Melakukan penjualan baik secara online (via Instagram dan WhatsApp) maupun secara offline.</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Seminar Kewirausahaan
            </div>
            <div class="collapse-content"> 
                <p class="font-bold mt-2">Tujuan</p>
                <p>Memperkenalkan kewirausahaan kepada mahasiswa sistem informasi melalui acara seminar</p>
                <p class="font-bold">Bentuk Kegiatan</p>
                <p>Mengadakan seminar dengan mengangkat tema yang berhubungan dengan kegiatan kewirausahaan.</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                ID Card
            </div>
            <div class="collapse-content"> 
                <p class="font-bold mt-2">Tujuan</p>
                <p>Sebagai tanda pengenal pengurus HMSI </p>
                <p class="font-bold">Bentuk Kegiatan</p>
                <p>Menyediakan ID Card untuk kepengurusan HMSI 2022</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Baju Kerja
            </div>
            <div class="collapse-content"> 
                <p class="font-bold mt-2">Tujuan</p>
                <p>Sebagai baju formal HMSI dan tanda pengenal mahasiswa Sistem Informasi.</p>
                <p class="font-bold">Bentuk Kegiatan</p>
                <p>Menyediakan baju kerja HMSI untuk anggota HMSI 2021.</p>
            </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
            <input type="checkbox" />
            <div class="collapse-title text-lg font-medium">
                Merchandise
            </div>
            <div class="collapse-content"> 
                <p class="font-bold mt-2">Tujuan</p>
                <p>Menambah pemasukan HMSI.</p>
                <p class="font-bold">Bentuk Kegiatan</p>
                <p>Membuat merchandise untuk mahasiswa sistem informasi.</p>
            </div>
            </div>
        </center>
        </section>
    </main>

@endsection