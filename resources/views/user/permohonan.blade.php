@extends('user.dashboard')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Pengajuan</h4>
                  <p class="card-description">
                   Masukkan Data data yang sesuai
                  </p>
                  <form class="forms-sample">
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                      <label for="exampleInputUsername1">Nama Pemohon</label>
                      <input type="text" class="form-control" name="name" id="exampleInputUsername1" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>
                      <input type="text" class="form-control" name="" id="exampleInputEmail1" placeholder="NIK">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <textarea type="text" class="form-control" name="" id="exampleInputEmail1" placeholder="Alamat"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tgl Lahir</label>
                      <input type="date" class="form-control" name="" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Tmp Lahir</label>
                      <input type="text" class="form-control" name="" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                      <label for="exampleInputEmail1">Jk</label>
                      <select class="form-control" name="" id="exampleSelectGender">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pekerjaan</label>
                      <input type="text" class="form-control" name="" id="exampleInputEmail1" placeholder="Pekerjaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Tlp</label>
                      <input type="number" class="form-control" name="" id="exampleInputEmail1" placeholder="No Telepon">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kewarganegaraan</label>
                      <select class="form-control" name="" id="exampleSelectGender">
                            <option>WNI</option>
                            <option>WNA</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status Sipil</label>
                      <select class="form-control" name="" id="exampleSelectGender">
                                <option>Menikah</option>
                                <option>Belum Menikah</option>
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