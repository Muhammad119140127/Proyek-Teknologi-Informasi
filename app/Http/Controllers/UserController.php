<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function latest()
    {
        return view ('user.latest');
    }

    public function about()
    {
        return view ('user.about');
    }

    public function product()
    {
        $data = Produk::orderby('id', 'desc')->get();
        // $data = Produk::get();

        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function tshirt()
    {
        $data = DB::table('produk')->where('model','like',"%". "t-shirt" ."%")->get();

        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function jersey()
    {
        $data = DB::table('produk')->where('model','like',"%". "jersey" ."%")->get();

        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function hoodie()
    {
        $data = DB::table('produk')->where('model','like',"%". "hoodie" ."%")->get();

        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function kuantitas()
    {
        // SELECT id_product, nama_product, harga FROM product WHERE id_product BETWEEN 2 AND 7;
        $data = DB::table('produk')->whereBetween('quantity', [10, 100])->get();
        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function terbaru()
    {
        $data = Produk::orderBy('id', 'desc')->paginate(10);
        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function terlama()
    {
        $data = Produk::orderBy('id', 'asc')->paginate(10);
        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }
    
    public function diskon()
    {
        $data = Produk::orderby('id', 'desc')->get();
        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $data = DB::table('produk')->where('model','like',"%". $cari ."%")->get();

        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function max(Request $request)
    {
        $request->validate([
            'harga' => 'numeric|max:100|alpha_num',
        ]);

        $cari = $request->max;

        $data = DB::table('produk')->whereBetween('harga', [0, $cari])->get();

        return view ('user.product', 
            [
                'data' => $data
            ]
        );
    }

    public function detail(Produk $data)
    {
        // $data->id;

        return view ('user.detail',
            [
                'data' => $data
            ]
        );
    }

    public function tracking(Request $request)
    {
        $pesanan = Pesanan::Join('produk', 'pesanans.idProduk', '=', 'produk.id')
        ->where('pesanans.kodePesanan', '=', $request->keyword)
        ->Select(
            'pesanans.*',
            'produk.nama as namaProduk',
        )
        ->get();
        return view ('user.tracking', [
            'status' => $request->keyword != null && count($pesanan) != 0 ? true : false,
            'query' => $request->keyword != null ? $request->keyword : '' ,
            'pesanan' => $pesanan
        ]);
    }
}
