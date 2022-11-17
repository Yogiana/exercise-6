@extends('layout.main')

@section('content')
    <div class="container">
        <div class="card shadow mb-4" style="margin-top: -55%">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Item Type</h6>
                <hr>

                <form action="{{ route('update', $elektronik_types->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_type">Jenis Barang</label>
                        <input class="custom-select d-block w-100" id="nama_type" name="nama_type"
                            value="{{ $elektronik_types->nama_type }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <input class="custom-select d-block w-100" id="description" name="description"
                            value="{{ $elektronik_types->nama_barang }}">
                        <br>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
