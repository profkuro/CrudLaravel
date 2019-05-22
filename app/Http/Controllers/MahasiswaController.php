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

	public function create(){
		return view('Mahasiswa.tambah');
	}

	public function store(Request $mahasiswa){
		Mahasiswa::create($mahasiswa->all());
		return redirect('mahasiswa');
	}

	public function edit($id){
				//select * from mahasiswa where id=$id
		$mhs = Mahasiswa::find($id);
		return view('Mahasiswa.ubah', compact('mhs'));
	}

	public function update(Request $mahasiswa, $id){
		$mhs = $mahasiswa->all();
		Mahasiswa::find($id)->update($mhs);
		return redirect('mahasiswa');
	}
}