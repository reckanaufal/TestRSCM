@extends('layouts.main')
@section('content')
    <div id="site-content">
        <main class="main-content">
            <div class="container">
                <div class="page">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <span>Login</span>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-5">

                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('loginError') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <div class="page">
                                <form action="/login" method="post">
                                    @csrf
                                    <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="floatingInput"
                                            placeholder="name@example.com" autofocus required>
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password"
                                            id="floatingPassword" placeholder="Password" autofocus required>
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <br>
                                    <button class="w-100 btn btn-lg btn-primary" style="text-white" type="submit">Login</button>
                                </form>
                            </div>
                            <small class="d-block text-center mt-3">Not register ? <a href="/register">Register Now</a></small>
                        </div>
                    </div>

                </div>
            </div> <!-- .container -->
        </main>
    </div>
@endsection
