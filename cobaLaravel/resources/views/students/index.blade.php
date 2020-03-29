@extends('layout.main')

@section('title', 'Daftar Students')

@section('container')
<div class="container">
    <div class="row">
        <!-- biar dia agak ke tengah -->
        <!-- kecilin nomornya biar lbh pendek kolomnya -->
        <div class="col-6">
        <!-- class mt-2 biar agak turun ke bawah -->
            <h1 class="mt-2">Daftar Students!</h1>

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                <ul class="list-group">
                    @foreach( $students as $students)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $students->nama }}
                            <!-- route model binding -->
                            <a href="/students/{{ $students->id }}" class="badge badge-info">detail</a>
                        </li>
                    @endforeach
                </ul>
        </div>
    </div>
</div>

@endsection