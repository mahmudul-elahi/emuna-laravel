<div class="row">
    <div class="col-md-12">
        <div class="location-hour">
            <h3 class="m-0">Slots Configuration</h3>
        </div>
    </div>
    <div class="col-md-8">
        <div class="d-flex align-items-center slot-heading">
            <div class="mr-4">
                <p>Total Slots</p>

                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary" onclick="changeTotalSlots(1)">+</button>

                    <div class="step-counter" id="totalSlots">0</div>
                    <button type="button" class="btn btn-primary" onclick="changeTotalSlots(-1)">-</button>
                </div>
            </div>

            <div>
                <p>Total Levels</p>

                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary" onclick="changeTotalLevels(1)">+</button>

                    <div class="step-counter" id="totalLevels">0</div>
                    <button type="button" class="btn btn-primary" onclick="changeTotalLevels(-1)">-</button>
                </div>
            </div>
        </div>

        <div class="vending-table-padding mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 20%">Product</th>
                        <th style="width: 20%">Row Type</th>
                        <th style="width: 60%">Slot Distribution</th>
                    </tr>
                </thead>
                <tbody id="slotList"></tbody>
            </table>
        </div>

    </div>
</div>
