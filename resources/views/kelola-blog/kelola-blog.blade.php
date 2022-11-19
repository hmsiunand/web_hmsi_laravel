@extends('kelola-blog.template')

@section('title', 'Kelola Blog')

<!-- tombol yang aktif -->
@section('tambah-blog-aktif', '')
@section('kelola-blog-aktif', 'bg-[#570df8]')
@section('kotak-pesan-aktif', '')

@section('content')
        
    @if($blog->isEmpty())
        <h3 class="text-white text-2xl my-36 mx-auto">Belum ada postingan~~~</h3>
    @else
        @foreach($blog as $b)
        <div class="m-4 card rounded-xl lg:w-96 max-w-xs max-h-fit bg-base-100 shadow-xl text-justify">
        <figure>    
        @if($b->gambar)
            <img src="{{ asset('storage/'.$b->gambar) }}" alt="$b->judul" class="max-h-min">
        @else
            <img src="{{ asset('img/fti.jpg') }}" alt="$b->judul" class="max-h-min">
        @endif
        </figure>
            <div class="card-body p-5">
                <a href="/blog/{{$b->slug}}" class="card-title justify-start hover:underline" title="klik untuk melihat lebih lanjut">{{$b->judul}}</a>
                <p class="whitespace-pre-wrap">Diposting  @ {{$b->created_at}} <br>Diperbarui @ {{$b->updated_at}} </p>
                
                <div class="py-1 flex justify-end">
                    <a href="/edit-blog/{{$b->slug}}" class="tooltip" data-tip="edit blog">
                        <img src="{{ asset('img/pen-to-square-solid.svg') }}" alt="edit" class="mx-3">
                    </a>
                    <!-- The button to open modal -->
                    <label for="my-modal-{{$b->id}}" class="modal-button tooltip cursor-pointer" data-tip="hapus blog">
                        <img src="{{ asset('img/trash-can-solid.svg') }}" alt="hapus" class="mx-3">
                    </label><br>

                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-{{$b->id}}" class="modal-toggle" />
                    <div class="modal modal-bottom sm:modal-middle">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Hapus Blog</h3>
                        <p class="py-4">Anda yakin ingin menghapus blog ini?</p>
                        <p class="font-light">*blog tidak bisa dikembalikan jika sudah dihapus</p>
                        <div class="modal-action">
                            <label for="my-modal-{{$b->id}}" class="btn">Tidak</label>
                            <form action="/hapus-blog/{{$b->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn">Ya</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @if(session()->has('message'))
        <div class="toast mr-4" id="toast">
            <div class="alert alert-success">
                <div>
                    <span>{{ session()->get('message') }}</span>
                    <!-- <button onclick="myFunction()">X</button> -->
                </div>
            </div>
        </div>
        @endif

    @endif

@endsection

@section('script-tiny')
    <script>
      function myFunction() {
        var x = document.getElementById("toast");
          x.style.class = "hidden";
      }
    </script>
@endsection