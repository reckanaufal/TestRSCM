@extends('layouts.main')
@section('content')
    <div id="site-content">
        <main class="main-content">
            <div class="container">
                <div class="page">
                    {{-- <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <span>Login</span>
                    </div> --}}
                    <div class="row justify-content-center">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('error') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="page">
                            <form action="{{ route('Registration.store') }}" method="POST" role="form"
                                enctype="multipart/form-data">
                                @csrf
                                <h1 class="h3 mb-3 fw-normal text-center">Biodata</h1>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h3>Nama</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <input required type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="col-md-2">
                                        <h3>No Handphone / Whatsapp</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <input required type="text" name="no_hp" placeholder="No Handphone / Whatsapp">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h3>Alamat</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <input required type="text" name="alamat" placeholder="Alamat Lengkap">
                                    </div>
                                    <div class="col-md-2">
                                        <h3>Nomor SIM</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <input required type="text" name="no_sim" placeholder="Nomor SIM">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h3>Email</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <input required type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-2">
                                        <h3>Password</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <input required type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                </div>
                                <br>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- .container -->
        </main>
    </div>
@endsection
