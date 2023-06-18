@extends('layouts.mainlayaouts')    
@section('title', 'create')

@section('contect')
<div class="container mt-5">
    <h1 class="text-center mb-5">Produk List</h1>
    <a href="{{ route('products.index')}}" class="btn btn-primary mb-32">Product List</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('products.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="kode_barang" class="form-label">kode Barang</label>
                  <input type="text" class="form-control" name="kode_barang" id="kode_barang">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">nama Barang</label>
                  <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga Barang</label>
                  <input type="number" class="form-control" name="harga" id="harga">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" name="description" id="description">
                </div>
                <div class="mb-3">
                  <label for="satuan" class="form-label">Satuan</label>
                  <input type="text" class="form-control" name="satuan" id="satuan">
                </div>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </form>
        </div>
    </div>
</div>
@endsection