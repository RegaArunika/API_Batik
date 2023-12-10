<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    protected $table = "tb_produk";
    protected $fillable = [
        'kode_produk','nama_produk', 'desk_produk','img_produk','id_seller','id_lokasi'
    ];

    public function produk(){
        return $this->belongsTo(Seller::class, 'id_seller','id_seller');
    }
    public function harga(){
        return $this->hasOne(Harga::class, 'id_produk', 'id_produk');
    }
}
