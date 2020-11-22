<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showAbout(){
		return view('menu');
	}

	function showProduk(){
		return view('produk');
	}

	function showKategori(){
		return view('kategori');
	}


}
