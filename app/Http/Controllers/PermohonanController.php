<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PermohonanController extends Controller
{
    public function index(){
        $dt = Carbon::now();
        $user = Auth::user();
        return view('user.permohonan')->with('user',$user)->with('dt',$dt);
    }

    public function tablePermohonan(){
        $dt = Carbon::now();
        $user = Auth::user();
        $data = DB::table('kk')
       ->join('permohonan', 'permohonan.nik', '=', 'kk.nik')
       ->join('document', 'document.nik', '=', 'permohonan.nik')
       ->select('kk.*','permohonan.jenis_passpor','permohonan.kepentingan','permohonan.negara_tujuan','permohonan.id_user','permohonan.keberangkatan','permohonan.kepulangan','permohonan.status_permohonan','document.kk','document.id_user','document.pathkk','document.ktp','document.pathktp','document.akta','document.pathakta','document.dokumen_tambahan','document.pathdoc')
       ->where('permohonan.id_user',$user->id)
       ->get();
       //dd($data);
        
        return view('user.table')->with('data',$data)->with('user',$user)->with('dt',$dt);
    }

    public function storePermohonan(Request $request){
       
        $pathkk = Storage::put("public/" . $request->nik . "/kk", $request->file('kk'));
        $pathktp = Storage::put("public/" . $request->nik . "/ktp", $request->file('ktp'));
        $pathakta = Storage::put("public/" . $request->nik . "/akta", $request->file('akta'));
        $pathdoc = Storage::put("public/" . $request->nik . "/dokumen_tambahan", $request->file('dokumen_tambahan'));

        $payload =[
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'status_sipil' => $request->status_sipil,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'kk' => $request->file('kk')->getClientOriginalName(),
            'pathkk' => $pathkk,
            'ktp' => $request->file('ktp')->getClientOriginalName(),
            'pathktp' => $pathktp,
            'akta' => $request->file('akta')->getClientOriginalName(),
            'pathakta' => $pathakta,
            'dokumen_tambahan' => $request->file('dokumen_tambahan')->getClientOriginalName(),
            'pathdoc' => $pathdoc,
            'jenis_passpor' => $request->jenis_passpor,
            'kepentingan' => $request->kepentingan,
            'negara_tujuan' => $request->negara_tujuan,
            'keberangkatan' => $request->keberangkatan,
            'kepulangan' => $request->kepulangan,
            'id_user'=>$request->id_user,
        ];
        // dd($payload);

        $baseApi = new BaseApi;
        $response = $baseApi->uploadPermohonan('/api/permohonan-upload',$payload);
        if($response->failed()){
            $errors = $response->json('data');
            // dd($errors);
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/table-pengajuan')->with('success','Pengajuan Permohonan Berhasil di upload!');

        
    }
}
