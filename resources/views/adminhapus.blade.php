@extends('layouts.adminapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center p-5 p-5">
            <h1> ADMIN VOTING WEBSITE </h1>
        </div>
    </div>

    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="card">
                    <div class="card-header">PEMILIHAN DPD 1</div>

                    <div class="card-body">
                        <table class="table text-center table-borderless">
                            <th></th>
                            <th>Nama Kandidat</th>
                            <th>NIP</th>
                            <th>Jumlah Vote</th>
                            @foreach($kandidat1 as $kdt1)
                                <tr>
                                    <td class="w-25"><img class="rounded-circle w-50 img-fluid float-left" src="{{asset('images/'.$kdt1->fotoprofil)}}"></td>
                                    <td class="align-middle">{{$kdt1->nama_kandidat}}</td>
                                    <td class="align-middle">{{$kdt1->nip}}</td>
                                    <td class="align-middle">{{$kdt1->votes}}</td>
                                    <td class="align-middle">
                                        <form action="{{Route ('hapuskandidat')}}" method="post">
                                            @csrf
                                            <input name="id" type="hidden" value="{{$kdt1->id}}">
                                            <button type="submit" class="btn-danger btn-block">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">PEMILIHAN DPD 2</div>

                    <div class="card-body">
                        <table class="table text-center table-borderless">
                            <th></th>
                            <th>Nama Kandidat</th>
                            <th>NIP</th>
                            <th>Jumlah Vote</th>
                            @foreach($kandidat2 as $kdt2)
                                <tr>
                                    <td class="w-25"><img class="rounded-circle w-50 float-left" src="{{asset('images/'.$kdt2->fotoprofil)}}"></td>
                                    <td class="align-middle">{{$kdt2->nama_kandidat}}</td>
                                    <td class="align-middle">{{$kdt2->nip}}</td>
                                    <td class="align-middle">{{$kdt2->votes}}</td>
                                    <td class="align-middle">
                                        <form action="{{Route ('hapuskandidat')}}" method="post">
                                            @csrf
                                            <input name="id" type="hidden" value="{{$kdt2->id}}">
                                            <button type="submit" class="btn-danger btn-block">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="card">
                    <div class="card-header">PEMILIHAN DPD 3</div>

                    <div class="card-body">
                        <table class="table text-center table-borderless">
                            <th></th>
                            <th>Nama Kandidat</th>
                            <th>NIP</th>
                            <th>Jumlah Vote</th>
                            @foreach($kandidat3 as $kdt3)
                                <tr>
                                    <td class="w-25"><img class="rounded-circle w-50 float-left" src="{{asset('images/'.$kdt3->fotoprofil)}}"></td>
                                    <td class="align-middle">{{$kdt3->nama_kandidat}}</td>
                                    <td class="align-middle">{{$kdt3->nip}}</td>
                                    <td class="align-middle">{{$kdt3->votes}}</td>
                                    <td class="align-middle">
                                        <form action="{{Route ('hapuskandidat')}}" method="post">
                                            @csrf
                                            <input name="id" type="hidden" value="{{$kdt3->id}}">
                                            <button type="submit" class="btn-danger btn-block">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">PEMILIHAN DPD 4</div>

                    <div class="card-body">
                        <table class="table text-center table-borderless">
                            <th></th>
                            <th>Nama Kandidat</th>
                            <th>NIP</th>
                            <th>Jumlah Vote</th>
                            @foreach($kandidat4 as $kdt4)
                                <tr>
                                    <td class="w-25"><img class="rounded-circle w-50 float-left" src="{{asset('images/'.$kdt4->fotoprofil)}}"></td>
                                    <td class="align-middle">{{$kdt4->nama_kandidat}}</td>
                                    <td class="align-middle">{{$kdt4->nip}}</td>
                                    <td class="align-middle">{{$kdt4->votes}}</td>
                                    <td class="align-middle">
                                        <form action="{{Route ('hapuskandidat')}}" method="post">
                                            @csrf
                                            <input name="id" type="hidden" value="{{$kdt4->id}}">
                                            <button type="submit" class="btn-danger btn-block">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">

            </div>
        </div>

    </div>

@endsection