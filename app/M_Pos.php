<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Pos extends Model
{
	protected $table = 'tb_pos_keuangan';
	public $primaryKey = 'id_pos';
	public $timestamps = false;

	protected $fillable = ['id_pos','nama_pos','keterangan'];

	public function getPos()
	{
		return $this->hasOne('App\M_Jenis','id_pos','id_pos');
	}
}