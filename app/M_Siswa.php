<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Siswa extends Model
{
    public $timestamps = false;
    public $primaryKey = 'nisn';
    protected $table = 'tb_siswa';

    protected $fillable = ['nisn','nis','nama_lengkap','alamat','id_kelas','avatar','username','password'];
    public function M_Tahun()
    {
    	return $this->hasOne('\App\M_Tahun_ajaran','id_tahun','id_tahun');
    }
}
