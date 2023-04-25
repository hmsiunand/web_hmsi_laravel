@extends('header-footer')

@section('title', 'ISCE')

@section('content')
        
  <main>
    <div class="hero min-h-screen text-neutral-content">
      <div class="hero-content text-center">
        <div class="max-w-lg">
          <div class="text-center py-6">
            <p class="text-3xl sm:text-5xl py-1 text-white blog-tebal">ISCE 2023</p>
          </div>
          <center><hr class="w-7/12 xl:w-5/12 2xl:w-1/4 my-2"></center>
          <a href="https://www.instagram.com/isceunand/" target="_blank">
            <img src="{{ asset('img/poster-isce-coming-soon.jpg') }}" alt="isce coming soon" class="mt-8"/>
          </a>
        </div>
      </div>
    </div>
  </main>

@endsection
