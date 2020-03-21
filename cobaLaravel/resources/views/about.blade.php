@extends('layout.main')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <!-- biar dia agak ke tengah -->
        <div class="col-10">
        <!-- class mt-2 biar agak turun ke bawah -->
            <h1 class="mt-2">Ini halaman About!</h1>
            <p>Hello, {{$nama}}</p>
            <!-- bisa juga pake ini :
            <?php echo $nama; ?>
            <?= $nama ?> -->
        </div>
    </div>
</div>

@endsection