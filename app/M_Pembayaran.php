<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Pembayaran extends Model
{
    public $primaryKey = 'no_pembayaran';
    protected $table = 'tb_pembayaran';
    public $timestamps = false;

    protected $fillable = ['no_pembayaran','id_karyawan','nisn','tanggal_bayar','keterangan','bulan_bayar','id_tahun','id_jenis_pembayaran','jumlah_bayar'];

    public function M_Karyawan(){
    	return $this->belongsTo('App\M_Karyawan','id_karyawan','id_karyawan');
    }

    public function M_Siswa(){
    	return $this->belongsTo('App\M_Siswa','nisn','nisn');
    }

    public function M_Tahun(){
    	return $this->belongsTo('App\M_Tahun','id_tahun','id_tahun');
    }

    public function M_Jenis(){
    	return $this->belongsTo('App\M_Jenis','id_jenis_pembayaran','id_jenis_pembayaran');
    }
}
