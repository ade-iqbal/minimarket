@extends("layouts.app")

@section("content")
<h2 class="text-center mb-3">List data customer</h2>

<table class="table">
    <thead>
        <tr class="bg-secondary">
            <th scope="col" class="text-center">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Hp</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $c)
        <tr>
            <td class="text-center">{{ $loop->iteration }}.</td>
            <td>{{ $c->nama }}</td>
            <td>{{ $c->alamat }}</td>
            <td>{{ $c->no_hp }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
