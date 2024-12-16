<div class="modal fade" id="refundModal" tabindex="-1" role="dialog" aria-labelledby="refundModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 70%;" role="document">
        <div class="modal-content">
            <div class="booking-refund">
                <div class="booking-refund-left">
                    <div class="center">
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
                <div class="booking-refund-right">
                    <h3>Booking Cancellation & Refund</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="stock-limit">Order ID<span>*</span></label>
                                <input type="text" class="form-control" placeholder="147852" id="stock-limit"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="mb-1 p-0" for="expected-receiving-date">Machine ID<span>*</span></label>
                                <input type="text" class="form-control" placeholder="147852"
                                    id="expected-receiving-date" readonly>
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

                        <div class="col-md-12">
                            <div class="note">
                                <h4>Rejection Note:</h4>
                                <p>Rejection Note Goes Here. Rejection Note Goes Here. Rejection Note Goes Here.
                                    Rejection Note Goes Here. Rejection Note Goes Here. </p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="btn w-100 reject mt-4" data-dismiss="modal" data-toggle="modal"
                                data-target="#refundcomplete">
                                Refund Using PayPal
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
