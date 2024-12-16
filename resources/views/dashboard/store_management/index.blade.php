@extends('dashboard.master')

@section('content')
    <div class="management ">
        <div class="management-home bg-white p-3">
            <div class="row">
                <div class="col-md-5">
                    <div class="performance">
                        <div class="performance-header">
                            <h3>Vending Performance</h3>
                            <a href="">View full report</a>
                        </div>

                        <div class="performance-chart">
                            <div class="left">
                                <canvas id="myDoughnutChart"></canvas>
                            </div>

                            <ul class="right">
                                <li style="--performance-color: #1665D8">Vending Store name goes here</li>
                                <li style="--performance-color: #F6AB2F">Vending Store name goes here</li>
                                <li style="--performance-color: #FEF7EA">Vending Store name goes here</li>
                                <li style="--performance-color: #E8F0FB">Vending Store name goes here</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="online-offline-sales">
                        <div class="online-offline-sales-header">
                            <h3>Online & Offline Sales</h3>
                            <div class="d-flex align-items-center">
                                <span class="mr-4" style="--color-online-offline: #23A684;">Online Store</span>
                                <span style="--color-online-offline: #E9F6F3;">Offline Store</span>
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
                                <h3>Recent Offline Delivery</h3>
                            </div>
                            <div class="right d-flex">
                                <a href="">View All</a>
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
                                            <th>Delivered Products</th>
                                            <th>Delivery Date</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Quick Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                    style="height: 32px; width: 32px;">
                                                <span>12/A Downtown Plaza, Michigan...</span>
                                            </td>
                                            <td>Full Product Name</td>
                                            <td>20 Sep</td>
                                            <td>
                                                15000
                                            </td>
                                            <td style="color: #34AA44;">Completed</td>
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
                                            <td>Full Product Name</td>
                                            <td>20 Sep</td>
                                            <td>
                                                15000
                                            </td>
                                            <td style="color: #1665D8;">In Transit</td>
                                            <td>
                                                <div class=" booking-action">
                                                    <a href=""><img
                                                            src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                            alt=""></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                    style="height: 32px; width: 32px;">
                                                <span>12/A Downtown Plaza, Michigan...</span>
                                            </td>
                                            <td>Full Product Name</td>
                                            <td>20 Sep</td>
                                            <td>
                                                15000
                                            </td>
                                            <td style="color: #F6AB2F;">Delayed</td>
                                            <td>
                                                <div class=" booking-action">
                                                    <a href=""><img
                                                            src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                            alt=""></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                    style="height: 32px; width: 32px;">
                                                <span>12/A Downtown Plaza, Michigan...</span>
                                            </td>
                                            <td>Full Product Name</td>
                                            <td>20 Sep</td>
                                            <td>
                                                15000
                                            </td>
                                            <td style="color: #E6492D;">Cancelled</td>
                                            <td>
                                                <div class=" booking-action">
                                                    <a href=""><img
                                                            src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                            alt=""></a>
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
                                <li><span class="d-block">Delivery Note: </span>Delivery Note Goes Here. Rejection Note Goes
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
                backgroundColor: ['#F6AB2F', '#1665D8', '#FEF7EA', '#E8F0FB'],
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
                            text: 'Sales Unit'
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
