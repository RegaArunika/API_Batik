<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    public $primarykey = 'id_seller';
    protected $table = "tb_seller";
    protected $fillable = [
        'nama_seller','desk_seller', 'kontak','location','logo_seller'
    ];

    public function produk(){
        return $this->hasMany(Produk::class, 'id_seller','id_seller');
    }
}
