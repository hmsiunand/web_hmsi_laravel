@extends('kelola-blog.template')

@section('title', 'Kelola Blog')

@section('content')
        
    <div class="m-4 card rounded-xl lg:w-96 max-w-xs max-h-96 bg-base-100 shadow-xl text-justify">
        <figure><img src="./img/fti.jpg" alt="gambar blog" class="max-h-min"></figure>
        <div class="card-body p-5">
            <a href="/detail-blog" class="card-title font-bold justify-center hover:underline" title="klik untuk melihat lebih lanjut">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
            <p class="">Agu 12, 2022</p>
            <div class="py-1 flex justify-end">
                <a href="/edit-blog" class="tooltip" data-tip="edit blog">
                    <img src="./img/pen-to-square-solid.svg" alt="edit" class="mx-3">
                </a>
                <!-- The button to open modal -->
                <label for="my-modal-6" class="modal-button tooltip cursor-pointer" data-tip="hapus blog">
                    <img src="./img/trash-can-solid.svg" alt="hapus" class="mx-3">
                </label>

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
    <div class="m-4 card rounded-xl lg:w-96 max-w-xs max-h-96 bg-base-100 shadow-xl text-justify">
        <figure><img src="./img/fti.jpg" alt="gambar blog" class="max-h-min"></figure>
        <div class="card-body p-5">
            <a href="/detail-blog" class="card-title font-bold justify-center hover:underline" title="klik untuk melihat lebih lanjut">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
            <p class="">Agu 12, 2022</p>
            <div class="py-1 flex justify-end">
                <a href="/edit-blog" class="tooltip" data-tip="edit blog">
                    <img src="./img/pen-to-square-solid.svg" alt="edit" class="mx-3">
                </a>
                <!-- The button to open modal -->
                <label for="my-modal-6" class="modal-button tooltip cursor-pointer" data-tip="hapus blog">
                    <img src="./img/trash-can-solid.svg" alt="hapus" class="mx-3">
                </label>

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

@endsection