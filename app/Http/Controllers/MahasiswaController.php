<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
	public function index(){
		
		// file mahasiswa terdapat pada folder resource
		$var = 'Pahrul Irfan';
		$data = Mahasiswa::all();
//		dd($data);
		return view('Mahasiswa.index', compact('var', 'data'));
	}
}