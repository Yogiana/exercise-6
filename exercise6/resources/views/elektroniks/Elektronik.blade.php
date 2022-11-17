@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container">


        <!-- DataTales Example -->
        <div class="card shadow mb-4" style="margin-top: -55%">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="/create" type="button" class="btn btn-primary"> + Tambah Data</a>
                    <hr>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tipe Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>Action</th>
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
                                    <td>{{ $elektronik->qty * $elektronik->price }}</td>
                                    <td>
                                        <a href="{{ route('edit', $elektronik->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('destroy', $elektronik->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
