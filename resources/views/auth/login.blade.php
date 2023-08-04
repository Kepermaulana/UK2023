@extends('layouts.applogin')
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-12 col-md-12 col-xl-6 my-5">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{route('masyarakat.login')}}" method="POST">
                            @csrf
                            <h3 class="text-center mb-3">Aplikasi Pengaduan Masyarakat</h3>
                            <div class="form-group">
                             <label for="username">Username</label>
                             <input type="text" name="username" id="" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                             <label for="password">Password</label>
                             <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary form-control" >Login</button>
                            </div>
                            <hr>
                            <div class="form-group text-center">
                                <a href="/login">Registrasi</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection