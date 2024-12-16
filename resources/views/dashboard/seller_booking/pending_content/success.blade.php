<div class="pending-list-details">
    <div class="pending-list-details-form" style="width: 55%">
        <div class="row">
            <div class="col-md-12">
                <h3>Warehouse Location</h3>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="location-name">Location Name</label>
                    <input type="text" class="form-control" readonly placeholder="Lorem Epsum" id="location-name">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="house-no">Shop/House No</label>
                    <input type="text" class="form-control" readonly placeholder="24/1" id="house-no">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="street">Street</label>
                    <input type="text" class="form-control" readonly placeholder="St Street" id="street">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="city">City</label>
                    <input type="text" class="form-control" readonly placeholder="Vienna" id="city">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="state-code">State-Code</label>
                    <input type="text" class="form-control" readonly placeholder="1200" id="state-code">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="country">Country</label>
                    <input type="text" class="form-control" readonly placeholder="Austria" id="country">
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <h3>Shipping Details</h3>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="expected-date">Expected Receiving
                        Date</label>
                    <input type="text" class="form-control" readonly placeholder="10 May, 2024" id="expected-date">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="displaying-date">Displaying Date</label>
                    <input type="text" class="form-control" readonly placeholder="15 May, 2024" id="displaying-date">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="stock-limit">Stock Limit</label>
                    <input type="text" class="form-control" readonly placeholder="100" id="stock-limit">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="quantity">Quantity</label>
                    <input type="text" class="form-control" readonly placeholder="80" id="quantity">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="selling-price">Selling Price</label>
                    <input type="text" class="form-control" readonly placeholder="$12.99" id="selling-price">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="expiry-date">Expiry Date</label>
                    <input type="text" class="form-control" readonly placeholder="15 May, 2025" id="expiry-date">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="product-status">Product Status</label>
                    <input type="text" class="form-control" readonly placeholder="Shipped" id="product-status">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="tracking-number">Tracking Number</label>
                    <input type="text" class="form-control" readonly placeholder="587 21548 4567"
                        id="tracking-number">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label class="mb-1 p-0" for="delivery-note">Delivery Note</label>
                    <textarea class="form-control" id="delivery-note" rows="3" placeholder="Type a Delivery Note Here..."></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <h4>Unsold or Expired Products</h4>
            </div>

            <div class="col-md-12">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1"
                        value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        <span>Return to Owner:</span> Choose this option if you would like unsold or expired
                        products to
                        be returned to you. Note: Return shipping costs will be covered by
                        the seller.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                        value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        <span>Dispose for Market Research & Giveaways:</span> Select this option to allow us
                        to use
                        leftover products for giveaways or market research events. This option helps promote
                        your brand in the marketplace and reduces disposal costs..
                    </label>
                </div>
            </div>

            <div class="col-md-12">
                <button data-toggle="modal" data-target="#submitTracking"
                    class="btn w-100 submit-tracking-btn">Submit Tracking</button>
            </div>
        </div>
    </div>
    <div class="pending-list-details-pdf" style="width: 45%">
        <div class="pending-list-details-pdf-item">
            <div class="d-flex align-items-center justify-content-between px-3">
                <h5 class="mb-0">Order Note Preview</h5>

                <div class="pending-list-details-pdf-item-btn">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="#"><img style="height: 15px;"
                                src="{{ asset('assets/client/images/pdf-icon/Show.svg') }}" alt=""></a>
                        <a href="#"><img style="height: 15px;"
                                src="{{ asset('assets/client/images/pdf-icon/Download.svg') }}" alt=""></a>
                        <a href="#"><img style="height: 15px;"
                                src="{{ asset('assets/client/images/pdf-icon/Print.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="pdf-data position-relative">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-4 pdf-header">
                    <div class="pl-2">
                        <h4 class="mb-2">Order Note</h4>
                        <p class="m-0"><span>Invoice No:</span> 01748203</p>
                        <p class="m-0"><span>Invoice Date:</span> 12-08-2024</p>
                        <p class="m-0"><span>Payment Approved:</span> 20-08-2024</p>
                    </div>

                    <img src="{{ asset('assets/client/images/logo.png') }}" alt="Company Logo" class="logo mr-2">
                </div>

                <!-- Client and Contractor Details -->
                <div class="row mb-4 client-constractor">
                    <div class="col-md-6">
                        <h5>Client:</h5>
                        <p><span>Seller's Name:</span> Full Name Goes Here</p>
                        <p><span>Contact:</span> +0000 1234 5678</p>
                        <p><span>Email:</span> demomail@website.com</p>
                        <p><span>Location:</span> 275/1 Lorem St, Demo City, Texas 77057</p>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex" style="gap: 10px;">
                            <div class="pdf-product-image">
                                <img src="{{ asset('assets/client/images/cola.png') }}" alt="Product Image"
                                    class="img-fluid mb-2">
                            </div>
                            <div>
                                <h6>Choco Bites Energy Bar</h6>
                                <p><span>Brand:</span> Brand Name</p>
                                <p><span>Category:</span> Chocolate</p>
                                <p><span>Size:</span> 72x12</p>
                                <p><span>Duration:</span> 15 Aug - 19 Dec</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product and Location Details -->
                <div class="row mb-4 client-constractor">
                    <div class="col-md-6">
                        <h5>Client:</h5>
                        <p><span>Seller's Name:</span> Full Name Goes Here</p>
                        <p><span>Contact:</span> +0000 1234 5678</p>
                        <p><span>Email:</span> demomail@website.com</p>
                        <p><span>Location:</span> 275/1 Lorem St, Demo City, Texas 77057</p>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex" style="gap: 10px;">
                            <div class="pdf-product-image">
                                <img src="{{ asset('assets/client/images/cola.png') }}" alt="Product Image"
                                    class="img-fluid mb-2">
                            </div>
                            <div>
                                <h6>Choco Bites Energy Bar</h6>
                                <p><span>Brand:</span> Brand Name</p>
                                <p><span>Category:</span> Chocolate</p>
                                <p><span>Size:</span> 72x12</p>
                                <p><span>Duration:</span> 15 Aug - 19 Dec</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Unsold Items Table -->
                <div class="mb-4 pdf-table">
                    <h5>Unsold Items:</h5>
                    <a href="#" class="text-primary">Returns to Owner</a>
                    <table class="table table-custom mt-2">
                        <thead>
                            <tr>
                                <th>Quantity</th>
                                <th>Expiry Date</th>
                                <th>Storage Type</th>
                                <th>Selling Price</th>
                                <th>Charge Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>80</td>
                                <td>15-04-2028</td>
                                <td>Normal</td>
                                <td>15.99</td>
                                <td>1234557/779</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Shipment Info -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="shipment-custom">
                            <h5 class="mb-1">Shipment Too:</h5>
                            <p><span>Receiver's Name:</span> Full Name Here</p>
                            <p><span>Contact:</span> +000 123 456 789</p>
                            <p><span>Email:</span> demomail@website.com</p>
                            <p><span>Location:</span> Full Name Here</p>
                        </div>
                    </div>
                </div>

                <div class="pdf-shape">
                    <img src="{{ asset('assets/client/images/pdf-icon/shape2.png') }}" alt="">
                    <img src="{{ asset('assets/client/images/pdf-icon/shape1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
