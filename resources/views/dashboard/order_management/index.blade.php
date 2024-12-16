@extends('dashboard.master')

@section('content')
    <div class="management ">
        <div class="management-home bg-white p-3">
            <div class="row">
                <div class="col-md-5">
                    <div class="performance">
                        <div class="performance-header">
                            <h3>Vending Performance</h3>
                            <div class="form-group">
                                <select class="custom-select" name="month" id="month">
                                    <option selected>This Month</option>
                                    <option value="">This Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="performance-chart">
                            <div class="left">
                                <canvas id="myDoughnutChart"></canvas>
                            </div>

                            <ul class="right mb-0">
                                <li style="--performance-color: #23A684">Completed Orders (2154)</li>
                                <li style="--performance-color: #F6AB2F">Pending orders (1234)</li>
                                <li style="--performance-color: #E6492D">Canceled Orders (124)</li>
                                <li style="--performance-color: #1665D8">Shipped Orders (2014)</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="online-offline-sales">
                        <div class="online-offline-sales-header">
                            <h3>Order Analytics</h3>
                            <div class="d-flex align-items-center">
                                <select class="custom-select" name="year" id="year">
                                    <option selected>2024</option>
                                    <option value="2024">2024</option>
                                    <option value="2024">2024</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                        </div>

                        <div class="online-offline-sales-chart">
                            <div>
                                <canvas id="myDoughnutChart2" height="110"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <a href="{{ route('order_management.order_list') }}">View All</a>
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
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    {{-- Modal --}}

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 50%;" role="document">
            <div class="modal-content">
                <div class="booking-confirmed">
                    <div class="booking-confirmed-left">
                        <div class="confirmed-image-3">
                            <img src="{{ asset('assets/client/images/cola.png') }}" alt="">
                        </div>
                    </div>
                    <div class="booking-confirmed-right">
                        <div class="comfirmed-text">
                            <h4>Product Details</h4>
                            <ul>
                                <li><span>Product name: </span>123456</li>
                                <li><span>Quantity: </span>147785</li>
                                <li><span>Order ID: </span>147785</li>
                                <li><span>Order Date: </span>05 Aug - 10 oct</li>
                                <li><span>Ware House Location: </span>Full Address of ware house goes here</li>
                                <li><span>Expected Receiving Date: </span>25 Dec, 24</li>
                                <li><span>Status: </span>Delivered</li>
                                <li><span class="d-block">Delivery Note: </span>Delivery Note Goes Here. Rejection Note
                                    Goes
                                    Here. Rejection
                                    Note Goes Here. Rejection Note Goes Here. Rejection Note Goes Here. </li>
                                <li><span>Unsold or Expired Products progress: </span>Return to Owner.</li>
                            </ul>
                            <a href="" class="btn w-100">Back to Store Management</a>
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

@section('script')
    <script>
        // change this value
        var chartPerform = [20, 35, 30, 15];
        var onlineSales = [30, 40, 25, 50, 55, 30, 35, 50, 35, 60, 55, 30];
        var offlineSales = [10, 30, 15, 20, 15, 10, 25, 10, 15, 30, 25, 10];



        const ctx = document.getElementById('myDoughnutChart').getContext('2d');
        const ctx2 = document.getElementById('myDoughnutChart2').getContext('2d');

        // Data Performance
        const data = {
            labels: ['Store 1', 'Store 2', 'Store 3', 'Store 4'],
            datasets: [{
                data: chartPerform,
                backgroundColor: ['#F6AB2F', '#23A684', '#1665D8', '#E6492D'],
                hoverOffset: 4
            }]
        };

        // Data Online & Offline Sales
        const data2 = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: 'Online Sales',
                    data: onlineSales,
                    borderColor: "#23A684",
                    backgroundColor: "#23A684",
                    borderRadius: 8,
                    barPercentage: 0.7,
                },
                {
                    label: 'Offline Sales',
                    data: offlineSales,
                    borderColor: "#E9F6F3",
                    backgroundColor: "#E9F6F3",
                    borderRadius: 8,
                    barPercentage: 0.7,
                }
            ]
        };

        // Config Performance
        const config = {
            type: 'doughnut',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            }
        };

        // Config Online & Offline Sales

        const config2 = {
            type: 'bar',
            data: data2,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stacked: true,
                        ticks: {
                            stepSize: 20,
                        },
                        grid: {
                            display: true,
                        },
                        title: {
                            display: true,
                            text: 'Total Orders'
                        }
                    },
                    x: {
                        stacked: true,
                        ticks: {
                            color: "#394D48",
                        },
                        grid: {
                            display: false,
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false,
                    }
                }
            }
        };

        // Render Chart
        const myDoughnutChart = new Chart(ctx, config);

        // Render Chart 2
        const myChart = new Chart(ctx2, config2);
    </script>
@endsection
