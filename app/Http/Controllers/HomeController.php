<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        $title = "Landing Page";
        $produk = Produk::all();
    
        return view('frontpage.landingpage', compact('title', 'produk'));
    }
    
    // function index(){
    //     return view ('frontpage.landingpage', ['tittle' =>"Landing Page"]);
    // }
    function keranjang(){
        return view ('frontpage.keranjang', ['tittle' =>"Keranjang Belanja"]);
    }
    function checkout(){
        return view ('frontpage.checkout', ['tittle' =>"Keranjang checkout"]);
    }
    function detail(){
        return view ('frontpage.detail', ['tittle' =>"Keranjang Detail"]);
    }
    function login(){
        return view ('frontpage.login', ['tittle' =>"Keranjang login"]);
    }
    function contact(){
        return view ('frontpage.contact', ['tittle' =>"Keranjang Contact"]);
    }
    function dashboard(){
        return view ('frontpage.dashboard', ['tittle' =>"DashBoard"]);
    }
    function detail2(){
        return view ('frontpage.detail2', ['tittle' =>"Detail"]);
    }
}
