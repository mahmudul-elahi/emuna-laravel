@extends('master')

@section('title', 'Emmuna-Franchiser')



@section('content')
    {{--  Breadcrumb-Section-Start --}}
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

    {{--  Breadcrumb-Section-End --}}


    {{--  Form-Content-Section-Start --}}

    <section id="form-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 form-content">
                    <h1><span>{{ __('Get Started') }}</span> with Emuna</h1>
                    <p>Congratulations and welcome! Sell your local product easily and conveniently! If you are
                        interested in
                        shipping your
                        products, please create a <a href="#">PayPal Account.</a></p>
                </div>
            </div>
        </div>
    </section>

    {{-- Form-Content-Section-End --}}



    {{--   Franchiser-Section-Start --}}


    <section id="franchiser">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="franchiser-header">
                        <h4>Start franchiser in 3 Steps</h4>
                    </div>


                    <div class="form">
                        <div class="step-container">
                            <div class="step-indicators">
                                <div class="circle active">1</div>
                                <div class="circle">2</div>
                                <div class="circle">3</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" id="progress" role="progressbar" style="width: 0%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-names">
                                <div class="step-name">Business Identity</div>
                                <div class="step-name">Contact Details</div>
                                <div class="step-name">Confirmation</div>
                            </div>
                        </div>

                        <form id="multiStepFormFranchiser" class="multistep-form">
                            <div class="form-step active">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="companyName">Company Name<span>*</span></label>
                                                    <input type="text" class="form-control" name="companyName"
                                                        id="companyName" placeholder="Full Name Goes Here">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="companyWebsite">Company Website<span>*</span></label>
                                                    <input type="text" class="form-control" name="companyWebsite"
                                                        id="companyWebsite" placeholder="www.companywebsite.com">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="paymentMethod">Payment Method<span>*</span></label>
                                                    <input type="text" class="form-control" name="paymentMethod"
                                                        id="paymentMethod" placeholder="PayPal">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="paypalId">PayPal ID<span>*</span></label>
                                                    <input type="text" class="form-control" name="paypalId"
                                                        id="paypalId" placeholder="1234566842">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="registrationNumber">Company Registration
                                                        Number<span>*</span></label>
                                                    <input type="text" class="form-control" name="registrationNumber"
                                                        id="registrationNumber" placeholder="Company name here">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="companyLicense">Company License<span>*</span></label>
                                                    <input type="file" class="form-control" name="companyLicense"
                                                        id="companyLicense">
                                                    <small class="text-muted">(PDF no larger than 10 MB)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="drop-image">
                                            <label class="form-label mb-0">Business Logo<span>*</span>
                                                <small class="text-muted d-block">(PDF, JPEG, PNG)</small>
                                            </label>
                                            <div id="upload-form">
                                                <div id="upload-area" class="border text-center position-relative">
                                                    <input type="file" id="fileElem" name="businessLogo"
                                                        accept="image/*" style="display: none;">
                                                    <label for="fileElem" id="file-label" class="upload-button">
                                                        <img style="width: 80px;"
                                                            src="{{ asset('assets/client/images/upload.png') }}"
                                                            alt="Upload Image">
                                                        <p>Drop Image Here <span>or <u>Upload a File</u></span></p>
                                                    </label>
                                                    <img id="preview-img" class="preview-img mt-3"
                                                        style="display: none; width: 200px;" alt="Uploaded Image">
                                                    <button type="button" id="remove-btn" class="btn btn-danger mt-3"
                                                        style="display: none; position: absolute; top: 10px; right: 10px; z-index: 10;">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary next">Next</button>
                            </div>

                            <div class="form-step">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <label for="contactName">Primary Contact Name<span>*</span></label>
                                            <input type="text" class="form-control" name="contactName"
                                                id="contactName" placeholder="Full Name Goes Here">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <label for="phoneNumber">Phone Number<span>*</span></label>
                                            <input type="text" class="form-control" name="phoneNumber"
                                                id="phoneNumber" placeholder="Company number here">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <label for="email">E-mail<span>*</span></label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Company email here">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <label for="locationName">Location Name<span>*</span></label>
                                            <input type="text" class="form-control" name="locationName"
                                                id="locationName" placeholder="Company email here">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <label for="houseNumber">House No.<span>*</span></label>
                                            <input type="text" class="form-control" name="houseNumber"
                                                id="houseNumber" placeholder="15/A">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <label for="street">Street<span>*</span></label>
                                            <input type="text" class="form-control" name="street" id="street"
                                                placeholder="15/A">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <label for="city">City<span>*</span></label>
                                            <input type="text" class="form-control" name="city" id="city"
                                                placeholder="15/A">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-5">
                                            <label for="stateCode">State-Code<span>*</span></label>
                                            <input type="text" class="form-control" name="stateCode" id="stateCode"
                                                placeholder="1702">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label>Storage Option<span>*</span></label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="storageOption"
                                                        id="option1" value="Normal" checked>
                                                    <label class="form-check-label" for="option1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="storageOption"
                                                        id="option2" value="Cooler">
                                                    <label class="form-check-label" for="option2">Cooler</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="storageOption"
                                                        id="option3" value="Freezer">
                                                    <label class="form-check-label" for="option3">Freezer</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="storageOption"
                                                        id="option4" value="All">
                                                    <label class="form-check-label" for="option4">All</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary prev">Back</button>
                                <button type="button" id="submitFranchiserData"
                                    class="btn btn-primary next">Submit</button>
                            </div>

                            <div class="form-step">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <img src="{{ asset('assets/client/images/signup-finished.png') }}"
                                                alt="signup-finished">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="text">
                                            <h3>Congratulations!</h3>
                                            <p>Your Franchisee Request Has Been Submitted. Wait for the admins to approve.
                                                We will send a confirmation mail as soon as we are done with the
                                                verifications.</p>
                                        </div>

                                        <div class="user-data">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <ul>
                                                        <li>Company Name: <span>Full Name Goes Here</span></li>
                                                        <li>Contact: <span>Full Name Goes Here</span></li>
                                                        <li>Phone: <span>+000 123 456 7890</span></li>
                                                        <li>Email: <span>emailgoeshere@demo.com</span></li>
                                                        <li>Location: <span>Full Location Goes Here..</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('dashboard') }}" class="btn btn-primary next">Back to Home</a>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </section>

    {{-- Franchiser-Section-End --}}
@endsection
