<div class="modal fade" id="rejectConfirmation" tabindex="-1" role="dialog" aria-labelledby="rejectConfirmationLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 50%;" role="document">
        <div class="modal-content">
            <div class="booking-rejected">
                <div class="booking-rejected-left">
                    <div class="rejected-image">
                        <img src="{{ asset('assets/client/images/icon/reject.png') }}" alt="">
                    </div>
                </div>
                <div class="booking-rejected-right">
                    <div class="rejected-text">
                        <h4>Booking Rejected</h4>
                        <div class="bg-red-p">
                            <ul>
                                <li><span>Order ID:</span> 123456</li>
                                <li><span>Machine ID:</span> 147785</li>
                                <li><span>Location:</span> Full Location Goes Here..</li>
                                <li><span>Booking Period:</span> 05 Aug - 10 oct</li>
                            </ul>

                            <p>Rejection Note: <span>Rejection Note Goes Here. Rejection Note Goes Here. Rejection Note
                                    Goes Here. Rejection Note Goes Here. </span></p>
                        </div>
                        <div class="mt-4">
                            <a href="" class="btn w-100">Back to Pending Bookings</a>
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
