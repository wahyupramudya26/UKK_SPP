<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\M_Kelas;
use App\M_Kompetensi;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompetensi = M_Kompetensi::get();
        $kelas = M_Kelas::with('getKompetensi')->get();
        return view('admin.kelas.index',compact('kelas','kompetensi'));
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
        $kelas = new M_Kelas;
        $kelas->kelas = $request->kelas;
        $kelas->id_kompetensi = $request->id_kompetensi;

        if($kelas->save()){
            return redirect()->route('kelas.index');
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
        $kompetensi = M_Kompetensi::get();
        $kelas = M_Kelas::find($id);
        return view('admin.kelas.edit',compact('kelas','kompetensi'));
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
        $kelas = M_Kelas::find($id);
        $kelas->kelas = $request->kelas;
        $kelas->id_kompetensi = $request->id_kompetensi;

        if($kelas->save()){
            return redirect()->route('kelas.index');
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
        $kelas = M_Kelas::where('id_kelas',$id)->first();
        $kelas->delete();


        return redirect()->back();
    }
}