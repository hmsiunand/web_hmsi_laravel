@extends('kelola-blog.template')

@section('title', 'Edit Blog')

@section('script-token')
    <script src="{{env('TOKEN_TINY')}}" referrerpolicy="origin"></script>
@endsection

<!-- tombol yang aktif -->
@section('tambah-blog-aktif', '')
@section('kelola-blog-aktif', 'bg-[#570df8]')
@section('kotak-pesan-aktif', '')

@section('content')
        
    <div class="form-control w-full max-w-5xl justify-center">
        <form action="" method="post">
            <label class="label">
                <span class="text-xl font-bold text-neutral-content">Judul</span>
            </label>
            <input type="text" value="{{$blog->judul}}" placeholder="judul blog yang di edit" autofocus required class="input input-bordered w-full mb-4" />
            <label class="label">
                <span class="text-xl font-bold text-neutral-content">Gambar (png, jpg, jpeg)</span>
            </label>
            <input type="file" required class="block w-full text-sm text-neutral-content mb-4 max-w-xs
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
            "/>
            <label class="label">
                <span class="text-xl font-bold text-neutral-content">Artikel</span>
            </label> 
            <textarea required>{{$blog->artikel}}</textarea>
            <button type="submit" class="btn btn-primary w-full sm:btn-wide mt-5 mb-8">Edit</button>
        </form>
    </div>

@endsection

@section('script-tiny')
    <script>
        tinymce.init({
          selector: 'textarea',
          placeholder: "tulis artikel disini"
        });
    </script>
@endsection