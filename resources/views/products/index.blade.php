@extends('layouts.mainlayaouts')    
@section('title', 'Products')

@section('contect')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Produk List</h1>
        <a href="{{ route('products.create')}}" class="btn btn-primary mb-32">Tambah Data</a>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi</th>
                        <th>Satuan Barang</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                      @if ($produts->count() > 0)
                        @foreach ($produts as $products)
                        <tr>
                          <td>{{$products->kode_barang}}</td>
                          <td>{{$products->nama}}</td>
                          <td>{{$products->harga}}</td>
                          <td>{{$products->description}}</td>
                          <td>{{$products->satuan}}</td>
                          <td>
                              <form action="{{ route('products.destroy', $products->id)}}" method="POST">
                                  @csrf
                                  @method('delete')
                                  <a href="{{ route('products.edit', $products) }}"class="btn btn-success btn-sm">Edit</a>
                               <button class="btn btn-danger btn-sm">Hapus</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                      @else
                    <tr>
                        <td colspan="10" align="center">Tidak Ada Data</td>
                    </tr>
                      @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection