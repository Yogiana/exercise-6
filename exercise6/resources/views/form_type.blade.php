@extends('layout.main')

@section('content')
    <div class="container">
        <div class="card shadow mb-4" style="margin-top: -55%">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Jenis Barang</h6>
                <hr>

                <form action="{{ route('store_type') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_type">Jenis Barang</label>
                        <input type="text" class="form-control" id="nama_type" name="nama_type">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
