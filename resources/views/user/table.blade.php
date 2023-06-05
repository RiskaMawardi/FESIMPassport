@extends('user.dashboard')
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
                            <th>NIK.</th>
                            <th>TGL PENGAJUAN</th>
                            <th>Detail Pengajuan</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dt)
                        <tr>
                            <td>{{$dt->nama}}</td>
                            <td>{{$dt->nik}}</td>
                            <td>{{$dt->created_at}}</td>
                            <td>
                                <a href="" class="btn btn-warning">Lihat</a>
                            </td>
                            <td>
                                <?php if($dt->status_permohonan =="pending" ){ ?>
                                    <label class="badge badge-warning">Pending</label>
                                    <?php }elseif($dt->status_permohonan =="disetujui"){?>
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
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card bg-facebook d-flex align-items-center">
            <div class="card-body ">
                <div
                    class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                    <i class="mdi mdi-account-plus text-white icon-lg"></i>
                    <div class="ms-3">
                        <a class="text-white font-weight-bold text-decoration-none" href="/pengajuan">Ajukan
                            Permohonan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
