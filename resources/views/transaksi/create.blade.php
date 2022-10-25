@extends("layouts.app")

@section("content")
<h2 class="text-center mb-3">Tambah data produk</h2>

<form action="/transaksi" method="post">
    @csrf
    <div class="mb-3">
        <label for="customer_id" class="form-label">Nama customer :</label>

        <select class="form-select" aria-label="Default select example" id="customer_id" name="customer_id">
            <option hidden>Pilih nama customer</option>
            @foreach ($customer as $c)
            <option value="{{ $c->id }}">{{ $c->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="produk_id" class="form-label">Nama produk :</label>

        <select class="form-select" aria-label="Default select example" id="produk_id" name="produk_id">
            <option hidden>Pilih nama customer</option>
            @foreach ($produk as $p)
            <option value="{{ $p->id }}">{{ $p->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah produk : </label>

        <input type="number" class="form-control" id="jumlah" placeholder="Masukkan harga produk" name="jumlah" min="1">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success px-3">Kirim</button>
    </div>
</form>
@endsection
