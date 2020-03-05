<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Tahun_Ajaran extends Model
{
    public $primaryKey = 'id_tahun';
    protected $table = 'tb_tahun_ajaran';
    public $timestamps = false;

    protected $fillable = ['id_tahun','tahun_ajaran','status'];

    public function M_Siswa()
    {
    	return $this->BelongsTo('\App\M_Siswa','id_tahun','id_tahun');
    }
}
