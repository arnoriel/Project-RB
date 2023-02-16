@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Penulis</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection
@section('js')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Data Resep
                        <a href="{{route('minum.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Resep</a>
                    </div>
                    <div class="car-body">
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Cover</th>
                                    <th>Nama Resep</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1 @endphp
                                @foreach ($minum as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td><img src="{{$item->cover()}}" alt="" width="50px" height="50px"></td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->deskripsi}}</td>
                                        <td>
                                            <form action="{{route('minum.destroy',$item->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('minum.edit',$item->id)}}" class="btn btn-outline-info">Edit</a>
                                                <a href="{{route('minum.show',$item->id)}}" class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection