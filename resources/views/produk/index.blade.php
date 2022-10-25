@extends("layouts.app")

@section("content")
<h2 class="text-center mb-3">List data produk</h2>
<a href="/produk/create" class="btn btn-success mb-3">Tambah produk</a>

<table class="table">
    <thead>
        <tr class="bg-secondary">
            <th scope="col" class="text-center">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col" class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk as $p)
        <tr>
            <td class="text-center">{{ $loop->iteration }}.</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->harga }}</td>
            <td>{{ $p->jumlah }}</td>
            <td class="text-center">
                <a href="/produk/{{ $p->id }}/edit" class="btn btn-warning">Edit</a>
                <a href="/produk/{{ $p->id }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
