@extends('layouts.member')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Detail Resep</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <br>
                            <label for=""><h5>Preview Gambar</h5></label>
                            <br>
                            </br>
                            <img src="{{$minum->cover()}}" width="500px" height="300px">
                            <br>
                            </br>
                            <div class="card border-danger mb-3">
                                <div class="card-header text-danger"><h5>Nama Resep Minuman</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$minum->nama}}</h5>
                                </div>
                              </div>
                              <br>
                              <div class="card border-danger mb-3">
                                <div class="card-header text-danger"><h5>Deskripsi</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$minum->deskripsi}}</h5>
                                </div>
                              </div>
                              <br>
                              <div class="card border-danger mb-3">
                                <div class="card-header text-danger"><h5>Bahan Minuman</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$minum->bahan}}</h5>
                                </div>
                              </div>
                            <br>
                              <div class="card border-danger mb-3">
                                <div class="card-header text-danger"><h5>Cara Membuat</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$minum->caramembuat}}</h5>
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <br>
                            <center>
                            <a href="{{url('/member/resep#menu')}}" class="btn btn-block btn-outline-danger">Kembali</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection