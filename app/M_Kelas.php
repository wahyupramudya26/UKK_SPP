<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Kelas extends Model
{
    protected $table = 'tb_kelas';
    public $primaryKey = 'id_kelas';
    public $timestamps = false;

    protected $fillable = ['id_kelas','kelas','nama_kelas','id_kompetensi'];

    public function getKompetensi(){
        return $this->belongsTo('App\M_Kompetensi','id_kompetensi','id_kompetensi');
    }

    public function getKelas(){
    	return $this->hasMany('\App\M_Siswa','id_kelas','id_kelas');
    }

    public function get_J_Kelas(){
        return $this->hasOne('\App\M_Jenis','id_kelas','id_kelas');
    }
}
