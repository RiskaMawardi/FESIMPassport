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
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'status_sipil' => $request->status_sipil
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->uploadPermohonan('/api/permohonan-upload',$payload);
        if($response->failed()){
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/table-pengajuan')->with('success','Pengajuan Permohonan Berhasil di upload!');

        
    }
}
