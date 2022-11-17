@extends('layout.main')

@section('content')
    <div class="container">
        <div class="card shadow mb-4" style="margin-top: -55%">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Item</h6>
                <hr>


                <form action="{{ route('update', $elektroniks->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_type">Jenis Barang</label>
                        <select class="custom-selesct d-block w-100" id="nama_type" name="elektronik_type_id">
                            @foreach ($formelektronik as $formelektroniks)
                                <option value="{{ $formelektroniks->id }}">{{ $formelektroniks->nama_type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input class="custom-select d-block w-100" id="nama_barang" name="nama_barang"
                            value="{{ $elektroniks->nama_barang }}">

                    </div>
                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="qty" name="qty"
                            value="{{ $elektroniks->qty }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price"
                            value="{{ $elektroniks->price }}">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
