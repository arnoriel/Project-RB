@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tentang Resep</h1>
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
                    <div class="card-header">Resep</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Cover</label>
                            <br>
                            <img src="{{$resep->cover()}}" width="100px" height="100px">
                            <label for="">Nama Resep</label>
                            <input type="text" name="nama" value="{{$resep->title}}" class="form-control" readonly>
                            <label for="">Deskripsi</label>
                            <input type="text" name="deskripsi" value="{{$resep->deskripsi}}" class="form-control" readonly>
                            <label for="">Bahan</label>
                            <input type="text" name="bahan" value="{{$resep->bahan}}" class="form-control" readonly>
                            <label for="">Bumbu</label>
                            <input type="text" name="bumbu" value="{{$resep->bumbu}}" class="form-control" readonly>
                            <label for="">Bahan Cemplung</label>
                            <input type="text" name="bahancemplung" value="{{$resep->bahancemplung}}" class="form-control" readonly>
                            <label for="">Cara Membuat</label>
                            <input type="text" name="caramembuat" value="{{$resep->caramembuat}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{url('/administrator/resep')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection