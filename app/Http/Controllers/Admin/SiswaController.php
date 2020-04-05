<?php

namespace App\Http\Controllers\Admin;

use Excel;
use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use App\M_Siswa;
use App\M_Kelas;
use App\M_Tahun_Ajaran;
use App\M_Pembayaran;
use App\M_Identitas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = M_Siswa::get();
        $kelas = M_Kelas::get();
        $tahun = M_Tahun_Ajaran::get();
        $pembayaran = M_Pembayaran::get();
        return view('admin.siswa.index',compact('siswa','kelas','tahun','pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new M_Siswa;
        $siswa->nisn = $request->nisn;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->id_kelas = $request->id_kelas;

        if($siswa->save()){
            return redirect()->route('siswa.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = M_Siswa::findOrFail($id);
        return view('admin.siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = M_Siswa::find($id);
        $kelas = M_Kelas::get();
        $nis = M_Identitas::get();
        $tahun = M_Tahun_Ajaran::get();
        $pembayaran = M_Pembayaran::get();
        return view('admin.siswa.edit',compact('siswa','kelas','tahun','pembayaran','nis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = M_Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->id_tahun = $request->id_tahun;
        $siswa->username = $request->username;
        $siswa->password = bcrypt($request->password);
        $siswa->update();
        if($request->file('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = M_Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->back();
    }

    public function siswaExport()
    {
        return Excel::download(new SiswaExport,'data-siswa.xlsx');
        // return (new SiswaExport)->download('data-siswa.xlsx');
    }

    public function siswaImport(Request $request)
    {
         //VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new SiswaImport, $file); //IMPORT FILE 
            return redirect()->back()->with(['success' => 'Upload success']);
        }  
        return redirect()->back()->with(['error' => 'Please choose file before']);
    }

    public function dataTable()
    {
        $model = M_Siswa::with('getKelas')->get();
        return DataTables::of($model)
        ->addColumn('action',function($model){
            return view('layout._action',[
                'model' => $model,
                'url_show' => route('siswa.show',$model->nisn),
                'url_edit' => route('siswa.edit',$model->nisn),
                'url_destroy' => route('siswa.destroy',$model->nisn)
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }
}
