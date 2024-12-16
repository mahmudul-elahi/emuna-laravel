@extends('dashboard.master')

@section('content')
    <div class="booking">
        <div class="booking-slot">
            <div class="row">

                <div class="col-md-12">
                    <div class="booking-slot-button d-flex justify-content-between">
                        <div class="left d-flex align-items-center">
                            <h3>Pending Bookings</h3>
                        </div>
                        <div class="right d-flex">
                            <div class="mx-1">
                                <select class="form-control" name="localtion" id="">
                                    <option value="">Choose Vending</option>
                                    <option value="">Location 1</option>
                                    <option value="">Location 2</option>
                                </select>
                            </div>
                            <div class="mx-1">
                                <select class="form-control" name="localtion" id="">
                                    <option value="">Remaining Days</option>
                                    <option value="">Location 1</option>
                                    <option value="">Location 2</option>
                                </select>
                            </div>

                            <div class="mx-1">
                                <input type="text" class="form-control"
                                    style="padding-block: 6px; width: 200px; height: 37px;" placeholder="Booking Period"
                                    onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="booking-table">

                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Vendings Location</th>
                                        <th>Booking Period</th>
                                        <th>Remaining Days</th>
                                        <th>Total Sales</th>
                                        <th>Remaining Stocks</th>

                                        <th>Quick Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td>
                                                <img src="{{ $booking->image }}" style="height: 32px; width: 32px;">
                                                <span>{{ $booking->location }}</span>
                                            </td>
                                            <td>{{ $booking->date_range }}</td>
                                            <td style="color: {{ $booking->total_slots > 15 ? '#34AA44' : '#F6AB2F' }};">
                                                {{ $booking->total_slots }}
                                            </td>
                                            <td>{{ $booking->amount }}</td>
                                            <td style="color: {{ $booking->available_slots > 5 ? '#34AA44' : '#E6492D' }};">
                                                {{ $booking->available_slots }}
                                            </td>

                                            <td>
                                                <div class=" booking-action">
                                                    <a href="{{ route('booking.view') }}"><img class="svg-blue"
                                                            src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                            alt=""></a>

                                                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                                                        <img src="{{ asset('assets/client/images/icon/check.svg') }}"
                                                            alt="">
                                                    </a>

                                                    <a href="#" data-toggle="modal" data-target="#refundModal">
                                                        <img src="{{ asset('assets/client/images/icon/cross.svg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('dashboard.booking.modal.confirmation')
    @include('dashboard.booking.modal.confirmed')
    @include('dashboard.booking.modal.reject')
    @include('dashboard.booking.modal.rejected')
    @include('dashboard.booking.modal.refund')

    <div class="modal fade" id="refundcomplete" tabindex="-1" role="dialog" aria-labelledby="refundcompleteLabel"
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
                            <h4>Refund Complete</h4>
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
@endsection
