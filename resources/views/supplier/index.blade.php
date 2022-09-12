@extends('layout.app')

@section('title')
    Supplier
@endsection


<!-- Table -->
@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="card-title">
            <h4> <i class="fa-solid fa-database"></i> Data Supplier </h4>

            <a class="btn btn-success btn-sm float-end" href="{{ route('supplier.create') }}">
                <i class="fa fa-plus"></i></a>
        </div>
    </div>

<div class="card-body"></div>

<!-- Table -->
    <table class="table table-striped">
  <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
          @foreach ($supplier as $s)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $s -> nama }}</td>
                <td>{{ $s -> telepon }}</td>
                <td>{{ $s -> alamat }}</td>
                <td>
                    <a href="/supplier/{{ $s-> id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="/supplier/{{ $s-> id }}/hapus" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
          </tbody>
    </table>
</div>


@endsection
<!-- End Table -->