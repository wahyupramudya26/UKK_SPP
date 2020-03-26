<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Jenis extends Model
{
    protected $table = 'tb_jenis_pembayaran';
	public $primaryKey = 'id_jenis';
	public $timestamps = false;

	protected $fillable = ['id_jenis','id_pos','id_tahun','nama_pembayaran','type','nominal','id_kelas'];

	public function getPos()
	{
		return $this->hasOne('\App\M_Pos','id_pos','id_pos');
	}

	public function getTahun()
	{
		return $this->hasOne('\App\M_Tahun_Ajaran','id_tahun','id_tahun');
	}

	public function get_J_Kelas()
	{
		return $this->hasOne('\App\M_Kelas','id_kelas','id_kelas');
	}
}
