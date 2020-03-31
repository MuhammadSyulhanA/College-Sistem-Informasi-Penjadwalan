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

            <!-- notifikasi -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="post" action="/students">
                <!-- csrf ini fitur dari laravel buat ngamanin data dari teknik hacking csrf,
                biar lebih secure, jadi laravel butuh token yg nantinya diproses waktu penambahan data 
                dan bakal dicocokkin waktu session, kalo diinspect, data yg kita input tipenya hidden-->
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                    id="nama" placeholder="Masukkan Nama" name="nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" 
                    id="nim" placeholder="Masukkan NIM" name="nim">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" 
                    id="email" placeholder="Masukkan Email" name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" 
                    id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

@endsection