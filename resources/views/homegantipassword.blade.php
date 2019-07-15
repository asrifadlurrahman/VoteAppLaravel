@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center p-5 pb-5">
            <h1>VOTING WEBSITE</h1>
        </div>
        <div class="row justify-content-center p-5 pb-5">
            <div class="card">
                <div class="card-header">Form Ganti Password</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="password" class="col-md-8 center">Silahkan Ganti Password Terlebih Dahulu!!</label>
                        <form method="post" action="{{Route ('gantipassword')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" min="8">

{{--                                @error('password')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
                            </div>
                            <button type="submit" class="btn-primary" value="Submit Data">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection