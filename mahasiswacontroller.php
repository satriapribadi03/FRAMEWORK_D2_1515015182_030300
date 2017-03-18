<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari mahasiswaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'M. Satria Pribadi';
    	$mahasiswa->nim = '1515015182';
    	$mahasiswa->Alamat = 'Jl. Kemuning no.33';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	return "data dengan nama {$mahasiswa->nama} telah disimpan";
    }
}
