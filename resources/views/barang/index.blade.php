@extends('layout.main')

@section('title', 'Daftar Barang')

@section('breadcrumbs')
<h1 class="h3 mb-2 text-gray-800">Tables Handphones</h1>
<p class="mb-4">Berikut ini adalah data dari tables handphones yang ada di dalam database.</p>
@endsection

@section('search')
    
@endsection

@section('container')
    <div class="">
        <div class="row">
            <div class="col-10">
                {{-- <h1 class="mt-3 mb-3">Daftar Barang</h1> --}}
                
                @if (session('status'))
                    <div class="alert alert-primary">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('ubah'))
                    <div class="alert alert-success">
                        {{ session('ubah') }}
                    </div>
                @endif
                @if (session('hapus'))
                    <div class="alert alert-danger">
                        {{ session('hapus') }}
                    </div>
                @endif

                <a href="/tambah" class="btn btn-primary mt-1 mb-4">Tambah Data Barang!</a>
                
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Handphones</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Merk</th>
                            <th>Seri</th>
                            <th>OS</th>
                            <th>Salary</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $handphones as $hp )
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $hp->kode_hp }} </td>
                            <td> {{ $hp->nama_merk }} </td>
                            <td> {{ $hp->nama_hp }} </td>
                            <td> {{ $hp->nama_os }} </td>
                            <td> {{ 'Rp. ' . number_format($hp->harga) }} </td>
                            <td>
                                <a href="/edit/{{ $hp->id }}" class="badge badge-success">edit</a>
                                <a href="/hapus/{{ $hp->id }}" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection