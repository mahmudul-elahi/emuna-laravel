<div class="row">
    <div class="col-md-12">
        <div class="machine-info">
            <h3>Machine Information</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label for="firstName">Machine ID<span>*</span> </label>
            <input type="text" class="form-control" id="firstName" placeholder="15/A">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label for="firstName">Machine Status<span>*</span> </label>
            <select class="custom-select" name="" id="">
                <option disabled selected>Select one</option>
                <option value="">Active</option>
                <option value="">Deactive</option>
            </select>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label for="firstName">Installation Date<span>*</span> </label>
            <input type="text" class="form-control" id="dateInput" placeholder="dd/mm/yyyy">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label for="firstName">Temperature Control<span>*</span> </label>
            <input type="text" class="form-control" id="firstName" placeholder="15/A">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="machine-info">
                    <h3>Machine Measurements</h3>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-4">
                    <label for="firstName">Tall (Inch)<span>*</span> </label>
                    <input type="text" class="form-control" id="firstName" placeholder="Tall">
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-4">
                    <label for="firstName">Wide (Inch)<span>*</span> </label>
                    <input type="text" class="form-control" id="firstName" placeholder="Wide">
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-4">
                    <label for="firstName">Deep (Inch)<span>*</span> </label>
                    <input type="text" class="form-control" id="firstName" placeholder="Deep">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="machine-info">
                    <h3>Payment Methods</h3>
                </div>
            </div>

            <div class="col-md-12">
                <div class="d-flex align-items-center mb-3">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="paymentOption" id="all"
                            value="all" checked>
                        <label class="form-check-label" for="all">All</label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="paymentOption" id="custom"
                            value="custom">
                        <label class="form-check-label" for="custom">Custom</label>
                    </div>
                </div>

                <div id="customCheckboxes">
                    <div class="d-flex flex-wrap">
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="checkbox" id="coin" disabled>
                            <label class="form-check-label" for="coin">Coin</label>
                        </div>
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="checkbox" id="cash" disabled>
                            <label class="form-check-label" for="cash">Cash</label>
                        </div>
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="checkbox" id="creditCard" disabled>
                            <label class="form-check-label" for="creditCard">Credit
                                Card</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="paypal" disabled>
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="drop-image pt-5">
            <label class="form-label mb-0">Business Logo<span>*</span>
                <small class="text-muted d-block">(PDF, JPEG, PNG)</small></label>
            <div id="upload-form">
                <div id="upload-area" class="border text-center">
                    <input type="file" id="fileElem" accept="image/*" style="display: none;">

                    <label for="fileElem" id="file-label" class="upload-button">
                        <img style="width: 80px;" src="{{ asset('assets/client/images/upload.png') }}"
                            alt="Upload Image">
                        <p>Drop Image Here
                            <span>or <u>Upload a File</u></span>
                        </p>
                    </label>

                    <img id="preview-img" class="preview-img mt-3" style="display: none; width: 100%;"
                        alt="Uploaded Image">
                    <button type="button" id="remove-btn" class="btn btn-danger mt-3"
                        style="display: none; top: 10px; right: 10px;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
