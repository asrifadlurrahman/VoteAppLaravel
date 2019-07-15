@extends('layouts.adminapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center p-5 p-5">
            <h1> ADMIN VOTING WEBSITE </h1>

            <div class="col-md-8">
                <div class="card rounded">
                    <div class="card-header">Tambah Kandidat</div>

                    <div class="card-body">
                        <form action="{{Route ('tambahkandidat')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Kandidat</label>
                                <div class="col-md-6">
                                    <input type="text" name="nama" required="required">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nip" class="col-md-4 col-form-label text-md-right">NIP</label>
                                <div class="col-md-6">
                                    <input type="number" name="nip" required="required">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="visi" class="col-md-4 col-form-label text-md-right">Visi</label>
                                <div class="col-md-6">
                                    <textarea type="text" name="visi" required="required" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="misi" class="col-md-4 col-form-label text-md-right">Misi</label>
                                <div class="col-md-6">
                                    <textarea type="text" name="misi" required="required" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nodpd" class="col-md-4 col-form-label text-md-right">NIP</label>
                                <div class="col-md-6">
                                    <input type="number" name="nodpd" required="required" min="1" max="4">
                                </div>
                            </div>

                            <div class="form form-group row">
                                <label for="fotoprofil" class="col-md-4 col-form-label text-md-right">Foto Profil</label>
                                <div class="col-md-6">
                                    <input type="file" name="fotoprofil" required="required" class="validate">
                                </div>
                            </div>



                                <button type="submit" class="btn-primary float-right btn-lg" value="Submit Data">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>






@endsection