@extends('header-footer')

@section('meta-index')
  <meta name="description" content="HMSI adalah Himpunan Mahasiswa Sistem Informasi yang berada pada jurusan Sistem Informasi yang berfungsi sebagai wadah untuk menyalurkan aspirasi, media komunikasi dan informasi, serta pembelajaran organisasi untuk pengembangan diri bagi anggotanya.">
  <meta name="keywords" content="hmsi unand, hmsi, unand, sistem informasi">

  <script src="https://unpkg.com/ityped@0.0.5"></script>
@endsection

@section('title', 'Beranda')

@section('content')
  <main>
    <!-- untuk layar laptop -->
    <div class="px-6 py-32 sm:px-16 sm:py-56 lg:pl-28 xl:pl-48 2xl:pl-72 hidden sm:block" id="element">
        <span id="ityped" class="ityped hmsi text-4xl sm:text-6xl text-white"></span>
    </div>
    
    <!-- untuk layar HP -->
    <div class="hero min-h-screen sm:hidden" style="background-image: url(img/pengurus/smwahh.jpg);">
      <div class="hero-overlay bg-opacity-80"></div>
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
          <img src="{{asset('img/logo-hmsi.png')}}" alt="logo-hmsi" class="h-36 mx-auto" loading="lazy">
          <h1 class="mb-5 text-4xl font-bold">Selamat Datang!</h1>
          <p class="mb-48">di situs web resmi<br>Himpunan Mahasiswa Sistem Informasi<br>Universitas Andalas</p>
        </div>
      </div>
    </div>


    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row">
          <img src="{{asset('img/logo-hmsi.png')}}" class="max-w-full sm:max-w-xl hidden sm:block" loading="lazy"/>
          <div class=" text-neutral-content px-3 max-w-full">
            <h1 class="text-3xl text-center lg:text-left sm:text-5xl font-bold">Tentang Kami</h1>
            <p class="py-3 text-justify indent-4">HMSI adalah Himpunan Mahasiswa Sistem Informasi yang berada pada jurusan Sistem Informasi yang berfungsi sebagai wadah untuk menyalurkan aspirasi, media komunikasi dan informasi, serta pembelajaran organisasi untuk pengembangan diri bagi anggotanya.</p>
            <section class="py-3 text-center lg:text-left">
              <p class="text-base font-bold">Visi :</p>
              <p class="text-base text-justify indent-4">
                Menjadikan HMSI sebagai himpunan yang berkualitas dengan memegang teguh prinsip kekeluargaan sehingga terciptanya SDM yang aktif, kreatif, produktif ,dan mampu bersaing seiring dengan perkembangan zaman serta mengedepankan akhlak dan norma-norma yang berlaku.
              </p>
            </section>
            <section class="py-3 text-center lg:text-left">
              <p class="text-base font-bold">Misi :</p>
              <ol class="list-decimal list-inside">
                <li>Menjadikan HMSI sebagai himpunan yang mengutamakan kekeluargaan antar sesama mahasiswa sistem informasi</li>
                <li>Menciptakan kegiatan yang inovatif, kolaboratif, dan kreatif demi terciptanya SDM yang aktif dan berkualitas</li>
                <li>Mewadahi...........</li>
              </ol>
              <a href="/tentang" class="btn mt-5">Selengkapnya</a>
            </section>
          </div>
        </div>
    </div>

    <section class="text-center">
      <div class="pt-6 sm:pt-0 text-neutral-content">
        <h1 class="text-3xl sm:text-5xl font-bold">Divisi</h1>
        <p class="py-6">Divisi-divisi yang ada di HMSI Universitas Andalas</p>
      </div>
      
      <a href="/divisi/inti">
        <div class="box-divisi">
          <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current h-28 pt-4"><path d="M211.2 96C211.2 131.3 182.5 160 147.2 160C111.9 160 83.2 131.3 83.2 96C83.2 60.65 111.9 32 147.2 32C182.5 32 211.2 60.65 211.2 96zM32 256C32 220.7 60.65 192 96 192H192C204.2 192 215.7 195.4 225.4 201.4C188.2 216.5 159.8 248.6 149.6 288H64C46.33 288 32 273.7 32 256V256zM415.9 200.6C425.3 195.1 436.3 192 448 192H544C579.3 192 608 220.7 608 256C608 273.7 593.7 288 576 288H493.6C483.2 247.9 453.1 215.4 415.9 200.6zM391.2 226.4C423.3 233.8 449.3 257.3 460.1 288C463.7 298 465.6 308.8 465.6 320C465.6 337.7 451.3 352 433.6 352H209.6C191.9 352 177.6 337.7 177.6 320C177.6 308.8 179.5 298 183.1 288C193.6 258.3 218.3 235.2 249.1 227.1C256.1 225.1 265.1 224 273.6 224H369.6C377 224 384.3 224.8 391.2 226.4zM563.2 96C563.2 131.3 534.5 160 499.2 160C463.9 160 435.2 131.3 435.2 96C435.2 60.65 463.9 32 499.2 32C534.5 32 563.2 60.65 563.2 96zM241.6 112C241.6 67.82 277.4 32 321.6 32C365.8 32 401.6 67.82 401.6 112C401.6 156.2 365.8 192 321.6 192C277.4 192 241.6 156.2 241.6 112zM608 416C625.7 416 640 430.3 640 448C640 465.7 625.7 480 608 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H608z"/></svg></figure>
          <div class="card-body">
            <h2 class="card-title justify-center">Presidium Inti</h2>
            <p>Terdiri dari Ketua umum, Wakil ketua umum, Sekretaris umum, serta Bendahara umum.</p>
          </div>
        </div> 
      </a>
      <br>
      <a href="/divisi/internal">
        <div class="box-divisi">
          <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current h-28 pt-4"><path d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z"/></svg></figure>
          <div class="card-body">
            <h2 class="card-title justify-center">Internal</h2>
            <p>Divisi yang bertugas untuk  membangun dan mempertahankan hubungan yang berlangsung di lingkungan HMSI, baik sesama pengurus, pengurus dengan anggota, dan sesama anggota, sekaligus juga mempererat dan menjaga kekeluargaan di HMSI.</p>
          </div>
        </div> 
      </a>
      <a href="/divisi/psdm">
        <div class="box-divisi">
          <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current h-28 pt-4"><path d="M353.8 54.1L330.2 6.3c-3.9-8.3-16.1-8.6-20.4 0L286.2 54.1l-52.3 7.5c-9.3 1.4-13.3 12.9-6.4 19.8l38 37-9 52.1c-1.4 9.3 8.2 16.5 16.8 12.2l46.9-24.8 46.6 24.4c8.6 4.3 18.3-2.9 16.8-12.2l-9-52.1 38-36.6c6.8-6.8 2.9-18.3-6.4-19.8l-52.3-7.5zM256 256c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V288c0-17.7-14.3-32-32-32H256zM32 320c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H160c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32H32zm416 96v64c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V416c0-17.7-14.3-32-32-32H480c-17.7 0-32 14.3-32 32z"/></svg></figure>
          <div class="card-body">
            <h2 class="card-title justify-center">Pengembangan Sumber daya Manusia</h2>
            <p>Divisi yang mengoptimalkan dan memberdayakan seluruh potensi yang dimiliki anggota HMSI melalui kegiatan yang berkaitan dengan nonakademik, serta meningkatkan peran aktif mahasiswa SI dalam berbagai kegiatan.</p>
          </div>
        </div> 
      </a>
      <a href="/divisi/eksternal">
        <div class="box-divisi">
          <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current h-28 pt-4"><path d="M334.6 217.4l-30 27.49C264 282.1 217.8 256.8 202.9 240.6C176 211.2 178.1 165.7 207.3 138.9L289.1 64H282.5C224.7 64 169.1 86.95 128.2 127.8L32 128.1c-17.6 0-32 14.39-32 31.98v159.8c0 17.59 14.4 32.04 31.1 32.04l114.3-.0604l90.5 81.82c27.5 22.37 67.75 18.11 90-9.255l18.12 15.25c15.88 12.1 39.38 10.5 52.38-5.369l31.38-38.6l5.374 4.498c13.75 11 33.88 9.002 45-4.748l9.576-11.83c11.08-13.7 8.979-33.75-4.701-44.86L334.6 217.4zM608 128.1l-96-.1257c-40.98-40.96-96.56-63.88-154.5-63.88L348.9 64c-8 0-15.62 3.197-21.62 8.568L229 162.3C228.9 162.5 228.8 162.7 228.8 162.7C212 178.5 212.4 203.3 226.6 218.7c9.625 10.5 35 21.62 56.13 2.75c0-.125 .25-.125 .375-.25l80-73.1c6.5-5.871 16.62-5.496 22.62 1s5.5 16.62-1 22.62l-26.12 23.87l145.6 118.1c12.12 9.992 19.5 23.49 22.12 37.98L608 351.7c17.6 0 32-14.38 32-31.98V160.1C640 142.4 625.7 128.1 608 128.1z"/></svg></figure>
          <div class="card-body">
            <h2 class="card-title justify-center">Eksternal</h2>
            <p>Bertanggung jawab dalam menjalin hubungan dan kerjasama dengan pihak eksternal melalui kegiatan-kegiatan yang berkaitan dengan akademik maupun non-akademik, serta meningkatkan peran aktif mahasiswa SI dalam berbagai kegiatan.</p>
          </div>
        </div> 
      </a>
      <br class="hidden lg:block">
      <a href="/divisi/medkraf">
        <div class="box-divisi">
          <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-28 pt-4"><path d="M480 32H128C110.3 32 96 46.33 96 64v336C96 408.8 88.84 416 80 416S64 408.8 64 400V96H32C14.33 96 0 110.3 0 128v288c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V64C512 46.33 497.7 32 480 32zM272 416h-96C167.2 416 160 408.8 160 400C160 391.2 167.2 384 176 384h96c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 320h-96C167.2 320 160 312.8 160 304C160 295.2 167.2 288 176 288h96C280.8 288 288 295.2 288 304C288 312.8 280.8 320 272 320zM432 416h-96c-8.836 0-16-7.164-16-16c0-8.838 7.164-16 16-16h96c8.836 0 16 7.162 16 16C448 408.8 440.8 416 432 416zM432 320h-96C327.2 320 320 312.8 320 304C320 295.2 327.2 288 336 288h96C440.8 288 448 295.2 448 304C448 312.8 440.8 320 432 320zM448 208C448 216.8 440.8 224 432 224h-256C167.2 224 160 216.8 160 208v-96C160 103.2 167.2 96 176 96h256C440.8 96 448 103.2 448 112V208z"/></svg></figure>
          <div class="card-body">
            <h2 class="card-title justify-center">Media Kreatif</h2>
            <p>Merupakan divisi yang bertugas untuk mengelola informasi dan mendokumentasikan kegiatan melalui berbagai media dengan kreatifitas sebagai sumber dayanya sehingga menciptakan solusi dalam ranah komunikasi visual.</p>
          </div>
        </div> 
      </a>
      <a href="/divisi/psi">
        <div class="box-divisi">
          <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-28 pt-4"><path d="M184 0C214.9 0 240 25.07 240 56V456C240 486.9 214.9 512 184 512C155.1 512 131.3 490.1 128.3 461.9C123.1 463.3 117.6 464 112 464C76.65 464 48 435.3 48 400C48 392.6 49.27 385.4 51.59 378.8C21.43 367.4 0 338.2 0 304C0 272.1 18.71 244.5 45.77 231.7C37.15 220.8 32 206.1 32 192C32 161.3 53.59 135.7 82.41 129.4C80.84 123.9 80 118 80 112C80 82.06 100.6 56.92 128.3 49.93C131.3 21.86 155.1 0 184 0zM383.7 49.93C411.4 56.92 432 82.06 432 112C432 118 431.2 123.9 429.6 129.4C458.4 135.7 480 161.3 480 192C480 206.1 474.9 220.8 466.2 231.7C493.3 244.5 512 272.1 512 304C512 338.2 490.6 367.4 460.4 378.8C462.7 385.4 464 392.6 464 400C464 435.3 435.3 464 400 464C394.4 464 388.9 463.3 383.7 461.9C380.7 490.1 356.9 512 328 512C297.1 512 272 486.9 272 456V56C272 25.07 297.1 0 328 0C356.9 0 380.7 21.86 383.7 49.93z"/></svg></figure>
          <div class="card-body">
            <h2 class="card-title justify-center">Pengembangan Skill dan Intelektual</h2>
            <p>Divisi yang mewadahi mahasiswa dalam mengembangkan skill dan cara berpikir sebagai mahasiswa IT, dan memperkenalkan perkembangan IT serta prospek kerja saat ini kepada anggota HMSI</p>
          </div>
        </div> 
      </a>
      <a href="/divisi/bikraf">
        <div class="box-divisi">
          <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-28 pt-4"><path d="M320 336c0 8.844-7.156 16-16 16h-96C199.2 352 192 344.8 192 336V288H0v144C0 457.6 22.41 480 48 480h416c25.59 0 48-22.41 48-48V288h-192V336zM464 96H384V48C384 22.41 361.6 0 336 0h-160C150.4 0 128 22.41 128 48V96H48C22.41 96 0 118.4 0 144V256h512V144C512 118.4 489.6 96 464 96zM336 96h-160V48h160V96z"/></svg></figure>
          <div class="card-body">
            <h2 class="card-title justify-center">Bisnis Kreatif</h2>
            <p>Divisi yang mengembangkan minat dan bakat mahasiswa dibidang kewirausahaan dengan mengedepankan segala aspek pertumbuhan perekonomian dalam bisnis kreatif melalui potensi ide dan sumber daya manusianya.</p>
          </div>
        </div> 
      </a>
      <br class="hidden lg:block">
      <a href="/divisi/rtk">
        <div class="box-divisi">
          <figure><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-current h-28 pt-4"><path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"/></svg></figure>
          <div class="card-body">
            <h2 class="card-title justify-center">Rumah Tangga dan Kesekretariatan</h2>
            <p>Berperan dalam pengelolaan, penataan, serta pemeliharaan sekretariat HMSI Unand. Juga sebagai tim administrasi yang bertugas mengelola pengarsipan, surat menyurat, serta urusan administrasi lainnya.</p>
          </div>
        </div>
      </a>

    </section>


    <section class="peta py-14">
      <iframe class="lg:w-4/5 w-10/12 mx-auto max-w-6xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3092131339718!2d100.45889341427304!3d-0.9153144355909941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7963e1ea631%3A0x452d09b61f76d6ec!2sFakultas+Teknologi+Informasi!5e0!3m2!1sid!2sid!4v1547957484219" width="100%" height="500" frameborder="1" style="border:0" allowfullscreen></iframe>
    </section>

    <section class="pesan text-center px-10" >
      <h1 class="text-neutral-content text-3xl sm:text-5xl font-bold mb-2" id="kotak-saran">Kotak Pesan</h1>
      <form action="/kirimsaran" method="post">
        @csrf
        <input type="text" name="nama" placeholder="Ketik nama anda" class="input input-bordered w-full max-w-4xl my-3 @error('nama') input-warning @enderror" value="{{ old('nama') }}" required/><br>
        @error('nama')
        <div class="toast mr-4">
          <div class="alert alert-warning">
            <div>
              <a href="#kotak-saran"><span>{{ $message }}</span></a>
            </div>
          </div>
        </div>
        @enderror

        <textarea name="saran" class="textarea textarea-bordered @error('saran') textarea-warning @enderror my-3 w-full max-w-4xl" placeholder="Ketik pesan anda" required>{{ old('saran') }}</textarea><br>
        @error('saran')
        <div class="toast mr-4">
          <div class="alert alert-warning">
            <div>
              <span><a href="#kotak-saran">{{ $message }}</a></span>
            </div>
          </div>
        </div>
        @enderror

        @if(session()->has('message'))
        <div class="toast mr-4" id="toast">
          <div class="alert alert-success">
            <div>
              <span>{{ session()->get('message') }}</span>
              <button onclick="myFunction()">X</button>
            </div>
          </div>
        </div>
        @endif

        <!-- <button class="btn text-neutral-content my-3 w-full max-w-xs" type="submit">Kirim</button> -->
        <label for="my-modal-6" class="btn modal-button text-neutral-content my-3 w-full max-w-xs">Kirim</label>
        <input type="checkbox" id="my-modal-6" class="modal-toggle" />
        <div class="modal modal-bottom sm:modal-middle">
          <div class="modal-box text-start">
            <h3 class="font-bold text-lg">Kirim?</h3>
            <p class="py-4">Yakin untuk mengirimkan pesan anda?</p>
            <div class="modal-action">
              <label for="my-modal-6" class="btn">Batal</label>
              <button type="submit" class="btn">Kirim</button>
            </div>
          </div>
        </div>
      </form>
    </section>
    
  </main>
@endsection

@section('js-index')
    <script src="{{ asset('js/teksWelcome.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
    <script>
        VANTA.GLOBE({
        el: "#element",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 400.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 0.30,
        color: 0xffb737
        })
    </script>
    <script>
      function myFunction() {
        var x = document.getElementById("toast");
          x.style.display = "none";
      }
    </script>
@endsection
