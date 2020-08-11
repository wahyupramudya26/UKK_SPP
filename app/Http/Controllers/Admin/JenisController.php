<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\M_Jenis;
use App\M_Tahun_Ajaran;
use App\M_Pos;
use App\M_Kelas;
use App\M_Siswa;


class JenisController extends Controller
{
    public function index()
    {
        $pos = M_Pos::get();
        $jenis = M_Jenis::get();
        $tahun = M_Tahun_Ajaran::get();
        return view('admin.jenis.index',compact('pos','jenis','tahun'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $jenis = new M_Jenis;
        $jenis->id_pos = $request->id_pos;
        $jenis->id_tahun = $request->id_tahun;
        $jenis->nama_pembayaran = $request->nama_pembayaran;
        $jenis->tipe = $request->type;
        if ($jenis->save()) {
            return redirect()->route('jenis.index');
        }else{
            return redirect()->back();
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $jenis = M_Jenis::find($id);
        $pos = M_Pos::get();
        $tahun = M_Tahun_Ajaran::get();
        return view('admin.jenis.edit',compact('pos','tahun','jenis'));
    }

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

    public function destroy($id)
    {
        $jenis = M_Jenis::where('id_jenis',$id)->first();
        $jenis->delete();
        return redirect()->back();
    }

    public function setting(Request $request, $id){
       $jenis = M_Jenis::find($id);
       $kelas = M_Kelas::get();
       if($request->has('cari')){
            $siswa = M_Siswa::when($request->cari,function($query) use ($request){
                $query->where('id_kelas','LIKE',"%{$request->cari}%");
            })->get();
        }else{
            $siswa = [];
        }
        return view('admin.jenis.setting',compact('jenis','kelas','siswa')); 
    }

    public function create_tarif(Request $request,$id){
        $jenis = M_Jenis::find($id);
        $kelas = M_Kelas::get();
        return view('admin.jenis.create',compact('jenis','bulan','kelas'));
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $output = '';

            $siswa = M_Siswa::where('id_kelas','LIKE',''.$request->id_kelas.'')->get();

            if($siswa){
                $output .= '
                <div class="panel panel-inverse" data-sortable-id="form-stuff-2" data-init="true">
                    <div class="panel-heading ui-sortable-handle">
                        <h3 class="panel-title">Data Siswa</h3>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="form-group row m-b-15">';

                foreach($siswa as $key => $s){
                    $output .= '
                    
                            <label class="col-sm-3 col-form-label" name="nama_siswa">'.$s->nama_lengkap.'</label>
                            <div class="col-sm-9">
                                <input type="text" name="siswa" class="form-control form-control-lg"/><br/>
                            </div>
                    ';
                }
                    $output .= '
                        </div>
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                            <button type="Cancel" class="btn btn-grey btn-block">Cancel</button>
                        </div>
                    </div>';
                    return Response($output);
            }
        }
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