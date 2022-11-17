{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body> --}}
@extends('layout.main')

@section('content')
    <h1>Elektronik</h1>
    <a href="/create"> <button type="button" class="btn btn-primary"> + Tambah Data</button></a>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tipe Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($elektroniks as $no => $elektronik)
                <tr>
                    <th scope="row">{{ $no + 1 }}</th>

                    <td>{{ $elektronik->elektronik_type->nama_type }}</td>
                    <td>{{ $elektronik->nama_barang }}</td>
                    <td>{{ $elektronik->qty }}</td>
                    <td>{{ $elektronik->price }}</td>
                    <td>
                        <a href="{{ route('edit', $elektronik->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('destroy', $elektronik->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>

                        </form>
                    </td>
                    {{-- <td>
                        <form action="{{ route('delete', $elektronik->id) }}" method="post">
                            {{ method_field('delete') }}
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td> --}}

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>


</html> --}}
