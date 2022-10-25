@extends("layouts.app")

@section("content")
<h2 class="text-center mb-3">Edit data produk</h2>

<form action="/produk/{{ $produk->id }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama produk :</label>

        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama produk" name="nama"
            value="{{ $produk->nama }}">
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga produk :</label>

        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga produk" name="harga" min="1"
            value="{{ $produk->harga }}">
    </div>

    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah produk : </label>

        <input type="number" class="form-control" id="jumlah" placeholder="Masukkan harga produk" name="jumlah" min="1"
            value="{{ $produk->jumlah }}">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success px-3">Kirim</button>
    </div>
</form>
@endsection
