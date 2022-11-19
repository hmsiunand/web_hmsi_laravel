@extends('kelola-blog.template')

@section('title', 'Tambah Blog')

@section('script-token')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
@endsection

@section('tambah-blog-aktif', 'bg-[#570df8]')

@section('content')
        
    <div class="form-control w-full max-w-6xl px-4 justify-center">
        <form action="/tambah-blog" method="post" enctype="multipart/form-data">
            @csrf
            <label class="label">
                <span class="text-xl font-bold text-neutral-content">Judul</span>
            </label>
            <input type="text" name="judul" placeholder="Masukkan judul blog" value="{{ old('judul') }}" class="input input-bordered w-full @error('judul') input-error @enderror" required/>

            @error('judul')
                <p class="text-white text-xs">{{ $message }}</p>
            @enderror

            <label class="label" for="gambar">
                <span  class="text-xl font-bold text-neutral-content mt-4" title="maksimal 1024kb, jangan masukin file selain gambar yaa😃">Gambar (.png .jpg .jpeg)</span>
            </label>
            
            <input name="gambar" type="file" class="file-input file-input-sm w-full max-w-xs @error('gambar') file-input-error @enderror" title="maksimal 1024kb, jangan masukin file selain gambar yaa😃" id="gambar" required onchange="previewImage()"/>
            
            @error('gambar')
            <p class="text-white text-xs">{{ $message }}</p>
            @enderror

            <img class="img-preview mt-4 max-h-96" src="" alt="">
            
            <label class="label">
                <span class="text-xl font-bold text-neutral-content mt-4">Artikel</span>
            </label> 
            <textarea name="artikel">{{ old('artikel') }}</textarea>

            @error('artikel')
                <p class="text-white text-xs">{{ $message }}</p>
            @enderror
            <br>

            <!-- The button to open modal -->
            <label for="modal-konfirmasi" class="btn btn-primary w-full sm:btn-wide mt-5 mb-8">Post</label>

            <!-- Put this part before </body> tag -->
            <input type="checkbox" id="modal-konfirmasi" class="modal-toggle" />
            <div class="modal modal-bottom sm:modal-middle">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Tambah Blog</h3>
                <p class="py-4">Anda yakin ingin menambahkan blog ini?</p>
                <div class="modal-action">
                    <label for="modal-konfirmasi" class="btn">Tidak</label>
                    <button type="submit" class="btn">Ya</button>
                </div>
            </div>
            </div>

        </form>
    </div>

@endsection

@section('script-tiny')
    <script>
        tinymce.init({
            selector: 'textarea',
            placeholder: "tulis artikel disini",
            plugins: [ 'advlist', 'autolink', 'lists', 'link', 'charmap', 'anchor', 'searchreplace', 'code', 'insertdatetime', 'help', 'wordcount'],
            menubar: 'edit view insert format tools help',
            toolbar: 'undo redo | blocks | ' + 'bold italic backcolor | alignleft aligncenter ' + 'alignright alignjustify | bullist numlist outdent indent | ' + 'removeformat | help',
        });

        function previewImage() {
            const gambar = document.querySelector('#gambar');
            const gambarPreview = document.querySelector('.img-preview');

            gambarPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                gambarPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection
