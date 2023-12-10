<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kemeja extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    protected $table = "tb_produk";
    protected $fillable = [
        'kode_produk','nama_produk', 'desk_produk','img_produk','id_seller','id_lokasi'
    ];

    static function getKemeja(){
        $return=DB::table('tb_produk')
        ->join('tb_seller','tb_produk.id_seller','=', 'tb_seller.id_seller');
        return $return;
    }
}