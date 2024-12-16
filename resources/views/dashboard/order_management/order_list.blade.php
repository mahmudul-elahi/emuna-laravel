@extends('dashboard.master')

@section('content')
    <div class="booking">
        <div class="booking-slot">
            <div class="row">

                <div class="col-md-12">
                    <div class="booking-slot-button d-flex justify-content-between">
                        <div class="left d-flex align-items-center">
                            <h3>Order List</h3>
                        </div>
                        <div class="right d-flex" style="gap: 10px;">
                            <div class="search_order_id_name">
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Type Order ID or Buyer Name">
                            </div>
                            <div>
                                <select class="custom-select" name="order_status" id="order_status">
                                    <option selected>Order Status</option>
                                    <option value="1">Processing</option>
                                    <option value="2">Shipped</option>
                                    <option value="3">Delivered</option>
                                </select>
                            </div>
                            <div>
                                <select class="custom-select" name="time_period" id="time_period">
                                    <option selected>Time Period</option>
                                    <option value="1">1 Week</option>
                                    <option value="2">1 Month</option>
                                    <option value="3">6 Month</option>
                                </select>
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
                                        <th>Phone</th>
                                        <th>Ordered Products</th>
                                        <th>Quantity</th>
                                        <th>Order Date</th>
                                        <th>Total Price</th>
                                        <th>Order Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #FFA500;">Processing</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #1665D8;">Shipped</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #23A684;">Delivered</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #FFA500;">Processing</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #FFA500;">Processing</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #FFA500;">Processing</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #1665D8;">Shipped</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #23A684;">Delivered</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #FFA500;">Processing</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#101</td>
                                        <td>Full Name Goes Here</td>
                                        <td>+1 234 567 890</td>
                                        <td>Product A, Product B</td>
                                        <td>3</td>
                                        <td>2024-12-10</td>
                                        <td>$150</td>
                                        <td style="color: #FFA500;">Processing</td>
                                        <td>
                                            <a href="{{ route('order_management.order_list.update') }}"
                                                class="btn outline-green rebook-btn">Update</a>
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
