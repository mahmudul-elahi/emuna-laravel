<div class="product-info">
    <h3>Order Quantity Preference</h3>
</div>


<div class="row">
    <div class="col-md-3">
        <div class="mb-4">
            <label class="mb-2 pl-4" for="minOrderPieces">
                <input type="checkbox" class="form-check-input" id="minOrderCheckbox">
                <span class="pl-2 text-dark">Minimum Order (Pieces)</span>
            </label>
            <input type="text" class="form-control" id="minOrderPieces" name="min_order_pieces"
                placeholder="Enter minimum order (e.g., 50)">
        </div>
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-3">
        <div class="mb-4">
            <label class="mb-2 pl-4" for="bulkOrder">
                <input type="checkbox" class="form-check-input" id="bulkOrderCheckbox">
                <span class="pl-2 text-dark">Accepting Bulk Orders</span>
            </label>
            <input type="text" class="form-control" id="bulkOrder" name="bulk_order"
                placeholder="Enter bulk order details">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <label class="mb-2" for="deliveryCondition">Delivery Condition<span>*</span></label>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <input type="radio" id="deliveryFree" name="delivery_condition" value="free">
                <p class="text-muted m-0 ml-3">Free</p>
            </div>
        </div>
    </div>

    <div class="col-md-1"></div>


    <div class="col-md-3">
        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <input type="radio" id="deliveryConditional1" name="delivery_condition" value="conditional_1">
                <p class="text-muted m-0 ml-3">Conditional</p>
            </div>
            <div class="form-group">
                <label for="conditionalNote1">Conditional Note<span>*</span></label>
                <input type="text" name="conditional_note_1" id="conditionalNote1" class="form-control"
                    placeholder="Enter condition note">
            </div>
        </div>
    </div>

    <div class="col-md-1"></div>


    <div class="col-md-3">
        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <input type="radio" id="deliveryConditional2" name="delivery_condition" value="conditional_2">
                <p class="text-muted m-0 ml-3">Paid</p>
            </div>
            <div class="form-group">
                <label for="conditionalNote2">Delivery Charge (Per Order)<span>*</span></label>
                <input type="text" name="conditional_note_2" id="conditionalNote2" class="form-control"
                    placeholder="Enter condition note">
            </div>
        </div>
    </div>
</div>

<div class="border-top my-3"></div>

<div class="product-info">
    <h3>Delivery Process</h3>
</div>

<div class="row">
    <div class="col-md-12">
        <label class="mb-2" for="deliveryCondition">Delivery Time<span>*</span></label>
    </div>




    <div class="col-md-3">
        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <input type="checkbox" id="deliveryConditional1" name="delivery_condition" value="conditional_1"
                    checked>
                <p class="text-dark m-0 ml-3" style="font-size: 16px">Standard</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex align-items-center mt-1 mb-4" style="gap: 10px">
                        <span class="text-dark">Time</span>
                        <div class="d-flex align-items-center" style="gap: 10px">
                            <input type="text" id="sundayStart" class="form-control form-control-sm py-2"
                                style="width: 100px;" placeholder="Min Days">

                            <span>To</span>

                            <input type="text" id="sundayEnd" class="form-control form-control-sm py-2"
                                style="width: 100px;" placeholder="Max Days">
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="d-block" for="conditionalNote1">Pricing
                    Breakdown<span>*</span></label>

                <div class="form-group">
                    <label class="mb-2 pl-4" for="minOrderPieces">
                        <input type="checkbox" class="form-check-input" id="minOrderCheckbox" checked>
                        <span class="pl-2 text-dark">Within Country</span>
                    </label>

                    <input type="text" name="conditional_note_1" id="conditionalNote1" class="form-control"
                        placeholder="Enter condition note">
                </div>

                <div class="form-group">
                    <label class="mb-2 pl-4" for="minOrderPieces">
                        <input type="checkbox" class="form-check-input" id="minOrderCheckbox" checked>
                        <span class="pl-2 text-dark">Within Country</span>
                    </label>

                    <input type="text" name="conditional_note_1" id="conditionalNote1" class="form-control"
                        placeholder="Enter condition note">
                </div>

                <div class="form-group">
                    <label class="mb-2 pl-4" for="minOrderPieces">
                        <input type="checkbox" class="form-check-input" id="minOrderCheckbox" checked>
                        <span class="pl-2 text-dark">Within Country</span>
                    </label>

                    <input type="text" name="conditional_note_1" id="conditionalNote1" class="form-control"
                        placeholder="Enter condition note">
                </div>

            </div>


        </div>
    </div>

    <div class="col-md-1"></div>


    <div class="col-md-3">
        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <input type="checkbox" id="deliveryConditional1" name="delivery_condition" value="conditional_1"
                    checked>
                <p class="text-dark m-0 ml-3" style="font-size: 16px">Express</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex align-items-center mt-1 mb-4" style="gap: 10px">
                        <span class="text-dark">Time</span>
                        <div class="d-flex align-items-center" style="gap: 10px">
                            <input type="text" id="sundayStart" class="form-control form-control-sm py-2"
                                style="width: 100px;" placeholder="Min Days">

                            <span>To</span>

                            <input type="text" id="sundayEnd" class="form-control form-control-sm py-2"
                                style="width: 100px;" placeholder="Max Days">
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="d-block" for="conditionalNote1">Pricing
                    Breakdown<span>*</span></label>

                <div class="form-group">
                    <label class="mb-2 pl-4" for="minOrderPieces">
                        <input type="checkbox" class="form-check-input" id="minOrderCheckbox" checked>
                        <span class="pl-2 text-dark">Within Country</span>
                    </label>

                    <input type="text" name="conditional_note_1" id="conditionalNote1" class="form-control"
                        placeholder="Enter condition note">
                </div>

                <div class="form-group">
                    <label class="mb-2 pl-4" for="minOrderPieces">
                        <input type="checkbox" class="form-check-input" id="minOrderCheckbox" checked>
                        <span class="pl-2 text-dark">Within Country</span>
                    </label>

                    <input type="text" name="conditional_note_1" id="conditionalNote1" class="form-control"
                        placeholder="Enter condition note">
                </div>

                <div class="form-group">
                    <label class="mb-2 pl-4" for="minOrderPieces">
                        <input type="checkbox" class="form-check-input" id="minOrderCheckbox" checked>
                        <span class="pl-2 text-dark">Within Country</span>
                    </label>

                    <input type="text" name="conditional_note_1" id="conditionalNote1" class="form-control"
                        placeholder="Enter condition note">
                </div>

            </div>


        </div>
    </div>


</div>
