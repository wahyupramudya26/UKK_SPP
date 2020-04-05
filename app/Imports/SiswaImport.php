<?php

namespace App\Imports;

use App\M_Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new M_Siswa([
            'nisn'    		=> $row[0],
            'nama_lengkap'	=> $row[1], 
            'id_kelas'		=> $row[2]
        ]);
    }
}
