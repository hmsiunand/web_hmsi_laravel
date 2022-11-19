@extends('header-footer')

@section('title', 'Blog')

@section('content')
        
    <main>
        <div class="text-center py-6" >
        <p class="text-3xl sm:text-6xl py-3 text-white blog-tebal">BLOG HMSI</p>
        </div>

        <center><hr class="w-7/12 xl:w-5/12 2xl:w-1/4"></center>

        <div class="flex flex-wrap justify-center py-10 px-3">
        
            @if($blog->isEmpty())
                <h3 class="text-white text-2xl my-36">Belum ada postingan~~~</h3>
            @else
                @foreach($blog as $b)
                <div class="m-4 card rounded-xl lg:w-96 max-w-sm max-h-min bg-base-100 shadow-xl text-justify">
                    <figure>
                        @if($b->gambar)
                            <img src="{{ asset('storage/'.$b->gambar) }}" alt="$b->judul" class="max-h-min">
                        @else
                            <img src="{{ asset('img/fti.jpg') }}" alt="$b->judul" class="max-h-min">
                        @endif
                    </figure>
                    <div class="card-body p-5">
                        <a href="/blog/{{$b->slug}}" class="card-title font-bold justify-start hover:underline" title="klik untuk melihat lebih lanjut">{{$b->judul}}</a>
                        <p class="">{{$b->created_at->diffForHumans()}}</p>
                        <p class="py-1">{{$b->ringkasan}}</p>
                    </div>
                </div>
                @endforeach
            @endif
            
        </div>
            
            {{$blog->links()}}
            
    </main>

@endsection