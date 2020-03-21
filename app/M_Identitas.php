<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Identitas extends Model
{
    protected $table = 'tb_identitas';
    public $primaryKey = 'nis';
    public $timestamps = false;

    protected $fillable = ['nis','nama_sekolah','alamat','kecamatan','kota','provinsi','no_telp','logo'];

    public function getNIS()
    {
    	return $this->hasOne('\App\M_Siswa','nis','nis');
    }
}
