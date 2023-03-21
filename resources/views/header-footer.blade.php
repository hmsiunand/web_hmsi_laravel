<!DOCTYPE html>
<html lang="id" class="scroll-smooth bg-[#23153c]">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon-96x96.png') }}" type="image/x-icon">

    <title>@yield('title') | HMSI Universitas Andalas</title>
</head>
<body>

    <div class="drawer drawer-end fixed z-20">
      <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
      <div class="drawer-content">

        <div class="navbar text-neutral-content sticky top-0 z-10 bg-[#23153c]">
          <div class="flex-1 px-2 lg:flex-none">
            @auth
            <a href="/kelola-blog">
            @else
            <a href="/">
            @endauth
              <img src="{{ asset('img/logo-hmsi.png') }}" class="w-24 sm:w-28 sm:mx-9 mx-0" />
            </a>
          </div> 
          <div class="flex justify-end flex-1 px-2">
            <div class="flex items-stretch">

              @auth
                <a role="button" class="btn gap-2" href="/kelola-blog">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20" class="fill-current mr-1"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                  Kembali
                </a>
              @else
                <ul class="hmsi menu menu-horizontal p-0 hidden sm:flex">
                  <li tabindex="0">
                    <a>
                      Tentang
                      <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
                    </a>
                    <ul class="p-2 bg-base-100 text-black">
                      <li><a href="/tentang-hmsi">Tentang HMSI</a></li>
                      <li><a href="/lambang">Arti Lambang</a></li>
                      <li><a href="/alumni">Alumni</a></li>
                      <li><a href="/visit">Berkunjung ke HMSI</a></li>
                    </ul>
                  </li>
                  <li tabindex="0">
                    <a>
                      Divisi
                      <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
                    </a>
                    <ul class="p-2 bg-base-100 text-black">
                      <li><a href="/inti">Inti</a></li>
                      <li><a href="/div-psdm">PSDM</a></li>
                      <li><a href="/div-internal">Internal</a></li>
                      <li><a href="/div-eksternal">Eksternal</a></li>
                      <li><a href="/div-bikraf">Bisnis Kreatif</a></li>
                      <li><a href="/div-psi">PSI</a></li>
                      <li><a href="/div-rtk">RTK</a></li>
                      <li><a href="/div-medkraf">Media Kreatif</a></li>
                    </ul>
                  </li>
                  <li><a href="/blog">Blog</a></li>
                </ul>
              @endauth


              <label for="my-drawer-4" class="drawer-button btn btn-circle swap swap-rotate inline-grid sm:hidden">
    
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox"/>
                
                <!-- hamburger icon -->
                <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/></svg>
                
                <!-- close icon -->
                <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/></svg>
                
              </label>
            </div>
          </div>
        </div>

        <!-- Konten disini -->
        @yield('content')
        <!-- konten sampai sini -->

        <footer class="footer footer-center p-10 text-neutral-content overflow-visible">
          <div>
            <div class="grid grid-flow-col gap-4">
              <a href="https://twitter.com/HMSI_UNAND" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
              <a href="https://www.instagram.com/hmsi_unand/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" viewBox="0 0 448 512" class="fill-current"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
              <a href="https://www.facebook.com/hmsiunand" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
              <a href="https://www.youtube.com/channel/UCccCJ7z5Cu9Nl6xDb0NiPaw" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
            </div>
          </div>
          <div class="text-lg">
            <!-- <img src="./img/logo-hmsi-putih.png" class="w-14" /> -->
            <p class="font-bold">HMSI - Universitas Andalas</p> 
            <p>Copyright © <?php echo date("Y"); ?> - All right reserved</p>
          </div>
          <br>
        </footer>

      </div> 
      <div class="drawer-side">
        <label for="my-drawer-4" class="drawer-overlay"></label>
        <ul class="menu p-4 overflow-y-auto w-60 bg-base-100 text-base-content">
          <p>Menu</p>
          <div class="collapse collapse-plus overflow-visible">
            <input type="checkbox" />
            <div class="collapse-title font-medium">
              <a>Tentang</a>
            </div>
            <div class="collapse-content"> 
              <ul>
                <li><a href="/tentang-hmsi">Tentang HMSI</a></li>
                <li><a href="/lambang">Arti Lambang</a></li>
                <li><a href="/alumni">Alumni</a></li>
                <li><a href="/visit">Berkunjung ke HMSI</a></li>
              </ul>
            </div>
          </div>
          <div class="collapse collapse-plus overflow-visible">
            <input type="checkbox" />
            <div class="collapse-title font-medium">
              <a>Divisi</a>
            </div>
            <div class="collapse-content"> 
              <ul>
                <li><a href="/inti">Inti</a></li>
                <li><a href="/div-psdm">PSDM</a></li>
                <li><a href="/div-internal">Internal</a></li>
                <li><a href="/div-eksternal">Eksternal</a></li>
                <li><a href="/div-bikraf">Bisnis Kreatif</a></li>
                <li><a href="/div-psi">PSI</a></li>
                <li><a href="/div-rtk">RTK</a></li>
                <li><a href="/div-medkraf">Media Kreatif</a></li>
              </ul>
            </div>
          </div>
          <li><a href="/blog" class="font-medium">Blog</a></li>
        </ul>
      </div>
    </div>

</body>
</html>