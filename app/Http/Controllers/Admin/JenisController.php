<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\M_Jenis;
use App\M_Tahun_Ajaran;
use App\M_Pos;
use App\M_Kelas;


class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pos = M_Pos::get();
        $jenis = M_Jenis::get();
        $tahun = M_Tahun_Ajaran::get();
        return view('admin.jenis.index',compact('pos','jenis','tahun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis = new M_Jenis;
        $jenis->id_pos = $request->id_pos;
        $jenis->id_tahun = $request->id_tahun;
        $jenis->nama_pembayaran = $request->nama_pembayaran;
        $jenis->type = $request->type;
        if ($jenis->save()) {
            return redirect()->route('jenis.index');
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
        // $jenis = M_Jenis::find($id);
        // $kelas = M_Kelas::get();
        
        // return view('admin.jenis.setting',compact('jenis','kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = M_Jenis::find($id);
        $pos = M_Pos::get();
        $tahun = M_Tahun_Ajaran::get();
        return view('admin.jenis.edit',compact('pos','tahun','jenis'));
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
        $jenis = M_Jenis::find($id);
        $jenis->id_pos = $request->id_pos;
        $jenis->id_tahun = $request->id_tahun;
        $jenis->nama_pembayaran = $request->nama_pembayaran;
        $jenis->tipe = $request->tipe;
        if ($jenis->update()) {
            return redirect()->route('jenis.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        M_Jenis::find($id)->delete();
        return redirect()->back();
    }

    public function setting($id){
       $jenis = M_Jenis::find($id);
       return view('admin.jenis.setting',compact('jenis')); 
    }

    public function create_tarif($id){
        $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        $jenis = M_Jenis::find($id);
        $kelas = M_Kelas::get();
        return view('admin.jenis.create',compact('jenis','bulan','kelas')); 
    }

    public function update_tarif(Request $request,$id){
        $jenis = M_Jenis::find($id);
        $jenis->nominal = $request->nominal;
        $jenis->id_kelas = $request->id_kelas;
        if ($jenis->update()) {
            return redirect()->route('jenis.index');
        }else{
            return redirect()->back();
        }
    }
}
