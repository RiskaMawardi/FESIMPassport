<?php

namespace App\Http\Controllers;

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
}
