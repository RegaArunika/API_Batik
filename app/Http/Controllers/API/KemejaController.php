<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kemeja;
use App\Models\Seller;
use Illuminate\Http\Request;

class KemejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Kemeja::getKemeja()->paginate(2);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            'kode_produk'=>'required',
            'nama_produk'=>'required',
            'desk_produk'=>'required',
            'img_produk'=> 'required',
            'id_seller'=>'required',
        ],);
        try{
            $fileName = time().$request->file('img_produk')->getClientOriginalName();
            $path = $request->file('img_produk')->storeAs('photos/kemeja', $fileName);
            $validasi['img_produk'] = $path;
            $response = Kemeja ::create($validasi);
            return response()->json([
                'success'=> true,
                'message'=>'success'
                
            ]);
        } catch (\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
            
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
            'id_seller'=>'required',
        ],);
        try{
            if($request->file('img_produk')){
                $fileName = time().$request->file('img_produk')->getClientOriginalName();
                $path = $request->file('img_produk')->storeAs('photos/kemeja', $fileName);
                $validasi['img_produk'] = $path;
                
                
            }
            $response = Kemeja::find($id);
            $response->update($validasi);
            return response()->json([
                'success'=> true,
                'message'=>'success'
            ]);
            
        } catch (\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            $kemeja=Kemeja::find($id);
            $kemeja->delete();
            return response()->json([
                'success'=> true,
                'message'=>'success'
            ]);
        }
        catch (\Exception $e) {
            return response()->json([
                'message'=> 'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }

    function listSeller(){
        $data=Seller::all();
        return response()->json($data);
    }
}
