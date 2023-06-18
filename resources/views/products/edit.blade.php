@extends('layouts.mainlayaouts')    
@section('title', 'create')

@section('contect')
<div class="container mt-5">
    <h1 class="text-center mb-5">Form Edit</h1>
    <a href="{{ route('products.index')}}" class="btn btn-primary mb-32">Product List</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('products.update', $products) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="kode_barang" class="form-label">kode Barang</label>
                  <input type="text" class="form-control" name="kode_barang" id="kode_barang" value="{{old('kode_barang', $products->kode_barang)}}" required>
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">nama Barang</label>
                  <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama', $products->nama)}}" required>
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga Barang</label>
                  <input type="number" class="form-control" name="harga" id="harga" value="{{old('harga', $products->harga)}}" required>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" name="description" id="description" value="{{old('description', $products->description)}}" required>
                </div>
                <div class="mb-3">
                  <label for="satuan" class="form-label">Satuan</label>
                  <input type="text" class="form-control" name="satuan" id="satuan" value="{{old('satuan',$products->satuan)}}" required>
                </div>
                <button type="submit" class="btn btn-primary float-end">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection
