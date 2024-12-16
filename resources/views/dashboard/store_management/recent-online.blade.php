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
                                        <th>Order ID</th>
                                        <th>Customer Name</th>
                                        <th>Products</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th>Order Status</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #FFA500;">Processing</td>
                                    </tr>

                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #1665D8;">Shipped</td>
                                    </tr>

                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #23A684;">Delivered</td>
                                    </tr>

                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #FFA500;">Processing</td>
                                    </tr>

                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #1665D8;">Shipped</td>
                                    </tr>
                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #FFA500;">Processing</td>
                                    </tr>

                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #1665D8;">Shipped</td>
                                    </tr>

                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #23A684;">Delivered</td>
                                    </tr>

                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #FFA500;">Processing</td>
                                    </tr>

                                    <tr>
                                        <td>104102</td>
                                        <td>Full Name Goes Here</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>$120</td>
                                        <td style="color: #1665D8;">Shipped</td>
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
