<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Seller;
use Illuminate\Http\Request;

class BatikAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tittle = 'Admin Batik';
        $produk = Produk::paginate(2);
        $produk = new Produk;
        if (isset($_GET['s'])) {
            $s=$_GET['s'];

            $produk = $produk->where('nama_produk', 'like', "%$s%");
        }
        if (isset($_GET['id_seller'])&&$_GET['id_seller']!='') {

            $produk = $produk->where('id_seller', 'like', $_GET['id_seller']);
        }

        $produk = $produk->paginate(2);
        $seller = Seller::all();
        //dd($produk);
        return view('backpage.adminBatik', compact('tittle', 'produk', 'seller'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tittle = 'input Page';
        $seller = Seller::all();
        return view('backpage.inputproduk', compact('tittle', 'seller'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $message =[
        //     'required'=> 'Kolom : Attribute harus lengkap',
        //     'numeric'=> 'Kolom : Attribute harus Angka',
        //     'file'=> 'Perhatikan format dan ukuran file',
        // ];

        $validasi = $request->validate([
            'kode_produk'=>'required',
            'nama_produk'=>'required',
            'desk_produk'=>'required',
            'img_produk'=> 'required|image|mimes:png,jpg|max:1024',
            'id_seller'=>'required',

        ],);
        try{
            $fileName = time().$request->file('img_produk')->getClientOriginalName();
            $path = $request->file('img_produk')->storeAs('photos', $fileName);
            $validasi['img_produk'] = $path;
            $response = Produk::create($validasi);
            return redirect('batik');

        } catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tittle = 'Edit Page';
        $seller = Seller::all();
        $produk = Produk::find($id);
        return view('backpage.inputproduk', compact('tittle', 'seller', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validasi = $request->validate([
            'kode_produk'=>'required',
            'nama_produk'=>'required',
            'desk_produk'=>'required',
            'img_produk'=> '',
            'id_seller'=>'required'

        ],);
        try{
            if($request->file('img_produk')){
                $fileName = time().$request->file('img_produk')->getClientOriginalName();
                $path = $request->file('img_produk')->storeAs('photos', $fileName);
                $validasi['img_produk'] = $path;
            }
            $response = Produk::find($id)->update($validasi);
            return redirect('batik');

        } catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            $produk=Produk::find($id);
            $produk->delete();
            return redirect('batik');
        }   catch (\Throwable $e) {
                echo $e->getMessage();
            }

    }
}
