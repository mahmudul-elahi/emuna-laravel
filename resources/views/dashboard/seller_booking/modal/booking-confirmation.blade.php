<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 70%;" role="document">
        <div class="modal-content">
            <div class="booking-confirmation">
                <div class="booking-confirmation-left">
                    <div class="center">
                        <h3>Requested Vending Machine</h3>
                        <div class="image-text-container">
                            <div class="image-borde">
                                <img src="{{ asset('assets/client/images/vending/vending1.png') }}" alt="">
                            </div>
                            <h4>Full Location Name Goes Here...</h4>
                        </div>
                        <p><span>Duration:</span> 6 Months</p>
                        <p><span>Monthly Rate:</span> $29.90</p>
                        <p><span>Requested Slots:</span>
                            <span class="badge-custom">Premium</span>
                            <span class="badge-custom">D4</span>
                        </p>

                        <h6>Product Details</h6>

                        <div class="image-text-container">
                            <div class="image-container mr-1">
                                <img src="{{ asset('assets/client/images/cola.png') }}" alt="">
                            </div>

                            <div class="image-text">
                                <h2>Full Product Name Goes Here...</h2>
                                <p>Brand Name Goes Here</p>
                            </div>
                        </div>

                        <p><span>Category:</span> Snacks</p>
                        <p><span>Storage Type:</span> Normal</p>
                        <p><span>Price Per Unit:</span> $10.00</p>
                    </div>
                </div>
                <div class="booking-confirmation-right">
                    <h3>Booking Confirmation</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="stock-limit">Stock Limit<span>*</span></label>
                                <input type="text" class="form-control" placeholder="100" id="stock-limit">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="expected-receiving-date">Expected Receiving
                                    Date<span>*</span></label>
                                <input type="text" class="form-control" placeholder="15 Aug, 2024"
                                    id="expected-receiving-date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="displaying-date">Displaying Date<span>*</span></label>
                                <input type="text" class="form-control" placeholder="19 Aug, 2024"
                                    id="displaying-date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="receiver-name">Receiver's Name</label>
                                <input type="text" class="form-control" placeholder="Full Name Goes Here"
                                    id="receiver-name" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="receiver-phone">Receiver's Phone</label>
                                <input type="text" class="form-control" placeholder="+000 123 456 7890"
                                    id="receiver-phone" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="receiver-email">Receiver's Email</label>
                                <input type="text" class="form-control" placeholder="emailgoes@here.com"
                                    id="receiver-email" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="warehouse-location">Warehouse Location</label>
                                <input type="text" class="form-control" placeholder="Full Location Goes Here"
                                    id="warehouse-location" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="payment-method">Payment Method</label>
                                <input type="text" class="form-control" placeholder="PayPal" id="payment-method"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="paypal-id">PayPal ID</label>
                                <input type="text" class="form-control" placeholder="012 7172 2886" id="paypal-id"
                                    readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button class="btn w-100 submit" data-dismiss="modal" data-toggle="modal"
                                data-target="#nextModal">
                                Submit Booking
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn w-100 reject" data-dismiss="modal" data-toggle="modal"
                                data-target="#rejectModal">
                                Reject Booking
                            </button>
                        </div>

                    </div>

                </div>
            </div>
            <div class="modal-close-button">
                <a href="#" class="close-modal-btn" data-dismiss="modal"><img
                        src="{{ asset('assets/client/images/icon/close.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
</div>
