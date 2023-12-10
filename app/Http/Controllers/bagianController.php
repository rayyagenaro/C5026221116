<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class bagianController extends Controller{
    public function index()
	{
        $bagian = DB::table('bagian')->get();
		return view('indexbagian',['bagian' => $bagian]);
	}

	public function tambahbagian()
	{

		// memanggil view tambah
		return view('tambahbagian');

	}


	public function store(Request $request)
	{

		DB::table('bagian')->insert([
			'namabagian' => $request->namabagian,
			'jumlahbagian' => $request->jumlahbagian,
			'tersedia' => $request->tersedia
		]);

		return redirect('/bagian');
	}
}
