@extends('layouts.applogin')
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-12 col-md-12 col-xl-6 ">
            <div class="card shadow">
                <div class="card-body">
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('masyarakat.register')}}" method="POST">
                            @csrf
                            <h3 class="text-center mb-3">Registrasi Admin</h3>                          
                            <div class="form-group">
                                <label for="nama">NAMA Petugas</label>
                                <input type="text" name="nama" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telp">TELP</label>
                                <input type="text" name="telp" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select name="level" id="level" class="form-control">
                                    <option value="admin">Administrator</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary form-control">Login</button>
                            </div>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection