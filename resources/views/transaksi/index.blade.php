@extends("layouts.app")

@section("content")
<h2 class="text-center mb-3">List data transaksi</h2>
<a href="/transaksi/create" class="btn btn-success mb-3">Tambah transaksi</a>

<table class="table">
    <thead>
        <tr class="bg-secondary">
            <th scope="col" class="text-center">No.</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Jumlah Produk</th>
            <th scope="col">Total Harga</th>
        </tr>
    </thead>
    <tbody>
        @if (count($transaksi) > 0)
        @foreach ($transaksi as $t)
        <tr>
            <td class="text-center">{{ $loop->iteration }}.</td>
            <td>{{ $t->tanggal }}</td>
            <td>{{ $t->customer->nama }}</td>
            <td>{{ $t->produk->nama }}</td>
            <td>{{ $t->jumlah }}</td>
            <td>{{ $t->jumlah * $t->produk->harga }}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection
