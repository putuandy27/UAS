@extends('layout.main')

@section('title', 'About')

@section('breadcrumbs')
<h1 class="h3 mb-2 text-gray-800">About</h1>
<p class="mb-4">Ini adalah data diri saya.</p>
@endsection

@section('container')
    <div class="text-center">
        <div class="row">
            <div class="col text-center">
                <div class="jumbotron text-center">
                    <h1 class="display-4">Selamat Datang!</h1>
                    <p class="lead">Ini adalah project UAS CRUD sederhana</p>
                    <p class="lead">oleh:</p>
                    <hr class="my-4">
                    <p>Putu Andy Novit Pranartha</p>
                    <p>19101359</p>
                    <p>AD - PEMROGRAMAN WEB II</p>
                    <p>TI-MTI</p>
                </div>
            </div>
        </div>
    </div>
@endsection