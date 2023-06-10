@extends('admin.dashboard')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Upload foto</h4>
            <p class="card-description">
                Gunakan foto formal
            </p>
            <div class="row">
                <form action="/insert-foto" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="nik" value="{{$data->nik}}">
                            <input type="hidden" name="kode_negara" value="{{$data->kewarganegaraan == 1 ? 'IDN' : 'WNA'}}">
                            <input type="hidden" name="kantor" value="Imigrasi Indonesia"> 
                            <label for="exampleInputName1">Pas Foto</label>
                            <input type="file" class="form-control" name="foto" id="exampleInputName1"
                                placeholder="Name">
                        </div>

                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                        <button type="submit" class="btn btn-primary"  id="show-hide-btn">cetak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
