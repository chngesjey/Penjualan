@extends('layout.app')

@section('title')
     Pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Informasi Pembeli</h5>


        </div>
    </div>

    <div class="card-body">
        <form action="{{ route('pembeli.store') }}" method="POST">
            @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control @error('nama')is-invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div> 
                        @enderror
                    </div>
                </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="harga">Telepon</label>
                        <input type="text" name="telepon" id="telepon" value="{{ old('telepon') }}" class="form-control @error('telepon')is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-2">
                        <label for="stok">Alamat</label>
                        <input type="number" name="alamat" id="nama" value="{{ old('alamat') }}" class="form-control @error ('alamat') is-invalid @enderror">
                        @error ('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-lg-5">
                        <div class="form-group">
                        <label for="barang" class="form-label">Barang</label>
                        <select name="barang" id="barang" class="form-control">
                            @foreach ($barang as $b)
                                <option value="{{ $s->id }}">{{ $s->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            @foreach ($kategori as $item)
                                <option value="{{ $item->id }}">{{ $item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
                
            <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>   
            </div>    
        </form>
    </div>
</div>
@endsection