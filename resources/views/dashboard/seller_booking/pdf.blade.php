<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Invoice PDF</title>

    <!-- Inline Bootstrap CSS -->
    <style>
        {!! file_get_contents(public_path('assets/client/css/bootstrap.min.css')) !!}
    </style>

    <!-- Inline Custom CSS -->
    <style>
        {!! file_get_contents(public_path('assets/client/css/pdf.css')) !!}
    </style>
</head>

<body>
    <div class="container">
        <div class="pdf-data">
            <!-- Header Section -->
            <div class="d-flex justify-content-between align-items-center mb-4 pdf-header">
                <div>
                    <h4>Order Note</h4>
                    <p><strong>Invoice No:</strong> 01748203</p>
                    <p><strong>Invoice Date:</strong> 12-08-2024</p>
                    <p><strong>Payment Approved:</strong> 20-08-2024</p>
                </div>
                <img src="{{ public_path('assets/client/images/logo.png') }}" alt="Company Logo" class="logo"
                    style="width: 150px;">
            </div>

            <!-- Client Details -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5>Client Details:</h5>
                    <p><strong>Name:</strong> Full Name</p>
                    <p><strong>Contact:</strong> +0000 1234 5678</p>
                    <p><strong>Email:</strong> demomail@website.com</p>
                    <p><strong>Address:</strong> 275/1 Lorem St, Demo City, Texas 77057</p>
                </div>

                <!-- Product Details -->
                <div class="col-md-6">
                    <div class="d-flex">
                        <div>
                            <img src="{{ public_path('assets/client/images/cola.png') }}" alt="Product Image"
                                class="img-fluid" style="width: 80px; height: auto;">
                        </div>
                        <div class="ms-3">
                            <h6>Choco Bites Energy Bar</h6>
                            <p><strong>Brand:</strong> Brand Name</p>
                            <p><strong>Category:</strong> Chocolate</p>
                            <p><strong>Size:</strong> 72x12</p>
                            <p><strong>Duration:</strong> 15 Aug - 19 Dec</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Unsold Items Table -->
            <h5>Unsold Items:</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Quantity</th>
                        <th>Expiry Date</th>
                        <th>Storage Type</th>
                        <th>Selling Price</th>
                        <th>Charge Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>80</td>
                        <td>15-04-2028</td>
                        <td>Normal</td>
                        <td>$15.99</td>
                        <td>1234557/779</td>
                    </tr>
                </tbody>
            </table>

            <!-- Shipment Details -->
            <div class="row">
                <div class="col-md-6">
                    <h5>Shipment To:</h5>
                    <p><strong>Name:</strong> Full Name</p>
                    <p><strong>Contact:</strong> +000 123 456 789</p>
                    <p><strong>Email:</strong> demomail@website.com</p>
                    <p><strong>Address:</strong> Receiver's Address</p>
                </div>
            </div>

            <!-- Decorative Shapes -->
            <div>
                <img src="{{ public_path('assets/client/images/pdf-icon/shape1.png') }}" alt="Shape 1"
                    style="width: 50px; margin-right: 10px;">
                <img src="{{ public_path('assets/client/images/pdf-icon/shape2.png') }}" alt="Shape 2"
                    style="width: 50px;">
            </div>
        </div>
    </div>
</body>

</html>
