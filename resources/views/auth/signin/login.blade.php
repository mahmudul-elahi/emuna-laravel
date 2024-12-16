@extends('master')

@section('title', 'Emuna-SignIn')

@section('content')
    {{--  Breadcrumb-Section-Start --}}

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-muted text-decoration-none" href="{{ route('home') }}">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Sign in</li>
            </ol>
        </nav>
    </div>

    {{--  Breadcrumb-Section-End --}}


    {{-- Form-Content-Section-Start --}}

    <section id="form-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 form-content">
                    <h1><span>{{ __('Welcome') }}</span> to Emuna</h1>
                    <p>Log in to access your personalized dashboard. Whether you're managing sales as a seller or overseeing
                        operations as a franchisee, Emuna empowers you to drive your business forward with ease.</p>
                </div>
            </div>
        </div>
    </section>

    {{--  Form-Content-Section-End --}}


    {{-- Signup-Section-Start --}}

    <section id="signup">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="image d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/client/images/login.png') }}" alt="signin-image">
                    </div>
                </div>

                <div class="col-md-7">

                    <div class="login-heading">
                        <p>Let`s Get Started</p>
                    </div>

                    <form class="signup-form" id="loginForm" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label for="email">E-mail<span>*</span> </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="websitemail@here.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label for="password">Password<span>*</span> </label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="*************">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember" />
                                    <label class="form-check-label" for="remember"> Remember Me </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-end forgot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="d-grid pt-3">
                                <button class="btn btn-primary loginBtn" type="button">Sign In</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>

    {{-- Signup-Section-End --}}
@endsection
