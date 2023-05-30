<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index(){
        return view('user.permohonan');
    }

    public function tablePermohonan(){
        return view('user.table');
    }

    public function uploadDokumen(){
        return view('user.dokumen');
    }

    public function storePermohonan(Request $request){
        $payload =[
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'jk' => $request->jk,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'status_sipil' => $request->status_sipil,
            'no_kk' => $request->no_kk
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->uploadPermohonan('/api/permohonan-upload',$payload);
        if($response->failed()){
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/upload')->with('success','Pengajuan Permohonan Berhasil di upload!');

        
    }

    public function upload(Request $request){
        $payload = [
            'kk' => $request->kk,
            'ktp' => $request->ktp,
            'akta' => $request->akta,
            'dokumen_tambahan' => $request->dokumen_tambahan,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->uploadDokumen('/api/upload-doc',$payload);
        if($response->failed()){
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/table-pengajuan')->with('success','Dokumen Pengajuan Permohonan Berhasil di upload!');

    }
}
