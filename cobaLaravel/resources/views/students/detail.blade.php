@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <!-- biar dia agak ke tengah -->
        <!-- kecilin nomornya biar lbh pendek kolomnya -->
        <div class="col-6">
        <!-- class mt-2 biar agak turun ke bawah -->
            <h1 class="mt-2">Detail Students!</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim}}</h6>
                    <p class="card-text">{{ $student->email}}</p>
                    <p class="card-text">{{ $student->jurusan}}</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection