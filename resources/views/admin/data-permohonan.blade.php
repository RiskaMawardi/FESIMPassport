@extends('admin.dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pengajuan Permohonan</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>KK</th>
                                                    <th>KTP</th>
                                                    <th>AKTA</th>
                                                    <th>Dokumen Tambahan</th>
                                                    <th>TGL PENGAJUAN</th>

                                                    <th>Action</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $dta)
                                                <tr>
                                                @php
                                        $kk = $dta->pathkk;
                                        $ktp = $dta->pathktp;
                                        $akta = $dta->pathakta;
                                        $doc = $dta->pathdoc;

                                        $kk_path = list($public, $folder_student, $folder_kk, $file_kk) = explode("/", $kk);
                                        $ktp_path = list($public, $folder_student, $folder_ktp, $file_ktp) = explode("/", $ktp);
                                        $akta_path = list($public, $folder_student, $folder_akta, $file_akta) = explode("/", $akta);
                                        $doc_path = list($public, $folder_student, $folder_doc, $file_doc) = explode("/", $doc);


                                        @endphp

                                                    <td>{{$dta->nama}}</td>
                                                    <td>{{$dta->nik}}</td>
                                                    <td>
                                                        <a href="../../storage/{{$folder_student}}/{{$folder_kk}}/{{$file_kk}}" target="_blank" class="nav-link"><i class="fas fa-file-invoice"></i><span>&nbsp;KK</span></a>
                                                    </td>
                                                    <td>
                                                        <a href="../../storage/{{$folder_student}}/{{$folder_ktp}}/{{$file_ktp}}" target="_blank" class="nav-link"><i class="fas fa-file-invoice"></i><span>&nbsp;KTP</span></a>
                                                    </td>
                                                    <td>
                                                        <a href="../../storage/{{$folder_student}}/{{$folder_akta}}/{{$file_akta}}" target="_blank" class="nav-link"><i class="fas fa-file-invoice"></i><span>&nbsp;AKTA</span></a>
                                                    </td>
                                                    <td>
                                                    @php
                                                    if ($dta->dokumen_tambahan == null) {
                                                        echo "-";
                                                    }else {
                                                        
                                                    
                                                    @endphp
                                                    <a href="../../storage/{{$folder_student}}/{{$folder_doc}}/{{$file_doc}}" target='_blank' class='nav-link'><i class='fas fa-file-invoice'></i><span>&nbsp;Dokumen Tambahan</span></a>
                                                        @php
                                                    }
                                                    @endphp 
                                                    </td>
                    
                                                    <td>{{$dta->created_at}}</td>
                                                    <td>
                                                        <?php if($dta->status_permohonan =="pending" ){ ?>
                                                        <a href="{{route('detail', $dta->nik)}}" class="btn btn-warning">Lihat Permohonan</a>
                                                        <?php }elseif($dta->status_permohonan =="disetujui"){?>
                                                            <a href="" class="btn btn-info">Cetak</a>
                                                           <?php }else{ ?>
                                                            <a href="{{route('detail', $dta->nik)}}" class="btn btn-warning">Lihat Permohonan</a>
                                                           <?php }?>
                                                    </td>
                                                    <td>
                                                    <?php if($dta->status_permohonan =="pending" ){ ?>
                                                        <label class="badge badge-warning">Pending</label>
                                                        <?php }elseif($dta->status_permohonan =="disetujui"){?>
                                                            <label class="badge badge-success">Disetujui</label>
                                                           <?php }else{ ?>
                                                                 <label class="badge badge-danger">Ditolak</label>
                                                           <?php }?>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection