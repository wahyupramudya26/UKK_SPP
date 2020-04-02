<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Agenda extends Model
{
    protected $table = 'tb_agenda';
	public $primaryKey = 'id_agenda';
	public $timestamps = false;

	protected $fillable = ['id_agenda','tanggal','keterangan'];
}
