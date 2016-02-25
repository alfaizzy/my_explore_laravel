@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang Di Aplikasi bla"</div>

                <div class="panel-body">
                   <a class="btn btn-link" href="{{ url('/login') }}">Masuk</a>
                   <a class="btn btn-link" href="{{ url('/register') }}">Daftar Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
