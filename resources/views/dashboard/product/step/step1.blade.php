<div class="product-info">
    <h3>Product Information</h3>
</div>


<div class="row">
    <div class="col-md-3">
        <div class="mb-4">
            <label class="mb-0" for="productName">Product Name<span>*</span></label>
            <input type="text" class="form-control" id="productName" name="product_name"
                placeholder="ChocoBites Energy Bar">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label class="mb-0" for="brandName">Brand Name<span>*</span></label>
            <input type="text" class="form-control" id="brandName" name="brand_name" placeholder="NutriSnacks Co.">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label class="mb-0" for="productCategory">Product Category<span>*</span></label>
            <select class="form-control" name="product_category" id="productCategory">
                <option>Type or choose Category</option>
                <option>Category 1</option>
                <option>Category 2</option>
                <option>Category 3</option>
            </select>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label class="mb-0" for="pricePerUnit">Price Per Unit<span>*</span></label>
            <input type="text" class="form-control" id="pricePerUnit" name="price_per_unit" placeholder="$ 20.99">
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-4">
            <label class="mb-0" for="pricePerUnit">Product Description<span>*</span></label>
            <textarea class="form-control" name="" id="" rows="3" placeholder="Write something.."></textarea>
            <small id="helpId" class="text-muted">275 characters left</small>
        </div>
    </div>


</div>

<div class="product-info">
    <h3>Product Media</h3>
</div>


<div class="row">

    <div class="col-md-3">
        <div class="mb-4">
            <label class="form-label mb-0">Product Primary Image<span>*</span>
            </label>
            <div class="row mt-3">
                <div class="col-md-5">
                    <div class="drop-image">

                        <div id="upload-form">
                            <div id="upload-area" style="padding: 10px;" class="border text-center position-relative">
                                <input type="file" id="fileElem" name="businessLogo" accept="image/*"
                                    style="display: none;">
                                <label for="fileElem" id="file-label" class="upload-button">
                                    <img style="width: 40px;" src="{{ asset('assets/client/images/upload.png') }}"
                                        alt="Upload Image">
                                    <small class="d-block">Drop Image <span>or <u>Upload a
                                                File</u></span></small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="h-100 position-relative">
                        <img id="preview-img" class="preview-img" alt="Uploaded Image">
                        <button type="button" id="remove-btn">
                            <img src="{{ asset('assets/client/images/icon/close-red-sq.svg') }}">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label class="form-label mb-0">Product Image</label>
            <div class="row mt-3">
                <div class="col-md-5">
                    <div class="drop-image">

                        <div id="upload-form">
                            <div id="upload-area" style="padding: 10px;" class="border text-center position-relative">
                                <input type="file" id="fileElem" name="businessLogo" accept="image/*"
                                    style="display: none;">
                                <label for="fileElem" id="file-label" class="upload-button">
                                    <img style="width: 40px;" src="{{ asset('assets/client/images/upload.png') }}"
                                        alt="Upload Image">
                                    <small class="d-block">Drop Image <span>or <u>Upload a
                                                File</u></span></small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="h-100 position-relative">
                        <img id="preview-img" class="preview-img" alt="Uploaded Image">
                        <button type="button" id="remove-btn">
                            <img src="{{ asset('assets/client/images/icon/close-red-sq.svg') }}">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label class="form-label mb-0">Product Video</label>
            <div class="row mt-3">
                <div class="col-md-5">
                    <div class="drop-image">

                        <div id="upload-form">
                            <div id="upload-area" style="padding: 10px;"
                                class="border text-center position-relative">
                                <input type="file" id="fileElem" name="businessLogo" accept="video/*"
                                    style="display: none;">
                                <label for="fileElem" id="file-label" class="upload-button">
                                    <img style="width: 40px;"
                                        src="{{ asset('assets/client/images/icon/video_upload.png') }}"
                                        alt="Upload Image">
                                    <small class="d-block"><span><u>Upload a
                                                Video</u></span> Max Size: 15 mb</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="h-100 position-relative">
                        <img id="preview-img" class="preview-img" alt="Uploaded Image">
                        <button type="button" id="remove-btn">
                            <img src="{{ asset('assets/client/images/icon/close-red-sq.svg') }}">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
