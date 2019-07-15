@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-5 pb-5">
        <h1>VOTING WEBSITE</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="card-deck mx-auto w-75">
                @foreach($kandidat as $kdt)
                    <div class="card">
                        <img class="rounded-circle w-75 mx-auto" src="{{asset('images/'.$kdt->fotoprofil)}}">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-center pb-2">{{$kdt->nama_kandidat}}</h5>
                            <p class="card-text pl-5">NIP : <a class="pl-lg-5">{{$kdt->nip}} </a> </p>
                            <p class="card-text text-center font-weight-bold text-success">VISI</p>
                            <p class="card-text">{{$kdt->visi}}</p>
                            <p class="card-text text-center font-weight-bold text-success">MISI</p>
                            <p class="card-text">{{$kdt->misi}}</p>
                            <!-- Berikut button untuk memunculkan dialog vote -->
                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#VotingConfirm_{{$kdt->id}}">VOTE</button>

                            <!-- Memunculkan dialog -->
                           <form action="{{route('vote')}}" method="post">
                               @csrf
                               <div class="modal fade" id="VotingConfirm_{{$kdt->id}}" tabindex="-1" role="dialog" aria-labelledby="VotingConfirm" aria-hidden="true">
                                   <div class="modal-dialog-centered modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <h5 class="modal-title" id="VotingConfirmTitle">Konfirmasi Vote</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                               </button>
                                           </div>
                                           <div class="modal-body">
                                               <p>Nama Kandidat : {{$kdt->id}}</p>
                                               <br>
                                               <h6 class="font-weight-light">Masukkan Password Untuk Konfirmasi</h6>
                                               <input class="form-control" type="password" id="pwd">
                                           </div>
                                           <div class="modal-footer">
                                               <input name="id" type="hidden" value="{{$kdt->id}}">
                                               <button type="button" class="btn-secondary" data-dismiss="modal">Batal</button>
                                               <button type="submit" class="btn-primary">Vote</button>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </form>


                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
