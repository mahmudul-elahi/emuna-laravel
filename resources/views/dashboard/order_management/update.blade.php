@extends('dashboard.master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="booking">
                <div class="booking-slot">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="booking-slot-button d-flex justify-content-between mb-0">
                                <div class="left d-flex align-items-center">
                                    <h3 class="mb-0">Order #12345678</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="booking-table">

                                <div class="table-responsive">
                                    <table class="table table-hover align-middle rounded-0 mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <td>Full Name Goes Here</td>
                                                <td>$150</td>
                                                <td>3</td>
                                                <td>$1500</td>
                                            </tr>
                                            <tr>
                                                <td>Full Name Goes Here</td>
                                                <td>$150</td>
                                                <td>3</td>
                                                <td>$1500</td>
                                            </tr>
                                            <tr>
                                                <td>Full Name Goes Here</td>
                                                <td>$150</td>
                                                <td>3</td>
                                                <td>$1500</td>
                                            </tr>
                                            <tr>
                                                <td>Full Name Goes Here</td>
                                                <td>$150</td>
                                                <td>3</td>
                                                <td>$1500</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <div class="total-price-order-list-update border-top">
                                    <div class="row">
                                        <div class="col-md-7 ml-auto">
                                            <div class="total-price-list">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span>Sub Total:</span>
                                                    <span>$1200.00</span>
                                                </div>

                                                <div class="d-flex justify-content-between mb-3">
                                                    <span>Tax (5%):</span>
                                                    <span>$45.00</span>
                                                </div>

                                                <div class="d-flex justify-content-between mb-3">
                                                    <span>Deliver Charge:</span>
                                                    <span>$1245.00</span>
                                                </div>

                                                <div class="d-flex justify-content-between mb-3">
                                                    <span>Total:</span>
                                                    <span>$1245.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="booking-status">
                <div class="row">
                    <div class="col-md-6">
                        <div class="booking-status-info">
                            <h3>Shipping Information</h3>

                            <div class="item-list">
                                <div class="item">
                                    <div class="item-lebel">Name</div>
                                    <div class="item-value">:&nbsp; Full Name Goes Here</div>
                                </div>
                            </div>

                            <div class="item-list">
                                <div class="item">
                                    <div class="item-lebel">Address</div>
                                    <div class="item-value">:&nbsp; Address Goes Here</div>
                                </div>
                            </div>

                            <div class="item-list">
                                <div class="item">
                                    <div class="item-lebel">Phone</div>
                                    <div class="item-value">:&nbsp; +88 019 222 306 363</div>
                                </div>
                            </div>

                            <div class="item-list">
                                <div class="item">
                                    <div class="item-lebel">Email</div>
                                    <div class="item-value">:&nbsp; demomail@website.com</div>
                                </div>
                            </div>
                        </div>

                        <div class="booking-status-info">
                            <h3>Payment Details</h3>

                            <div class="item-list">
                                <div class="item">
                                    <div class="item-lebel">Transaction ID</div>
                                    <div class="item-value">:&nbsp; #25893358</div>
                                </div>
                            </div>

                            <div class="item-list">
                                <div class="item">
                                    <div class="item-lebel">Payment Method</div>
                                    <div class="item-value">:&nbsp; Debit Card</div>
                                </div>
                            </div>

                            <div class="item-list">
                                <div class="item">
                                    <div class="item-lebel">Holder Name</div>
                                    <div class="item-value">:&nbsp; Full Name Goes Here</div>
                                </div>
                            </div>

                            <div class="item-list">
                                <div class="item">
                                    <div class="item-lebel">Card Number</div>
                                    <div class="item-value">:&nbsp; 0257 8501 2388 3698 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="booking-status-info">
                            <h3>Payment Details</h3>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="order_status">Order Status</label>
                                        <select class="custom-select bg-select-white" name="order_status" id="order_status">
                                            <option value="Delivered" selected>Delivered</option>
                                            <option value="Shipped">Shipped</option>
                                            <option value="Processing">Processing</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="order_id">Tracking / Order Id</label>
                                        <input type="text" name="order_id" id="order_id" class="form-control"
                                            placeholder="12456879800542">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="courier">Courier Partner</label>
                                        <select class="custom-select bg-select-white" name="courier" id="courier">
                                            <option selected>DHL</option>
                                            <option value="1">Aramex</option>
                                            <option value="2">FedEx</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="courier">Estimated Delivery</label>
                                        <input type="text" class="form-control" placeholder="Booking Period"
                                            onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div id="statusContent"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            function updateContent(status) {
                let content = '';

                if (status === 'Processing') {
                    content = `
                                <button class="btn outline-green w-100">
                                    Save & Update Order Status
                                </button>`;
                } else if (status === 'Shipped') {
                    content = `
                                <button class="btn outline-green w-100">
                                    Save & Update Order Status
                                </button>`;

                } else if (status === 'Delivered') {
                    content = `
                                <button class="btn btn-primary-green w-100">
                                    This Order Has Been Completed
                                </button>

                                <button class="btn outline-dark w-100 mt-3">
                                    <i class="fas fa-print mr-2"></i> Print Invoice
                                </button>
                                `;
                } else if (status === 'Cancelled') {
                    content = `
                                <div class="form-group">
                                    <label for="note">Cancellation Note</label>
                                    <textarea class="form-control" name="cancel_note" id="cancel_note" rows="4"></textarea>
                                </div>


                                <button class="btn outline-dark w-100 mt-3">
                                    <i class="fas fa-print mr-2"></i> Print Invoice
                                </button>`;
                } else {
                    content = `<p class="text-muted">Select a status to see the details.</p>`;
                }

                $('#statusContent').html(content);
            }

            $('#order_status').on('change', function() {
                const selectedValue = $(this).val();
                updateContent(selectedValue);
            });

            const initialValue = $('#order_status').val();
            updateContent(initialValue);
        });
    </script>
@endsection
