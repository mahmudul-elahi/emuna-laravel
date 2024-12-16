<div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 70%;" role="document">
        <div class="modal-content">
            <div class="booking-rejection">
                <div class="booking-rejection-left">
                    <div class="booking-rejection-left-image">
                        <img src="{{ asset('assets/client/images/icon/reject.png') }}" alt="">
                    </div>
                </div>
                <div class="booking-rejection-right">
                    <h3>Booking Rejection</h3>
                    <ul>
                        <li><span>Order ID:</span> 123456</li>
                        <li><span>Machine ID:</span> 147785</li>
                        <li><span>Location:</span> Full Location Goes Here..</li>
                        <li><span>Booking Period:</span> 05 Aug - 10 oct</li>
                    </ul>
                    <h4>Add a Note for cancellation</h4>
                    <textarea id="content" name="content" class="form-control"></textarea>

                    <div class="mt-4">
                        <button class="btn w-100 reject" data-dismiss="modal" data-toggle="modal"
                            data-target="#rejectConfirmation">
                            Reject Booking
                        </button>
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
