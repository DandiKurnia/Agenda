@extends('login.layouts.main')

@section('container')
            <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    {{-- Error Alert --}}
                                    {{-- @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif --}}
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Register</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="/register" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Nama Guru</label>
                                                <input class="form-control py-4 @error('name') is-invalid @enderror" id="inputPassword" type="text" name="name" placeholder="Masukkan Nama Guru" required/>
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                {{-- @error('login_gagal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                                                        <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    @enderror --}}
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-4 @error('username') is-invalid @enderror" id="inputEmailAddress" name="username" type="text" placeholder="Masukkan Username" required/>
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4 @error('password') is-invalid @enderror" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" required/>
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <select class="form-select" name="role" aria-label="Default select example" required>
                                                    <option selected>Role</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="guru">Guru</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            {{-- <a href="{{url('register')}}">Belum Punya Akun? Daftar!</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
@endsection
