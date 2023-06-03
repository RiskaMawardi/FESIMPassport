<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function pengajuan(){
        $dt = Carbon::now();
        $baseApi = new BaseApi;
        $response = $baseApi->getData('/api/get-data');
        $datas = $response->json();
        return view('admin.data-permohonan')->with('datas',$datas['data'])->with('dt',$dt);
    }

    public function indexPermohonan($nik){
        $response = (new BaseApi)->getDataDetail('/api/get-data-detail', $nik);
        dd($response);
        $datas = $response->json();
        return view('admin.detail-permohonan')->with('datas',$datas['data']);
        
    }

    
}
