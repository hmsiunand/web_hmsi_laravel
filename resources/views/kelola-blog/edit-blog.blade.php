@extends('kelola-blog.template')

@section('title', 'Edit Blog')

@section('script-token')
    <script src="{{env('TOKEN_TINY')}}" referrerpolicy="origin"></script>
@endsection

<!-- tombol yang aktif -->
@section('kelola-blog-aktif', 'bg-[#570df8]')

@section('content')
        
    <div class="form-control w-full max-w-6xl px-4 justify-center">
        <form action="/edit-blog/{{$blog->slug}}" method="post">
        @method('put')
        @csrf
            <label class="label">
                <span class="text-xl font-bold text-neutral-content">Judul</span>
            </label>
            <input type="text" name="judul" value="{{ old('judul' ,$blog->judul) }}" placeholder="judul blog yang di edit" autofocus required class="input input-bordered w-full mb-4 @error('judul') input-error @enderror" />
            
            @error('judul')
                <p class="text-white text-xs">{{ $message }}</p>
            @enderror
            
            <label class="label">
                <span class="text-xl font-bold text-neutral-content mt-4" title="jangan masukin file selain gambar yaa😃">Gambar (png, jpg, jpeg)</span>
            </label>
            <input type="file" name="gambar" title="jangan masukin file selain gambar yaa😃" class="block w-full text-sm text-neutral-content mb-4 max-w-xs
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
            "/>

            @error('gambar')
                <p class="text-white text-xs">{{ $message }}</p>
            @enderror

            <label class="label">
                <span class="text-xl font-bold text-neutral-content mt-4">Artikel</span>
            </label> 
            <textarea required name="artikel">{{ old('judul' ,$blog->artikel) }}</textarea>

            @error('artikel')
                <p class="text-white text-xs">{{ $message }}</p>
            @enderror
            <br>
            <button type="submit" class="btn btn-primary w-full sm:btn-wide mt-5 mb-8">Edit</button>
        </form>
    </div>

@endsection

@section('script-tiny')
<script>
        tinymce.init({
            selector: 'textarea',
            placeholder: "edit artikel disini",
            plugins: [ 'advlist', 'autolink', 'lists', 'link', 'charmap', 'anchor', 'searchreplace', 'code', 'insertdatetime', 'help', 'wordcount'],
            menubar: 'edit view insert format tools help',
            toolbar: 'undo redo | blocks | ' + 'bold italic backcolor | alignleft aligncenter ' + 'alignright alignjustify | bullist numlist outdent indent | ' + 'removeformat | help',
        });
    </script>
@endsection