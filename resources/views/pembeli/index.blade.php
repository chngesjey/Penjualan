@extends('layout.app')

@section('title')
    Pembeli
@endsection


<!-- Table -->
@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="card-title">
            <h4> <i class="fa-solid fa-database"></i> Data Pembeli </h4>

            <a class="btn btn-success btn-sm float-end" href="{{ route('pembeli.create') }}">
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
          @foreach ($pembeli as $p)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $p -> nama }}</td>
                <td>{{ $p -> telepon }}</td>
                <td>{{ $p -> alamat }}</td>
                <td>
                    <a href="/pembeli/{{ $p-> id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="/pembeli/{{ $p-> id }}/hapus" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
<!-- End Table -->