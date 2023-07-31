@extends('header-footer')

@section('title', 'ISCE')

@section('content')
        
  <main>
    <div class="hero min-h-screen text-neutral-content">
      <div class="hero-content text-center">
        <div class="max-w-3xl">
          <div class="text-center py-6">
            <p class="text-3xl sm:text-5xl py-1 text-white blog-tebal">ISCE 2023</p>
          </div>
          <center><hr class="w-7/12 xl:w-5/12 2xl:w-1/4 my-2"></center>
          <a href="https://linktr.ee/isceunand" target="_blank">
            <img src="{{ asset('img/isce2023/ui-ux.png') }}" alt="isce ui ux competition" class="mt-8"/>
          </a>
          <a href="http://unand.net/RegistrasiWorkshop" target="_blank" class="mx-auto">
            <img src="{{ asset('img/isce2023/workshop-bmc.png') }}" alt="isce workshop bmc" class="mt-8"/>
          </a>
          <a href="http://unand.net/RegistrasiSeminar" target="_blank">
            <img src="{{ asset('img/isce2023/seminar-ui-ux.png') }}" alt="isce seminar ui ux" class="mt-8"/>
          </a>
        </div>
      </div>
    </div>
  </main>

@endsection
