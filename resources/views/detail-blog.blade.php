@extends('header-footer')

@section('title') 
    {{$blog->judul}} | Blog
@endsection

@section('content')
        
    <main>
        <div class="text-justify py-8 sm:py-12 px-8 sm:px-16 md:px-32 lg:px-40 2xl:px-80 text-neutral-content">
        <p class="blog-normal">{{$blog->created_at}}</p>
        <h2 class="text-lg md:text-xl lg:text-3xl blog-tebal">{{$blog->judul}}</h2>
        </div>

        <section class="px-5 sm:px-12 md:px-28 lg:px-48 2xl:px-96 flex flex-col justify-center">
            
        @if($blog->gambar)
            <img src="{{ asset('storage/'.$blog->gambar) }}" alt="{{$blog->judul}}" class="max-h-min">
        @else
            <img src="{{ asset('img/fti.jpg') }}" alt="{{$blog->judul}}" class="max-h-min">
        @endif
        <article class="my-8 text-neutral-content md:text-xl">
            {!! $blog->artikel !!}
        </article>
        </section>
    </main>

@endsection