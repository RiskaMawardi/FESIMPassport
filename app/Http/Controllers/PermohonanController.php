<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PermohonanController extends Controller
{
    public function index(){
        return view('user.permohonan');
    }

    public function tablePermohonan(){
        $user = Auth::user();
        return view('user.table')->with('user',$user);
    }

    public function uploadDokumen(){
        return view('user.dokumen');
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
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->uploadPermohonan('/api/permohonan-upload',$payload);
        if($response->failed()){
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/table-pengajuan')->with('success','Pengajuan Permohonan Berhasil di upload!');

        
    }

    public function upload(Request $request){

        $pathkk = Storage::put("public/kk", $request->file('kk'));
        $pathktp = Storage::put("public/ktp", $request->file('ktp'));
        $pathakta = Storage::put("public/akta", $request->file('akta'));
        $pathdoc = Storage::put("public/dokumen-tambahan", $request->file('dokumen_tambahan'));
    
        $payload = [
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
        ];

        // dd($payload);

        $baseApi = new BaseApi;
        $response = (new BaseApi)->uploadDokumen('/api/upload-doc',$payload);
      
        if($response->failed()){
            $errors = $response->json('data');
            // dd($errors);
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/table-pengajuan')->with('success','Dokumen Pengajuan Permohonan Berhasil di upload!');

    }
}
