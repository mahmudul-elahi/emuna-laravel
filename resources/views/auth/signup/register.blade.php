@extends('master')

@section('title', 'Emuna-Signup')

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
                <li class="breadcrumb-item" aria-current="page">Sign Up</li>
            </ol>
        </nav>
    </div>

    {{--  Breadcrumb-Section-End --}}


    {{-- Form-Content-Section-Start --}}

    <section id="form-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 form-content">
                    <h1><span>{{ __('Sell') }}</span> on Emuna</h1>
                    <p>Join Emuna and get your products in front of thousands of customers through our vast network of
                        vending
                        machines. With
                        easy access to prime locations and tailored slot options.</p>
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
                        <img src="{{ asset('assets/client/images/singup-image.png') }}" alt="singup-image">
                    </div>
                </div>

                <div class="col-md-7">

                    <form class="signup-form" id="registerForm" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="first_name">First Name<span>*</span> </label>
                                    <input type="text" class="form-control" name="first_name" id="first_name"
                                        placeholder="First Name Goes Here" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="last_name">Last Name<span>*</span> </label>
                                    <input type="text" name="last_name" class="form-control" id="last_name"
                                        placeholder="Last Name Goes Here" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="phone">Phone<span>*</span> </label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="+000 123 456 7890" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="email">E-mail<span>*</span> </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="websitemail@here.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="password">Password<span>*</span> </label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="*************" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="password_confirmation">Confirm Password<span>*</span> </label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" placeholder="*************" required>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" type="button" id="registerBtn">Sign Up</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>

    {{-- Signup-Section-End --}}
@endsection
