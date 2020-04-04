<?php

namespace App\Exports;

use App\M_Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return M_Siswa::select('nisn','nama_lengkap','id_kelas')->get();
    }
}
