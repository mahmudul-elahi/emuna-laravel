<div class="row">
    <div class="col-md-12">
        <div class="product-info">
            <h3>Product Selection</h3>
        </div>
    </div>


    <div class="product-select-area">

        <div class="d-flex justify-content-between align-items-start">
            <div class="ml-3">

                <button type="button" class="btn open-product" data-toggle="modal" data-target="#productModal">
                    <i class="fas fa-plus"></i>
                    <span> Choose Product</span>
                </button>

                <div id="productDetails" class="mt-3 d-none">


                    <div class="selected-product">

                        <div class="product-image">
                            <img id="productImage" src="" alt="Product Image" class="img-fluid mb-3">
                        </div>

                        <div class="product-details">
                            <h3>Product Details:</h3>
                            <p id="productName"></p>
                            <p id="productBrand"></p>
                            <p id="productCategory"></p>
                            <p id="productPrice"></p>
                            <p id="productStocks"></p>
                            <p id="productWeight"></p>
                            <p id="productDimensions"></p>
                            <p id="productBarcode"></p>
                        </div>
                    </div>
                </div>

            </div>


            <div>
                <!-- Change Product Button initially hidden -->
                <button type="button" class="btn d-none change-product" id="changeProductBtn">
                    <span>Change Product</span>
                    <i class="far fa-plus-square"></i>
                </button>
            </div>

        </div>

        {{-- The Model Is in the end of the Section --}}



    </div>

</div>

<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Choose Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    @foreach ($products as $product)
                        <div class="col-6 py-2 px-2" id="product_list" data-product='@json($product)'>
                            <div class="card h-auto border item-select-list" style="border-color: #007bff;">

                                <div class="row align-items-center no-gutters ">
                                    <div class="col-5">
                                        <div class="image text-center">
                                            <img src="{{ $product->image }}" width="70" class="img-fluid"
                                                alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <ul class="card-text m-0 p-0">
                                                <li><span>Brand:</span> {{ $product->brand }}</li>
                                                <li><span>Category:</span> {{ $product->category }}</li>
                                                <li><span>Price:</span> {{ $product->price }}</li>
                                                <li><span>Stocks:</span> {{ $product->stocks }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
