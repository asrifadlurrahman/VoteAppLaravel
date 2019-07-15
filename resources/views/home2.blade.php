@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center p-5 pb-5">
            <h1>VOTING WEBSITE</h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center p-5 pb-5">
            <h3>Terima Kasih Anda Sudah Melakukan Vote</h3>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-danger" href="{{route('logout')}}">LOGOUT</a>
        </div>
    </div>

@endsection