@extends('kelola-blog.template')

@section('title', 'Kotak Pesan')

@section('content')
        
    <div class="overflow-x-auto mb-6">
        <table class="table w-full">
            <!-- head -->
            <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Pesan</th>
            </tr>
            </thead>
            <tbody>
            <tr class="hover">
                <th>1</th>
                <td class="whitespace-pre-wrap">Lorem</td>
                <td class="whitespace-pre-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quam assumenda harum rem dolorum cupiditate nesciunt ullam asperiores eius dicta totam odit quas, inventore laboriosam debitis consequatur similique atque illum labore ea explicabo.</td>
            </tr>
            <tr class="hover">
                <th>2</th>
                <td class="whitespace-pre-wrap">bambanh</td>
                <td class="whitespace-pre-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore consectetur porro iure obcaecati rem!</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection