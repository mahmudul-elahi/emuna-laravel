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
                                    <option value="">Category</option>
                                    <option value="">Location 1</option>
                                    <option value="">Location 2</option>
                                </select>

                            </div>

                            <div class="mx-1">
                                <input type="text" class="custom-input"
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
                                        <th>Vending Location</th>
                                        <th>Vending Code</th>
                                        <th>Stock Now</th>
                                        <th>Category</th>
                                        <th>Left Day</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                style="height: 32px; width: 32px;">
                                            <span>12/A Downtown Plaza, Michigan...</span>
                                        </td>
                                        <td>VM1234</td>
                                        <td>50</td>
                                        <td>Snacks</td>
                                        <td>7 Days Remaining</td>
                                        <td>
                                            <a href="#" class="btn outline-green"
                                                style="font-size: 10px; padding: 5px 10px;">Re-book</a>
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
@endsection
