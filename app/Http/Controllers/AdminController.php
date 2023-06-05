<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function pengajuan(){
   
        $dt = Carbon::now();
        $data = DB::table('kk')
        ->join('permohonan', 'permohonan.nik', '=', 'kk.nik')
        ->join('document', 'document.nik', '=', 'permohonan.nik')
        ->get();
        return view('admin.data-permohonan')->with('data',$data)->with('dt',$dt);
    }

    public function indexPermohonan($nik){
      
        $dt = Carbon::now();
        $data = DB::table('kk')
        ->join('permohonan', 'permohonan.nik', '=', 'kk.nik')
        ->join('document', 'document.nik', '=', 'permohonan.nik')
        ->select('kk.*','kk.nama','permohonan.jenis_passpor','permohonan.kepentingan','permohonan.negara_tujuan','permohonan.keberangkatan','permohonan.kepulangan','document.kk','document.pathkk','document.ktp','document.pathktp','document.akta','document.pathakta','document.dokumen_tambahan','document.pathdoc')
        ->where('permohonan.nik',$nik)
        ->first();
        //dd($data);
        return view('admin.detail-permohonan')->with('data',$data)->with('dt',$dt);
        
    }

    public function approve(Request $request){
        $nik = $request->nik;
        DB::table('permohonan')->where('nik',$nik)->update(['status_permohonan'=>'disetujui']);
        return redirect('/dashboard-admin');
    }

    public function disapprove(Request $request){
        $nik = $request->nik;
        DB::table('permohonan')->where('nik',$nik)->update(['status_permohonan'=>'ditolak']);
        return redirect('/dashboard-admin');
    }

    
}
