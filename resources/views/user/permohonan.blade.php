@extends('user.dashboard')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Keimigrasian</h4>
            <p class="card-description">
                Pastikan data yang anda masukkan valid.
            </p>
            <form class="forms-sample" action="{{route('uploadPermohonan')}}" method="POST">
              @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Pemohon</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputUsername1"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIK</label>
                            <input type="text" class="form-control" name="nik" id="exampleInputEmail1" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" id="exampleInputEmail1"
                                placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tgl Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Tmp Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="exampleInputConfirmPassword1"
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="hidden" value="1" name="no_kk">
                            <label for="exampleInputEmail1">Jk</label>
                            <select class="form-control" name="jk" id="exampleSelectGender">
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan</label>
                            <input type="text" class="form-control" name="jenis_pekerjaan" id="exampleInputEmail1"
                                placeholder="Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kewarganegaraan</label>
                            <select class="form-control" name="kewarganegaraan" id="exampleSelectGender">
                                <option value="1">WNI</option>
                                <option value="2">WNA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status Sipil</label>
                            <select class="form-control" name="status_sipil" id="exampleSelectGender">
                                <option value="1">Menikah</option>
                                <option value="2">Belum Menikah</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-check form-check-flat form-check-primary">

                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection
