@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <!-- biar dia agak ke tengah -->
        <!-- kecilin nomornya biar lbh pendek kolomnya -->
        <div class="col-6">
        <!-- class mt-2 biar agak turun ke bawah -->
            <h1 class="mt-2">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="/students">
                <!-- csrf ini fitur dari laravel buat ngamanin data dari teknik hacking csrf,
                biar lebih secure, jadi laravel butuh token yg nantinya diproses waktu penambahan data 
                dan bakal dicocokkin waktu session, kalo diinspect, data yg kita input tipenya hidden-->
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama"
                    placeholder="Masukkan Nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim"
                    placeholder="Masukkan NIM" name="nim">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email"
                    placeholder="Masukkan Email" name="email">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan"
                    placeholder="Masukkan Jurusan" name="jurusan">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

@endsection