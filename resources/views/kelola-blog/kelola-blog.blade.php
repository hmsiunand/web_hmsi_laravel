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
            <figure><img src="{{ asset('img/fti.jpg') }}" alt="{{$b->gambar}}" class="max-h-min"></figure>
            <div class="card-body p-5">
                <a href="/blog/{{$b->slug}}" class="card-title justify-start hover:underline" title="klik untuk melihat lebih lanjut">{{$b->judul}}</a>
                <p class="">{{$b->created_at}}</p>
                <div class="py-1 flex justify-end">
                    <a href="/edit-blog/{{$b->slug}}" class="tooltip" data-tip="edit blog">
                        <img src="{{ asset('img/pen-to-square-solid.svg') }}" alt="edit" class="mx-3">
                    </a>
                    <!-- The button to open modal -->
                    <label for="my-modal-6" class="modal-button tooltip cursor-pointer" data-tip="hapus blog">
                        <img src="{{ asset('img/trash-can-solid.svg') }}" alt="hapus" class="mx-3">
                    </label><br>

                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-6" class="modal-toggle" />
                    <div class="modal modal-bottom sm:modal-middle">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Hapus Blog</h3>
                        <p class="py-4">Anda yakin ingin menghapus blog?</p>
                        <div class="modal-action">
                            <label for="my-modal-6" class="btn">Tidak</label>
                            <form action="" method="post">
                                <button type="button" class="btn">Ya</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif

@endsection