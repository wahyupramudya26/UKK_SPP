<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Kelas extends Model
{
    protected $table = 'tb_kelas';
    public $primaryKey = 'id_kelas';
    public $timestamps = false;

    protected $fillable = ['id_kelas','nama_kelas','id_kompetensi'];

    public function getKompetensi(){
        return $this->belongsTo('App\Kompensti','id_kompetensi','id_kompetensi');
    }
}
