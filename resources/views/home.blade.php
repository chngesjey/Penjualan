@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="row g-2 text center">
        <div class="col-3">
            <div class="p-3 border bg-warning mt-3"> 10 Barang <i class="fa fa-boxes"></i></div>
        </div>
    <div class="col-3">
        <div class="p-3 border bg-warning mt-3"> 15 Kategori <i class="fa fa-tag"></i></div>
</div>   
    <div class="col-3">
        <div class="p-3 border bg-warning mt-3"> 5 Supplier <i class="fa fa-truck"></i></div>
</div>   
    <div class="col-3">
        <div class="p-3 border bg-warning mt-3"> 100 Member <i class="fa-solid fa-people-group"></i></div>
</div>   
@endsection