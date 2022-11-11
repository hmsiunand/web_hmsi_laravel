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
                </tr>
                </thead>
                <tbody>
                    @foreach($saran as $s)
                    <tr class="hover">
                        <th>{{$loop->iteration}}</th>
                        <td class="whitespace-pre-wrap">{{$s->nama}}</td>
                        <td class="whitespace-pre-wrap">{{$s->created_at}}</td>
                        <td class="whitespace-pre-wrap">{{$s->saran}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection