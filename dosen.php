<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
	{
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];
	}

    protected $table = 'dosen';
    public function Pengguna()
	{
     return $this->belongsTo(Pengguna::class);
	}
	 public function dosen_matakuliah()
	{
     return $this->hasMany(DosenMatakuliah::class);
	}

	$dosen_mengajar = App\dosen::find(1)->dosen_matakuliah;

	foreach ($dosen_mengajar as $mengajar){
		//
	}
	$dosen_mengajar = App\dosen::find(1)->dosen_matakuliah()->where('title','foo')->first();
	{
	return $this->hasMany(DosenMatakuliah::class,'foreign_key');
    return $this->hasMany(DosenMatakuliah::class,'foreign_key','local_key');
	}
	

}
