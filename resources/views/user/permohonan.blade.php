@extends('user.dashboard')

@section('content')
<form class="forms-sample" action="{{route('uploadPermohonan')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Keimigrasian</h4>
                <p class="card-description">
                    Pastikan data yang anda masukkan valid.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="nik" value={{}}>
                            <label for="exampleInputUsername1">Nama Pemohon</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputUsername1"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIK</label>
                            <input type="text" class="form-control" name="nik" id="exampleInputEmail1"
                                placeholder="NIK">
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
                            <input type="text" class="form-control" name="tempat_lahir"
                                id="exampleInputConfirmPassword1" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
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
                <div class="btn btn-light" onclick="showHide()" id="show-hide-btn">Tampilkan Upload Dokumen</div>
                </div>


            </div>
        </div>
    </div>
    <div class="col-md-12 grid-margin stretch-card" id="show-hide" style="display:none">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Dokumen</h4>
                <p class="card-description">
                    Pastikan Dokumen yang disiapkan sesuai yang diminta
                </p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">KK</label>
                                <input type="file" class="form-control" name="kk" id="exampleInputName1"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">KTP</label>
                                <input type="file" class="form-control" name="ktp" id="exampleInputEmail3"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Akta</label>
                                <input type="file" class="form-control" name="akta" id="exampleInputPassword4"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Ijazah/Akta perkawinan/Buku Nikah/Surat
                                    Baptis (Optional)</label>
                                <input type="file" class="form-control" name="dokumen_tambahan" id="exampleInputEmail3"
                                    placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword4">Keberangkatan</label>
                                <input type="date" class="form-control" name="keberangkatan" id="exampleInputPassword4"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Jenis Passpor</label>
                                <select class="form-control" name="jenis_passpor" id="exampleSelectGender">
                                    <option value="1">Elektronik</option>
                                    <option value="2">Diplomatik</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword4">Kepulangan</label>
                                <input type="date" class="form-control" name="kepulangan" id="exampleInputPassword4"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Negara Tujuan</label>
                                <input type="text" class="form-control" name="negara_tujuan" id="exampleInputPassword4"
                                    placeholder="negara tujuan">
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Kepentingan</label>
                        <select class="form-control" name="kepentingan" id="exampleSelectGender">
                            <option value="1">Liburan</option>
                            <option value="2">Tugas</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
            </div>
        </div>
    </div>
</form>

@endsection

@section('script')
<script>
    let el = document.querySelector('#show-hide');
    let elBtn = document.querySelector('#show-hide-btn');
    function showHide()
    {
        if (el.style.display == 'block') {
            el.style.display = 'none';
            elBtn.innerText = 'Tampilkan Upload Dokumen';
        }else {
            el.style.display = 'block';
            elBtn.innerText = 'Sembunyikan Upload Dokumen';
        }
    }
</script>
@endsection
