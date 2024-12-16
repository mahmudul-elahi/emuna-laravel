@extends('dashboard.master')

@section('content')
    <div class="vending">
        <div class="row">
            <div class="col-md-12">
                <div class="form">
                    <div class="vending-head">
                        <div class="header-text">
                            <h4>{{ __('Register Your Vending Machine on Emuna') }}</h4>
                        </div>
                        <div class="step-container">
                            <div class="step-indicators">
                                <div class="step d-flex flex-column align-items-center">
                                    <div class="circle active">1</div>
                                    <div class="step-name">Vending Details</div>
                                </div>
                                <div class="step d-flex flex-column align-items-center">
                                    <div class="circle">2</div>
                                    <div class="step-name">Location & Opening Hours</div>
                                </div>
                                <div class="step d-flex flex-column align-items-center">
                                    <div class="circle">3</div>
                                    <div class="step-name">Confirmation</div>
                                </div>

                            </div>
                            <div class="progress d-have">
                                <div class="progress-bar" id="progress" role="progressbar" style="width: 0%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <form id="multiStepFormHaveVendin" class="multistep-form">
                        {{-- Vending Details --}}

                        <div class="form-step active">
                            @include('dashboard.vending.step.dhave.step1')

                            <a href="{{ route('vending.index') }}" class="btn btn-primary cancel mt-4">Cancel</a>
                            <button type="button" class="btn btn-primary next mt-4 ml-2">Next</button>
                        </div>


                        {{-- Location & Opening Hours --}}

                        <div class="form-step locations">
                            @include('dashboard.vending.step.dhave.step2')

                            <button type="button" class="btn btn-secondary prev mt-4">Back</button>
                            <button type="button" id="submitHaveVending"
                                class="btn btn-primary next ml-2 mt-4">Next</button>
                        </div>

                        {{-- Confirmation --}}

                        <div class="form-step">
                            @include('dashboard.vending.step.dhave.step3')

                            <a href="{{ route('vending.index') }}" class="btn btn-primary next mt-4" id="homeButton">Pending
                                Locations</a>
                        </div>


                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
