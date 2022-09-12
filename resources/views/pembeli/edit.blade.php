@extends('layout.app')

@section('title')
    Pembeli 
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Barang</h5>


        </div>
    </div>

    <div class="card-body">
        <form action="{{ route('pembeli.update', $p->id) }}" method="POST">
            @csrf
            @method ('PUT')
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" id="nama" value="{{ $b->nama }}" class="form-control @error('nama')is-invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div> 
                        @enderror
                    </div>
                </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" value="{{ $b->harga }}" class="form-control @error('harga')is-invalid @enderror">
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
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" id="nama" value="{{ $b->stok }}" class="form-control @error ('stok') is-invalid @enderror">
                        @error ('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-lg-5">
                        <div class="form-group">
                        <label for="supplier" class="form-label">Supplier</label>
                        <select name="supplier_id" id="supplier_id" class="form-control">
                            <option selected="">Pilih...</option>
                            <option value="{{ $b->supplier_id }}" selected>{{ $b->supplier->nama }}</option>
                            @foreach ($supplier as $s)
                                <option value="{{ $s->id }}">{{ $s->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option selected="">Pilih...</option>
                            <option value="{{ $b->kategori_id }}" selected> {{ $b->kategori->nama }}</option>
                            @foreach ($kategori as $item)
                                <option value="{{ $b->kategori_id }}">{{ $item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>   
            </div>    
        </form>
    </div>
</div>
@endsection