@extends('layout.app')

@section('title')
    Pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Data Pembeli</h5>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('pembeli.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nama">Nama Pembeli</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" id="telepon" value="{{ old('telepon') }}" class="form-control @error('telepon') is-invalid @enderror">
                        @error('telepon')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>                

                    <div class="col-lg-6">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" class="form-control @error('alamat') is-invalid @enderror">
                        @error('alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>    
            </div>    
        </form>
    </div>
</div>
@endsection