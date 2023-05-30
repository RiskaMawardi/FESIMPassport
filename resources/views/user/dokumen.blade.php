@extends('user.dashboard')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Upload Dokumen</h4>
            <p class="card-description">
                Pastikan Dokumen yang disiapkan sesuai yang diminta
            </p>
            <form class="forms-sample">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">KK</label>
                            <input type="file" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">KTP</label>
                            <input type="file" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Akta/Ijazah/Akta perkawinan/Buku Nikah/Surat
                                Baptis</label>
                            <input type="file" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword4">Keberangkatan</label>
                            <input type="date" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Jenis Passpor</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Elektronik</option>
                                <option>Diplomatik</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword4">Kepulangan</label>
                            <input type="date" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Negara Tujuan</label>
                            <input type="text" class="form-control" id="exampleInputPassword4"
                                placeholder="negara tujuan">
                        </div>
                       
                    </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputPassword4">Kepentingan</label>
                            <input type="text" class="form-control" id="exampleInputPassword4"
                                placeholder="negara tujuan">
                        </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection
