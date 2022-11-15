<!DOCTYPE html>
<html lang="id" class="bg-[#23153c] scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon-96x96.png') }}" type="image/x-icon">

    @yield('script-token')

    <title>@yield('title')</title>
</head>
<body>

    <div class="navbar fixed z-10">
        <div class="flex-1">
            <label for="my-drawer-2" class="btn btn-square drawer-button lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </label>
            <img src="{{ asset('img/logo-hmsi.png') }}" class="w-16 sm:w-24 sm:mx-9 mx-3" />
        </div>
        <p class="text-white mx-3">{{ auth()->user()->name }}</p>
        <div class="flex-none">
            <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full bg-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" class="m-auto mt-2"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
                </div>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow-xl bg-base-100 rounded-box w-52">
                <form action="/logout" method="post">
                @csrf
                    <li><button type="submit">Logout</button></li>
                </form>
            </ul>
            </div>
        </div>
    </div>

    <div class="drawer drawer-mobile">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-row flex-wrap justify-center lg:justify-start z-0 overflow-y-auto mt-16 pb-16">

        @yield('content')

        </div> 
        <div class="drawer-side mt-16">
          <label for="my-drawer-2" class="drawer-overlay"></label> 
          <ul class="menu p-4 overflow-y-auto w-64 bg-[#23153c] lg:bg-inherit text-neutral-content">
            <!-- Sidebar content here -->
            <li><a class="@yield('tambah-blog-aktif')" href="/tambah-blog">Tambah Blog</a></li>
            <li><a class="@yield('kelola-blog-aktif')" href="/kelola-blog">Kelola Blog</a></li>
            <li><a class="@yield('kotak-pesan-aktif')" href="/kotak-pesan">Kotak Pesan</a></li>
          </ul>
        </div>
    </div>
    
    @yield('script-tiny')

</body>
</html>