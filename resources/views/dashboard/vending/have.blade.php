@extends('dashboard.master')

@section('content')
    <div class="vending">
        <div class="row">
            <div class="col-md-12">
                <div class="form">
                    <div class="vending-head">
                        <div class="header-text">
                            <h4>{{ __('Add New Vending Machine') }}</h4>
                        </div>

                        <div class="step-container">
                            <div class="step-indicators">
                                <div class="step d-flex flex-column align-items-center">
                                    <div class="circle active">1</div>
                                    <div class="step-name">Basic Details</div>
                                </div>
                                <div class="step d-flex flex-column align-items-center">
                                    <div class="circle">2</div>
                                    <div class="step-name">Operational Info</div>
                                </div>
                                <div class="step d-flex flex-column align-items-center">
                                    <div class="circle">3</div>
                                    <div class="step-name">Opening Hours</div>
                                </div>
                                <div class="step d-flex flex-column align-items-center">
                                    <div class="circle">4</div>
                                    <div class="step-name">Configure</div>
                                </div>

                            </div>
                            <div class="progress have">
                                <div class="progress-bar" id="progress" role="progressbar" style="width: 0%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <form id="multiStepFormSeller" class="multistep-form">

                        {{-- Machine Information --}}
                        <div class="form-step active">
                            @include('dashboard.vending.step.have.step1')

                            <a href="{{ route('vending.index') }}" class="btn btn-primary cancel mt-4">Cancel</a>
                            <button type="button" class="btn btn-primary next mt-4 ml-2">Next</button>
                        </div>

                        {{-- Machine Information End --}}


                        {{-- Contact & Operational Info --}}
                        <div class="form-step">
                            @include('dashboard.vending.step.have.step2')

                            <a href="{{ route('vending.index') }}" class="btn btn-primary cancel mt-4">Cancel</a>
                            <button type="button" class="btn btn-primary next mt-4 ml-2">Next</button>
                        </div>

                        {{-- Contact & Operational Info End --}}


                        {{-- Location & Opening Hours --}}
                        <div class="form-step locations">
                            @include('dashboard.vending.step.have.step3')

                            <button type="button" class="btn btn-secondary prev mt-4">Back</button>
                            <button type="button" class="btn btn-primary next ml-2 mt-4">Next</button>
                        </div>
                        {{-- Location & Opening Hours End --}}

                        <div class="form-step">
                            @include('dashboard.vending.step.have.step4')

                            <button type="button" class="btn btn-secondary prev mt-4">Back</button>
                            <button type="button" class="btn btn-primary next ml-2 mt-4" data-toggle="modal"
                                data-target="#exampleModal">
                                Complete
                            </button>
                        </div>

                        {{-- Confirmation --}}


                    </form>
                </div>


            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row align-items-center p-4">
                        <div class="col-md-4">
                            <div class="img">
                                <img src="{{ asset('assets/client/images/signup-finished.png') }}" alt="signup-finished"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="text d-flex justify-content-between">
                                <h3>Vending Machine Added</h3>
                                <a class="close" href="{{ route('vending.index') }}">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>

                            <div class="user-data">
                                <ul>
                                    <li>Machine ID: <span>123456</span></li>
                                    <li>Location: <span>Full Location Goes Here..</span></li>
                                    <li>Model Name: <span>Model Name Goes Here</span></li>
                                    <li>Payment Methods: <span>Payment Goes Here</span></li>
                                </ul>
                            </div>

                            <div class="d-grid mt-3">
                                <a class="btn back-to-vending w-100" href="http://127.0.0.1:8000/dashboard/vending">My
                                    Vending
                                    Machines</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
