<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Kompetensi extends Model
{
    protected $table = 'tb_kompetensi';
    public $timestamps = false;
    public $primaryKey = 'id_kompetensi';

    protected $fillable = ['id_kompotensi','kompetensi_keahlian'];

    public function getKompetensi()
    {
        return $this->hasMany('App\M_Kelas','id_kompetensi','id_kompetensi');
    }
}
