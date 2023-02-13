@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>Data Resep</h1></div>
                <div class="card-body">
                    <form action="{{route('resep.update',$resep->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Cover</label>
                            <input type="file" name="cover" value="{{$resep->cover}}" class="form-control @error('cover') is-invalid @enderror">
                            {{-- <img src="{{$resep->cover()}}" alt=""> --}}
                            @error('cover')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" value="{{$resep->nama}}" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <input type="text" name="deskripsi" value="{{$resep->deskripsi}}" class="form-control @error('deskripsi') is-invalid @enderror">
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Bahan</label>
                            <input type="text" name="bahan" value="{{$resep->bahan}}" class="form-control @error('bahan') is-invalid @enderror">
                            @error('bahan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Bumbu</label>
                            <input type="text" name="bumbu" value="{{$resep->bumbu}}" class="form-control @error('bumbu') is-invalid @enderror">
                            @error('bumbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Bahan Cemplung</label>
                            <input type="text" name="bahancemplung" value="{{$resep->bahancemplung}}" class="form-control @error('bahancemplung') is-invalid @enderror">
                            @error('bahancemplung')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Cara Membuat</label>
                            <input type="text" name="caramembuat" value="{{$resep->caramembuat}}" class="form-control @error('caramembuat') is-invalid @enderror">
                            @error('caramembuat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection