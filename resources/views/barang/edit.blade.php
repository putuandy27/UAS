@extends('layout.main')

@section('title', 'Form Handphone')

@section('breadcrumbs')
<h1 class="h3 mb-2 text-gray-800">Edit Data Handphone</h1>
<p class="mb-4">Berikut ini adalah fitur untuk mengedit data handphone yang ada di dalam database.</p>
@endsection

@section('container')
<div class="">
    <div class="row">
        <div class="col-10">
            <div class="card border-dark mb-3">
                <div class="card-header">
                    <a href="/barang" style="text-decoration: none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>Back
                    </a>
                </div>
                <div class="card-body text-dark">
                  <form method="POST" action="/update/{{ $handphones->id }}">
                        @csrf
                        <div class="mb-3">
                            <label for="inputEmail3" class="form-label">Kode*</label>
                            <input class="form-control" type="text" value=" {{ $handphones->kode_hp }} " readonly>                         
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword3" class="form-label">Merk*</label>
                            <input class="form-control" type="text" value=" {{ $handphones->nama_merk }} " readonly>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword3" class="form-label">Seri*</label>
                            <input class="form-control" type="text" value=" {{ $handphones->nama_hp }} " readonly>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword3" class="form-label">OS*</label>
                            <input class="form-control" type="text" value=" {{ $handphones->nama_os }} " readonly>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword3" class="form-label">Harga*</label>
                            <input class="form-control" type="text" name="harga" value=" {{ number_format($handphones->harga) }} ">
                        </div>
                        <button type="submit" class="mt-3 btn btn-success">Edit!</button>
                  </form>
                </div>
            </div>
        </div> 
    </div>       
</div>
@endsection