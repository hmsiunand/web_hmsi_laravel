@extends('kelola-blog.template')

@section('title', 'Kotak Pesan')

<!-- tombol yang aktif -->
@section('tambah-blog-aktif', '')
@section('kelola-blog-aktif', '')
@section('kotak-pesan-aktif', 'bg-[#570df8]')

@section('content')
        
    @if($saran->isEmpty())
        <h3 class="text-white text-2xl my-36 mx-auto">Belum ada saran~~~</h3>
    @else
        <div class="overflow-x-auto mb-6 mx-2">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($saran as $s)
                    <tr class="hover">
                        <th>{{$loop->iteration}}</th>
                        <td class="whitespace-pre-wrap">{{$s->nama}}</td>
                        <td class="whitespace-pre-wrap">{{$s->created_at}}</td>
                        <td class="whitespace-pre-wrap">{{$s->saran}}</td>
                        <td >
                            <label for="my-modal-{{$s->id}}" class="modal-button cursor-pointer">
                            <svg width="31" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                            </label>

                            <!-- Put this part before </body> tag -->
                            <input type="checkbox" id="my-modal-{{$s->id}}" class="modal-toggle" />
                            <div class="modal modal-bottom  sm:modal-middle">
                            <div class="modal-box">
                                <h3 class="font-bold text-lg">Hapus Pesan</h3>
                                <p class="py-4">Anda yakin ingin menghapus pesan ini?</p>
                                <p class="font-light">*Fitur ini disediakan untuk mengatasi kotak pesan <br> berisi banyak spam, jadi gunakan sebaik mungkin</p>
                                <div class="modal-action">
                                    <label for="my-modal-{{$s->id}}" class="btn">Tidak</label>
                                    <form action="/hapus-pesan/{{$s->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn">Ya</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

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