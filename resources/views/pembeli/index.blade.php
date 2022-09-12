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
                <td>{{ $p -> Nama }}</td>
                <td>{{ $p -> Telepon }}</td>
                <td>{{ $p -> Alamat }}</td>
                <td>
                    <a href="/pembeli/{{ $p-> id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="/pembeli/{{ $p-> id }}/hapus" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Affa Yaquin?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
@endsection
<!-- End Table -->