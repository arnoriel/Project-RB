@extends('layouts.admin')

@section('content')

<main id="main" class="main">

  <h1>Halo, <strong>{{ Auth::user()->name }}</strong></h1>
  <p>Silahkan masuk ke Menu Resep</p>  

@endsection