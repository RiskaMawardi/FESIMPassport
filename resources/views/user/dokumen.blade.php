@extends('user.dashboard')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
    @if (Session::get('errors'))
    <div class="alert alert-danger">
        {{Session::get('errors')}}
    </div>
@endif
        <div class="card-body">
            <h4 class="card-title">Upload Dokumen</h4>
            <p class="card-description">
                Pastikan Dokumen yang disiapkan sesuai yang diminta
            </p>
            <form class="forms-sample" action="{{route('uploadDoc')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">KK</label>
                            <input type="file" class="form-control"  name="kk" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">KTP</label>
                            <input type="file" class="form-control"  name="ktp" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Akta</label>
                            <input type="file" class="form-control"  name="akta" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Ijazah/Akta perkawinan/Buku Nikah/Surat
                                Baptis (Optional)</label>
                            <input type="file" class="form-control"  name="dokumen_tambahan" id="exampleInputEmail3" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword4">Keberangkatan</label>
                            <input type="date" class="form-control"  name="keberangkatan" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Jenis Passpor</label>
                            <select class="form-control"  name="jenis_passpor" id="exampleSelectGender">
                                <option value="1">Elektronik</option>
                                <option value="2">Diplomatik</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword4">Kepulangan</label>
                            <input type="date" class="form-control"  name="kepulangan" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Negara Tujuan</label>
                            <input type="text" class="form-control"  name="negara_tujuan" id="exampleInputPassword4"
                                placeholder="negara tujuan">
                        </div>
                       
                    </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputPassword4">Kepentingan</label>
                            <select class="form-control"  name="kepentingan" id="exampleSelectGender">
                                <option value="1">Liburan</option>
                                <option value="2">Tugas</option>
                            </select>
                        </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection
