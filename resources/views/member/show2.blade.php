@extends('layouts.member')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Resep Lengkap</h1>
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
                            <label for=""><h5>Gambar Masakkan</h5></label>
                            <br>
                            </br>
                            <img src="{{$resep->cover()}}" width="500px" height="300px">
                            <br>
                            </br>
                            <div class="card">
                                <div class="card-header"><h5>Nama Resep</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$resep->nama}}</h5>
                                </div>
                              </div>
                              <br>
                              <div class="card">
                                <div class="card-header"><h5>Deskripsi</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$resep->deskripsi}}</h5>
                                </div>
                              </div>
                              <br>
                              <div class="card">
                                <div class="card-header"><h5>Bahan Resep</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$resep->bahan}}</h5>
                                </div>
                              </div>
                              <br>
                              <div class="card">
                                <div class="card-header"><h5>Bumbu Resep</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$resep->bumbu}}</h5>
                                </div>
                            </div>
                              <br>
                              <div class="card">
                                <div class="card-header"><h5>Bahan Cemplung</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$resep->bahancemplung}}</h5>
                                </div>
                              </div>
                            <br>
                              <div class="card">
                                <div class="card-header"><h5>Cara Membuat</h5></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$resep->caramembuat}}</h5>
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <br>
                            <center>
                            <a href="{{url('/member/resep')}}" class="btn btn-block btn-outline-danger">Kembali</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection