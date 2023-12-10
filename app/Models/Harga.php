<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;
    public $primarykey = 'id_harga';
    protected $table = "tb_harga";
    protected $fillable = [
        'id_produk','harga_produk', 'date_from','date_end','quantity','harga_dewasa','harga_anak','harga_instant'
    ];
    public function harga(){
        return $this->belongsTo(Produk::class, 'id_produk','id_produk');
    }
}
