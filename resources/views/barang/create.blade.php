@extends('layout/main')

@section('title', 'Form Barang')

@section('breadcrumbs')
<h1 class="h3 mb-2 text-gray-800">Tambah Data Handphone</h1>
<p class="mb-4">Berikut ini adalah fitur untuk menambah data handphone yang masuk ke database.</p>
@endsection

@section('container')
<div class="">
    <div class="row">
        <div class="col-10">
            <form method="POST" action="/add" class="mt-2">
                @csrf
                <div class="card border-dark mb-3">
                    <div class="card-header">
                        <a href="/barang" style="text-decoration: none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>Back
                        </a>
                    </div>
                    <div class="card-body text-dark">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kode*</label>
                            <input type="text" placeholder="Masukkkan kode handphone" name="kode_hp" class="form-control" id="kode_hp" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Merk*</label>
                            <div class="form-check">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gridCheck1" value="101" name="merk">
                                <label class="form-check-label" for="gridCheck1">
                                Apple
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gridCheck1" value="102" name="merk">
                                <label class="form-check-label" for="gridCheck1">
                                Asus
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gridCheck1" value="103" name="merk">
                                <label class="form-check-label" for="gridCheck1">
                                Oppo
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gridCheck1" value="104" name="merk">
                                <label class="form-check-label" for="gridCheck1">
                                Samsung
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gridCheck1" value="105" name="merk">
                                <label class="form-check-label" for="gridCheck1">
                                Vivo
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gridCheck1" value="106" name="merk">
                                <label class="form-check-label" for="gridCheck1">
                                Xiaomi
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Seri*</label>
                            <input type="text" placeholder="Masukkkan nama handphone" class="form-control" id="nama_hp" name="nama_hp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">OS*</label>
                            <div class="form-check">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gridCheck1" value="901" name="os">
                                <label class="form-check-label" for="gridCheck1">
                                Android
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gridCheck1" value="902" name="os">
                                <label class="form-check-label" for="gridCheck1">
                                IOS
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga*</label>
                            <input type="text" placeholder="Masukkkan harga handphone" class="form-control" id="harga" name="harga">
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary">Tambah Data!</button>
                    </div>
                </div>          
            </form>
        </div> 
    </div>       
</div>
@endsection