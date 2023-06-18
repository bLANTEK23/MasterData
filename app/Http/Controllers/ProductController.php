<?php

namespace App\Http\Controllers;

use App\Models\Produt;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with([
            'produts'=> Produt::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|min:3|max:9',
            'nama' => 'required|min:3|max:9',
            'harga' => 'required',
            'description' => 'required',
            'satuan' => 'required|min:3',
        ]);

        $product = new Produt;
        $product->kode_barang = $request->kode_barang;
        $product->nama = $request->nama;
        $product->harga  = $request->harga;
        $product->description = $request->description;
        $product->satuan = $request->satuan;
        $product->save();

        return to_route('products.index')->with('success','Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('products.edit')->with([
            'products' => Produt::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => 'required|min:3|max:9',
            'nama' => 'required|min:3|max:9',
            'harga' => 'required',
            'description' => 'required',
            'satuan' => 'required|min:3',
        ]);

        $product = Produt::find($id);
        $product->kode_barang = $request->kode_barang;
        $product->nama = $request->nama;
        $product->harga  = $request->harga;
        $product->description = $request->description;
        $product->satuan = $request->satuan;
        $product->save();

        return to_route('products.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Produt::find($id);
        $products->delete();

        return back()->with('success', 'Data Berhasil di hapus');
    }
}
