@extends('layout.app')

@section('title')
    Pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Data Pembeli</h5>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('pembeli.update', $s->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nama">Nama Supplier</label>
                        <input type="text" name="nama" id="nama" value="{{ $p->nama }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" id="telepon" value="{{ $p->telepon }}" class="form-control @error('telepon') is-invalid @enderror">
                        @error('telepon')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    <div class="col-lg-8">
                        <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{ $p->alamat }}" class="form-control @error('alamat') is-invalid @enderror">
                        @error('alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>  
                </div>
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>    
            </div>    
        </form>
    </div>
</div>
@endsection