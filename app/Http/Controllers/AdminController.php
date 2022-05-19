<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Pesanan;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produk()
    {
        // all data produk from database ascending
        $produk = Produk::orderBy('id', 'desc')->get();

        return view('admin.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produk $produk)
    {
        // request data and validation
        $request->validate([
            'files' => 'required',
            'nama' => 'required|max:25',
            'model' => 'required',
            'harga' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);

        $files = $produk->files;
        //  get file
        if ($request->hasFile('files')) {
            Storage::delete($produk->files);
            $files = $request->file('files')->store('img-produk');
        }

        // save data
        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->model = $request->model;
        $produk->harga = $request->harga;
        $produk->quantity = $request->quantity;
        $produk->files = $files;

        $produk->save();

        return redirect('/produk')->with('success', 'Data Produk Berhasil Ditambahkan');
    }

    /**
     * Edit the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {

        return view ('admin.edit', compact('produk'));
    }

    
    /**
     * Update the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
         // request data and validation
         $request->validate([
            'nama' => 'required|max:25',
            'model' => 'required',
            'harga' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);

        $files = $produk->files;
        //  get file
        if ($request->hasFile('files')) {
            Storage::delete($produk->files);
            $files = $request->file('files')->store('img-produk');
        }

        // save data
        Produk::where('id', $produk->id)
        ->update([
            'nama' => $request->nama,
            'model' => $request->model,
            'harga' => $request->harga,
            'quantity' => $request->quantity,
            'files' => $files,  
        ]);

        return redirect('/produk')->with('success', 'Data Produk Berhasil Ditambahkan');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $produk = Produk::find($id);
        $produk->delete();

        return redirect('/produk')->with('success', 'Data Produk Berhasil Dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pesanan()
    {
        $data = Pesanan::all();
        $produk = Produk::all();
        return view ('admin.pesanan', [
            'data' => $data,
            'produk' => $produk,
        ]);
    }

    public function pesananPost(Request $request)
    {
        $kodePesanan = rand();
        
        $pesanan = new Pesanan;

        $pesanan->idProduk = $request->idProduk;
        $pesanan->namaPemesan = $request->namaPemesan;
        $pesanan->nomorTelepon = $request->nomorTelepon;
        $pesanan->size = $request->size;
        $pesanan->qty = $request->qty;
        $pesanan->status = $request->status;
        $pesanan->kodePesanan = $kodePesanan;

        // $pesanan->save();
        if ($pesanan->save()) {
            return redirect('/pesanan')->with('success', 'Data Pesanan Berhasil Ditambahkan');
        } else {
            return redirect('/pesanan')->with('error', 'Data Pesanan Gagal Ditambahkan');
        }
        // return redirect('/pesanan')->with('success', 'Data Pesanan Berhasil Ditambahkan');
    }

    public function pesananUpdate(Request $request, $id)
    {
        $update = Pesanan::Where('id', $id)->Update([
            'status' => $request->status
        ]);
        
        if ($update) {
            return redirect()->back()->with('success', 'Data Pesanan Berhasil Diupdate');
        } else {
            return redirect()->back()->with('error', 'Data Pesanan Gagal Diupdate');
        }
    }
}
