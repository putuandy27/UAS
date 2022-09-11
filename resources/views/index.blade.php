@extends('layout.main')

@section('title', 'Home')

@section('breadcrumbs')
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
<p class="mb-4">Ini adalah tugas UAS untuk Project CRUD saya.</p>
@endsection

@section('container')
    <div class="text-center mt-3">
        <div class="row">
            <div class="col text-center">
                <div class="jumbotron">
                    <h1 class="display-4">Hello, world!</h1>
                    <p class="lead">Project UAS</p>
                    <hr class="my-4">
                    <p>CRUD sederhana klik dibawah ini.</p>
                    <a class="btn btn-primary btn-lg" href="{{ url('/barang') }}" role="button">Lets'go</a>
                </div>
            </div>
        </div>
    </div>
@endsection