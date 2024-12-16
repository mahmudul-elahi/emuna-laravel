@extends('dashboard.master')

@section('content')
    <div class="booking">
        <div class="booking-slot">
            <div class="row">

                <div class="col-md-12">
                    <div class="booking-slot-button d-flex justify-content-between">
                        <div class="left d-flex align-items-center">
                            <h3>Recent Online Orders</h3>
                        </div>
                        <div class="right d-flex">
                            <div class="mx-1">
                                <select class="custom-select" name="localtion" id="">
                                    <option value="">Choose Vending</option>
                                    <option value="">Location 1</option>
                                    <option value="">Location 2</option>
                                </select>

                            </div>
                            <div class="mx-1">
                                <select class="custom-select" name="localtion" id="">
                                    <option value="">Remaining Days</option>
                                    <option value="">Location 1</option>
                                    <option value="">Location 2</option>
                                </select>
                            </div>

                            <div class="mx-1">
                                <select class="custom-select" name="localtion" id="">
                                    <option value="">Total Unit</option>
                                    <option value="">Unit 1</option>
                                    <option value="">Unit 2</option>
                                </select>

                            </div>

                            <div class="mx-1">
                                <input type="text" class="custom-input"
                                    style="padding-block: 6px; width: 200px; height: 37px;" placeholder="Month"
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
                                        <th>Vending Location</th>
                                        <th>Product Name</th>
                                        <th>Month</th>
                                        <th>Total Unit</th>
                                        <th>Product Preview</th>
                                    </tr>

                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>Potato Chips</td>
                                        <td>August, 24</td>
                                        <td>300</td>
                                        <td>
                                            <div class=" booking-action">
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                        alt="View">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>Potato Chips</td>
                                        <td>August, 24</td>
                                        <td>300</td>
                                        <td>
                                            <div class=" booking-action">
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                        alt="View">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>Potato Chips</td>
                                        <td>August, 24</td>
                                        <td>300</td>
                                        <td>
                                            <div class=" booking-action">
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                        alt="View">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>Potato Chips</td>
                                        <td>August, 24</td>
                                        <td>300</td>
                                        <td>
                                            <div class=" booking-action">
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                        alt="View">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>Potato Chips</td>
                                        <td>August, 24</td>
                                        <td>300</td>
                                        <td>
                                            <div class=" booking-action">
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                        alt="View">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>Potato Chips</td>
                                        <td>August, 24</td>
                                        <td>300</td>
                                        <td>
                                            <div class=" booking-action">
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                        alt="View">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>Potato Chips</td>
                                        <td>August, 24</td>
                                        <td>300</td>
                                        <td>
                                            <div class=" booking-action">
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                        alt="View">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>Potato Chips</td>
                                        <td>August, 24</td>
                                        <td>300</td>
                                        <td>
                                            <div class=" booking-action">
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                        alt="View">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- Modal --}}

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 45%;" role="document">
            <div class="modal-content">
                <div class="booking-confirmed">
                    <div class="booking-confirmed-left">
                        <div class="confirmed-image-2">
                            <img src="{{ asset('assets/client/images/cola.png') }}" alt="">
                        </div>
                    </div>
                    <div class="booking-confirmed-right">
                        <div class="comfirmed-text">
                            <h4>Selling Details</h4>
                            <ul>
                                <li><span>Order ID: </span>123456</li>
                                <li><span>Machine ID: </span>147785</li>
                                <li><span>Location: </span>Full Address goes here</li>
                                <li><span>Total Quantity: </span>112</li>
                            </ul>
                            <a href="" class="btn w-100">Back to Pending Bookings</a>
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
