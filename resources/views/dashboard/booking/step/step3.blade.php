                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <div class="shorting px-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="m-0">Apply Filters</p>
                                        <button class="btn btn-sm text-primary p-0"
                                            style="padding: 0 !important; background: none;">Clear All</button>
                                    </div>

                                    <hr>

                                    <div class="range-type mt-3">
                                        <p class="m-0 mb-1">Machine Type:</p>
                                        <input type="range" class="form-range" id="customRange1">

                                        <div class="d-flex justify-content-between">
                                            <span class="badge-custom px-3">Mix</span>
                                            <span class="badge-custom px-3">Max</span>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="range-type mt-3">
                                        <p class="m-0 mb-1">Filter by Location:</p>
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="py-1 px-1">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="city" placeholder="City">
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="py-1 px-1">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="city" placeholder="City">
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="py-1 px-1">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="city" placeholder="City">
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="py-1 px-1">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="city" placeholder="City">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="range-type mt-3">
                                        <p class="m-0 mb-2">Distance Range</p>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label fw-normal" for="flexCheckDefault">
                                                <small>10-20 Km</small>
                                            </label>

                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label fw-normal" for="flexCheckDefault">
                                                <small>10-20 Km</small>
                                            </label>

                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label fw-normal" for="flexCheckDefault">
                                                <small>10-20 Km</small>
                                            </label>

                                        </div>

                                    </div>

                                    <hr>


                                    <div class="range-type mt-3">
                                        <p class="m-0 mb-2">Ratings</p>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label fw-normal" for="flexCheckDefault">
                                                <small>10-20 Km</small>
                                            </label>

                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label fw-normal" for="flexCheckDefault">
                                                <small>10-20 Km</small>
                                            </label>

                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label fw-normal" for="flexCheckDefault">
                                                <small>10-20 Km</small>
                                            </label>

                                        </div>

                                    </div>


                                </div>

                            </div>


                            <div class="col-md-7">
                                <div class="p-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="m-0">50 Available Vending Locations</p>
                                    </div>

                                    <hr>
                                    <div class="location-list">
                                        <div class="location-card mb-4 location">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="left">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="img" style="height: 70%">
                                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                                        alt="" class="h-100">
                                                                </div>

                                                                <div class="img-group pt-2" style="height: 27%">
                                                                    <div class="row no-gutters h-100">
                                                                        <div class="col-md-4">
                                                                            <div class="pr-1 h-100">
                                                                                <img class=" h-100"
                                                                                    src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="pr-1 h-100">
                                                                                <img class=" h-100"
                                                                                    src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="pr-1 h-100">
                                                                                <img class=" h-100"
                                                                                    src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5>Full Location Name</h5>

                                                                <div>
                                                                    <p>Commission: <span>10%</span></p>
                                                                    <p>Available Slots: <span>20</span></p>
                                                                </div>

                                                                <div class="payment-system">
                                                                    <p><strong>Payment
                                                                            Methods:</strong>
                                                                    </p>
                                                                    <div class="d-flex" style="gap: 6px;">
                                                                        <span>
                                                                            <i class="icon bi bi-cash"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="icon bi bi-credit-card"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="icon bi bi-phone"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="icon bi bi-paypal"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="availability mt-2">
                                                            <p><strong>Availability:</strong></p>
                                                            <div class="d-flex">
                                                                <span class="badge-custom">Mon - Fri (9am -
                                                                    6pm)</span>
                                                                <span class="badge-custom">Sat (9am -
                                                                    12pm)</span>
                                                            </div>
                                                        </div>

                                                        <div class="machine-type mt-3">
                                                            <p class="mt-3"><strong>Machine Type:</strong>
                                                            </p>
                                                            <span class="badge-custom">Outdoor</span>
                                                            <span class="badge-custom">Public</span>
                                                        </div>

                                                        <p class="mt-4 mrev">Price (Random Slot): <span
                                                                class="monthly-revenue d-block">$20.00</span>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="right">
                                                        <div class="best">

                                                            <div class="nearby">
                                                                <p><strong>Ratings:</strong></p>
                                                                <div class="text-muted">
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    4.9
                                                                </div>
                                                            </div>

                                                            <div class="nearby mt-3">
                                                                <p class="mt-3"><strong>Nearby:</strong></p>
                                                                <div class="d-flex flex-wrap">
                                                                    <span class="badge-custom">Hospital</span>
                                                                    <span class="badge-custom">School</span>
                                                                    <span class="badge-custom">Play
                                                                        Ground</span>
                                                                    <span class="badge-custom">+5</span>
                                                                </div>
                                                            </div>

                                                            <p class="mt-3"><strong>Best Selling:</strong>
                                                            </p>
                                                            <div class="best-worst-selling">
                                                                <img style="height: 20px; width: auto;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="Product Image">
                                                                <span>Product Full Name Goes Here...</span>
                                                            </div>
                                                        </div>


                                                        <div class="worst">
                                                            <p class="mt-3"><strong>Worst Selling:</strong>
                                                            </p>
                                                            <div class="best-worst-selling">
                                                                <img style="height: 20px; width: auto;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="Product Image">
                                                                <span>Product Full Name Goes Here...</span>
                                                            </div>
                                                        </div>

                                                        <p class="mt-3 mrev">Monthly Revenue: <span
                                                                class="monthly-revenue d-block">$20.00</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="location-card mb-4 location">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="left">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="img" style="height: 70%">
                                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                                        alt="" class="h-100">
                                                                </div>

                                                                <div class="img-group pt-2" style="height: 27%">
                                                                    <div class="row no-gutters h-100">
                                                                        <div class="col-md-4">
                                                                            <div class="pr-1 h-100">
                                                                                <img class=" h-100"
                                                                                    src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="pr-1 h-100">
                                                                                <img class=" h-100"
                                                                                    src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="pr-1 h-100">
                                                                                <img class=" h-100"
                                                                                    src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5>Full Location Name</h5>

                                                                <div>
                                                                    <p>Commission: <span>10%</span></p>
                                                                    <p>Available Slots: <span>20</span></p>
                                                                </div>

                                                                <div class="payment-system">
                                                                    <p><strong>Payment
                                                                            Methods:</strong>
                                                                    </p>
                                                                    <div class="d-flex" style="gap: 6px;">
                                                                        <span>
                                                                            <i class="icon bi bi-cash"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="icon bi bi-credit-card"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="icon bi bi-phone"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="icon bi bi-paypal"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="availability mt-2">
                                                            <p><strong>Availability:</strong></p>
                                                            <div class="d-flex">
                                                                <span class="badge-custom">Mon - Fri (9am -
                                                                    6pm)</span>
                                                                <span class="badge-custom">Sat (9am -
                                                                    12pm)</span>
                                                            </div>
                                                        </div>

                                                        <div class="machine-type mt-3">
                                                            <p class="mt-3"><strong>Machine Type:</strong>
                                                            </p>
                                                            <span class="badge-custom">Outdoor</span>
                                                            <span class="badge-custom">Public</span>
                                                        </div>

                                                        <p class="mt-4 mrev">Price (Random Slot): <span
                                                                class="monthly-revenue d-block">$20.00</span>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="right">
                                                        <div class="best">

                                                            <div class="nearby">
                                                                <p><strong>Ratings:</strong></p>
                                                                <div class="text-muted">
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    4.9
                                                                </div>
                                                            </div>

                                                            <div class="nearby mt-3">
                                                                <p class="mt-3"><strong>Nearby:</strong></p>
                                                                <div class="d-flex flex-wrap">
                                                                    <span class="badge-custom">Hospital</span>
                                                                    <span class="badge-custom">School</span>
                                                                    <span class="badge-custom">Play
                                                                        Ground</span>
                                                                    <span class="badge-custom">+5</span>
                                                                </div>
                                                            </div>

                                                            <p class="mt-3"><strong>Best Selling:</strong>
                                                            </p>
                                                            <div class="best-worst-selling">
                                                                <img style="height: 20px; width: auto;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="Product Image">
                                                                <span>Product Full Name Goes Here...</span>
                                                            </div>
                                                        </div>


                                                        <div class="worst">
                                                            <p class="mt-3"><strong>Worst Selling:</strong>
                                                            </p>
                                                            <div class="best-worst-selling">
                                                                <img style="height: 20px; width: auto;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="Product Image">
                                                                <span>Product Full Name Goes Here...</span>
                                                            </div>
                                                        </div>

                                                        <p class="mt-3 mrev">Monthly Revenue: <span
                                                                class="monthly-revenue d-block">$20.00</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="location-list">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="m-0">Selected Location</p>
                                    </div>
                                    <hr>
                                    <div class="selected-locations">
                                        <div class="location-card mb-4 location">

                                            <div class="d-flex align-items-center mb-3">
                                                <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                    alt="Profile Image" style="height: 40px; width: 40px">
                                                <div class="ml-3">
                                                    <h5 class="mb-0">Full Location</h5>
                                                </div>
                                            </div>



                                            <div class="machine-type mt-3">
                                                <p class="mt-3"><strong>Machine Type:</strong></p>
                                                <span class="badge-custom">Outdoor</span>
                                                <span class="badge-custom">Public</span>
                                            </div>

                                            <div class="availability mt-3">
                                                <p><strong>Availability:</strong></p>
                                                <div class="d-flex">
                                                    <span class="badge-custom">Mon(9am - 6pm)</span>
                                                    <span class="badge-custom">Sat(9am - 9pm)</span>
                                                </div>
                                            </div>



                                            <p class="mt-2">Available Slots: <strong class="d-block">20</strong>
                                            </p>

                                            <p class="mt-4 mrev">Price (Random Slot): <span
                                                    class="monthly-revenue d-block">$20.00</span>
                                            </p>



                                            <div class="mt-2">
                                                <button class="btn py-2 btn-sm btn-outline-danger w-100">
                                                    Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
