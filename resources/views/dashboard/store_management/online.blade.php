@extends('dashboard.master')

@section('content')
    <div class="management">
        <div class="management-home">
            <div class="row">
                <div class="col-md-4">
                    <div class="sales-summary">
                        <div class="sales-summary-header">
                            <h4>Sales Summary</h4>
                            <div class="form-group">
                                <select class="custom-select" name="" id="">
                                    <option>This Month</option>
                                    <option>This Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="sales-summary-circle-overview">
                            <div class="pre">
                                <h6>15</h6>
                                <p>Total Products</p>
                            </div>
                            <div class="avil">
                                <h6>200000</h6>
                                <p>Total Orders</p>
                            </div>
                            <div class="oper">
                                <h6>$53080</h6>
                                <p>Revenue</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="online-offline-sales" style="border: none">
                        <div class="online-offline-sales-header">
                            <h3>Store views</h3>

                            <div class="btn-group store-views-btn-group" role="group" aria-label="Time Range">
                                <button type="button" class="btn btn-light">12 Months</button>
                                <button type="button" class="btn btn-light">30 Days</button>
                                <button type="button" class="btn btn-light">7 Days</button>
                            </div>

                        </div>

                        <div class="online-offline-sales-chart">
                            <div>
                                <canvas id="lineChart" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="booking mt-2">
        <div class="row">
            <div class="col-md-8">
                <div class="booking-slot">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="booking-slot-button d-flex justify-content-between mb-3">
                                <div class="left d-flex align-items-center">
                                    <h3>Recent Online Orders</h3>
                                </div>
                                <div class="right d-flex">
                                    <a href="{{ route('store_management.online.recent') }}">View All</a>
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
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="top-selling-products">
                    <h3 class="pb-3">Top selling Products</h3>


                    <div class="top-selling-products-list">
                        <div class="top-selling-products-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/cola.png') }}" alt="Cola">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="text">
                                        <h4>Product Name Goes Here</h4>
                                        <div class="star">
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="far fa-star" style="color: #ffd66b66;"></i>
                                        </div>
                                        <p><span>Sold Unit:</span> <span class="sold-unit">2,432</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="top-selling-products-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/cola.png') }}" alt="Cola">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="text">
                                        <h4>Product Name Goes Here</h4>
                                        <div class="star">
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="far fa-star" style="color: #ffd66b66;"></i>
                                        </div>
                                        <p><span>Sold Unit:</span> <span class="sold-unit">2,432</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="top-selling-products-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/cola.png') }}" alt="Cola">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="text">
                                        <h4>Product Name Goes Here</h4>
                                        <div class="star">
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="fas fa-star" style="color: #FFD66B;"></i>
                                            <i class="far fa-star" style="color: #ffd66b66;"></i>
                                        </div>
                                        <p><span>Sold Unit:</span> <span class="sold-unit">2,432</span></p>
                                    </div>
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
        var labels = ["1 Jul", "7 Jul", "15 Jul", "19 Jul", "23 Jul", "27 Jul", "31 Jul"];
        var profileView = [200, 500, 800, 700, 600, 900, 400, 300, 700, 600];
        var uniqueView = [150, 400, 700, 500, 800, 450, 300, 600, 500, 200];


        var ctx = document.getElementById("lineChart").getContext("2d");
        ctx.height = 150;
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,

                datasets: [{
                        label: "Profile Views",
                        borderColor: "rgba(2, 119, 82, 1)",
                        borderWidth: 1,
                        backgroundColor: "rgba(233, 246, 243, 1)",
                        data: profileView,
                        tension: 0.4,
                        fill: true,
                    },
                    {
                        label: "Unique Visitors",
                        borderColor: "rgba(2, 119, 82, 1)",
                        borderWidth: 1,
                        backgroundColor: "rgba(233, 246, 243, 1)",
                        data: uniqueView,
                        tension: 0.4,
                        fill: true,
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    x: {
                        display: true,

                        grid: {
                            display: false,
                        }

                    },
                    y: {
                        beginAtZero: true,
                        stacked: true,
                        ticks: {
                            stepSize: 200,
                        },

                        title: {
                            display: true,
                            text: 'Profile views'
                        }
                    }
                }
            }
        });
    </script>
@endsection
