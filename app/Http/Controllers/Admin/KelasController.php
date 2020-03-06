<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = \App\M_Kelas::get();
        return view('admin.kelas.index',compact('kelas'));
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
        $tahun = new M_Kelas;
        $tahun->tahun_ajaran = $request->tahun_ajaran;
        $tahun->status = $request->status;

        if($tahun->save()){
            return redirect()->route('tahun_ajaran.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahun_ajaran = M_Kelas::find($id);
        return view('admin.tahun_ajaran.edit',compact('tahun_ajaran'));
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
        $tahun_ajaran = M_Kelas::find($id);
        $tahun_ajaran->tahun_ajaran = $request->tahun_ajaran;
        $tahun_ajaran->status = $request->status;

        if($tahun_ajaran->save()){
            return redirect()->route('tahun_ajaran.index');
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
        $tahun_ajaran = M_Kelas::where('id_tahun',$id)->first();
        $tahun_ajaran->delete();


        return redirect()->back();
    }
}