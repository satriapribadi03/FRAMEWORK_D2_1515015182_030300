<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosencontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari dosenController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Soyo Wijoyo';
    	$dosen->NIP = '123456789';
    	$dosen->Alamat = 'jl. antasari no.33';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
