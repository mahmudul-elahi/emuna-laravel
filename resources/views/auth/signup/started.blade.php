@extends('master')

@section('title', 'Emuna-Get Started')

@section('content')
    {{-- Breadcrumb-Section-Start --}}
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-muted text-decoration-none" href="#">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Sign Up</li>
            </ol>
        </nav>
    </div>

    {{-- Breadcrumb-Section-End --}}


    {{-- Form-Content-Section-Start --}}

    <section id="form-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 form-content">
                    <h1><span>{{ __('Get started') }}</span> with Emuna</h1>
                    <p>Congratulations and welcome! Sell your local product easily and conveniently! If you are
                        interested in
                        shipping your
                        products, please create a <a href="#">PayPal Account.</a></p>
                </div>
            </div>
        </div>
    </section>

    {{--  Form-Content-Section-End --}}



    {{-- Role-Section-Start --}}

    <section id="role">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="role-shadow">

                        <div class="role-header">
                            <h4>Select what you will do-</h4>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="role-card">
                                    <div class="role-card-header">
                                        <h4>Sell on Emuna</h4>
                                        <p class="mb-0">Sell online or in Emuna Stores for free. Increase visibility
                                            with alternative
                                            product
                                            suggestions and
                                            engage in active
                                            marketing</p>
                                    </div>
                                    <div class="role-card-body">
                                        <h5>Key Benefits</h5>
                                        <ul>
                                            <li>
                                                <p>Sell Online or Post your locations Free</p>
                                            </li>
                                            <li>
                                                <p>Send products to Emuna Stores for Offline Sales</p>
                                            </li>
                                            <li>
                                                <p>Engage in Active marketing</p>
                                            </li>
                                            <li>
                                                <p>Choose between 3,6 or 12 Months flexible plans.</p>
                                            </li>
                                        </ul>

                                        <div class="d-grid mt-4">
                                            <a class="btn btn-primary" href="{{ route('user.seller') }}">Proceed as a
                                                Seller</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="role-card">
                                    <div class="role-card-header">
                                        <h4>Start Your Own Business</h4>
                                        <p class="mb-0">Earn with a free Emuna vending machine. Suggest your store
                                            location, sell
                                            alternative
                                            products, and
                                            earn commissions.</p>
                                    </div>
                                    <div class="role-card-body">
                                        <h5>Key Benefits</h5>
                                        <ul>
                                            <li>
                                                <p>Get a free Emuna vending machine</p>
                                            </li>
                                            <li>
                                                <p>Earn a minimum of €1,000 profit per store</p>
                                            </li>
                                            <li>
                                                <p>Receive commissions from store sales</p>
                                            </li>
                                            <li>
                                                <p>Start your own business by suggesting locations</p>
                                            </li>
                                        </ul>

                                        <div class="d-grid mt-4">
                                            <a class="btn btn-primary" href="{{ route('user.franchiser') }}">Proceed as a
                                                Franchisee</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    {{--  Role-Section-End --}}

@endsection
