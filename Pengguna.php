<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
	protected $table = 'pengguna';
    protected $fillable = ['username','password'];	
    

    public function mahasiswa()
	{
     return $this->hasOne(mahasiswa::class);
	}
	public function dosen()
	{
     return $this->hasOne(dosen::class);
	}
	
	
	// $pengguna = App\Pengguna::find(1);
	// foreach ($pengguna->peran as $peran)
	// {
	// 	//
	// }

	// $pengguna = App\Pengguna::find(1)->where('peran_id','2')->get();
}