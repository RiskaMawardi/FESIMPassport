@extends('admin.dashboard')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Keimigrasian</h4>
            <p class="card-description">

            </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">

                        <label for="exampleInputUsername1">Nama Pemohon</label>
                        <input type="text" class="form-control"  id="exampleInputUsername1"
                            placeholder="Nama Lengkap" value="{{$data->nama}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" class="form-control" name="nik" id="exampleInputEmail1" placeholder="NIK"
                            value="{{$data->nik}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea type="text" class="form-control"  id="exampleInputEmail1"
                            placeholder="Alamat" readonly>{{$data->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tgl Lahir</label>
                        <input type="date" class="form-control" id="exampleInputPassword1"
                            placeholder="Password" value="{{$data->tgl_lahir}}" readonly>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">JK</label>

                        <input type="text" class="form-control" value="{{$data->jk == 1 ? 'Laki-laki' : 'Perempuan'}}"
                            readonly>


                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pekerjaan</label>
                        <input type="text" class="form-control" 
                            value="{{$data->jenis_pekerjaan}}" id="exampleInputEmail1" placeholder="Pekerjaan" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kewarganegaraan</label>
                        <input type="text" class="form-control" value="{{$data->kewarganegaraan == 1 ? 'WNI' : 'WNA'}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status Sipil</label>
                        <input type="text" class="form-control"
                            value="{{$data->status_sipil == 1 ? 'Menikah' : 'Belum Menikah'}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Tmp Lahir</label>
                    <input type="text" class="form-control"  id="exampleInputConfirmPassword1"
                        placeholder="Password" value="{{$data->tempat_lahir}}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Permohonan</h4>
            <p class="card-description">

            </p>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword4">Keberangkatan</label>
                        <input type="date" class="form-control"  id="exampleInputPassword4"
                            placeholder="Password" value="{{$data->keberangkatan}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Jenis Passpor</label>
                        <input type="text" class="form-control"
                            value="{{$data->jenis_passpor == 1 ? 'Elektronik' : 'Diplomatik'}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword4">Kepulangan</label>
                        <input type="date" class="form-control"  id="exampleInputPassword4"
                            placeholder="Password" value="{{$data->kepulangan}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Negara Tujuan</label>
                        <input type="text" class="form-control"  id="exampleInputPassword4"
                            placeholder="negara tujuan" value="{{$data->negara_tujuan}}" readonly>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">Kepentingan</label>
                <input type="text" class="form-control" value="{{$data->kepentingan == 1 ? 'Liburan' : 'Tugas'}}"
                    readonly>
            </div>
            <div class="d-flex">
                    <form method="POST" action="{{route('approve')}}">
                        @csrf
                        <input type="hidden" name="nik" value="{{$data->nik}}">
                        <input type="submit" value="Approve" class="btn btn-success me-3 mt-2">
                    </form>
                    <form method="POST" action="{{route('disapprove')}}">
                        @csrf
                        <input type="hidden" name="nik" value="{{$data->nik}}">
                        <input type="submit" value="Disapprove" class="btn btn-danger me-3 mt-2">
                    </form>
                    <div class="form-check form-check-flat form-check-primary">
                        <a  href="/dashboard-admin" class="btn btn-warning">Back</a>
                    </div>
            </div>

        </div>
    </div>
</div>
@endsection
