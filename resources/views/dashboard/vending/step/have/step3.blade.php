<div class="location-hour">
    <h3>Location & Opening Hours</h3>
</div>


<div class="row">
    <div class="col-md-3">
        <div class="mb-4">
            <label for="locationName">Location Name<span>*</span></label>
            <input type="text" class="form-control" id="locationName" name="location_name" placeholder="15/A">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label for="shopHouseNo">Shop/House No.<span>*</span></label>
            <input type="text" class="form-control" id="shopHouseNo" name="shop_house_no" placeholder="15/A">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label for="street">Street<span>*</span></label>
            <input type="text" class="form-control" id="street" name="street" placeholder="Street Name">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label for="city">City<span>*</span></label>
            <input type="text" class="form-control" id="city" name="city" placeholder="City Name">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-4">
            <label for="stateCode">State-Code<span>*</span></label>
            <input type="text" class="form-control" id="stateCode" name="state_code" placeholder="State Code">
        </div>
    </div>


    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">

                {{-- Location Type --}}
                <div class="row">
                    <div class="col-md-9">
                        <h6 class="location-type">Location Type</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="location"
                                            id="locationIndoor" value="indoor">
                                        <label class="form-check-label" for="locationIndoor">In-Door</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="location"
                                            id="locationOutdoor" value="outdoor">
                                        <label class="form-check-label" for="locationOutdoor">Out-Door</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="location" id="locationBoth"
                                            value="both">
                                        <label class="form-check-label" for="locationBoth">Both</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mt-2">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="access" id="accessPublic"
                                            value="public">
                                        <label class="form-check-label" for="accessPublic">Public</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="access" id="accessPrivate"
                                            value="private">
                                        <label class="form-check-label" for="accessPrivate">Private</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="access" id="accessBoth"
                                            value="both">
                                        <label class="form-check-label" for="accessBoth">Both</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                </div>
                {{-- Location Time End --}}


                <div class="row">
                    <div class="col-md-8 mt-4">
                        <div class="mb-4 pe-4">
                            <label for="nearby">Nearby<span>*</span></label>
                            <input id="nearby" name="nearby_tags" placeholder="Type Here" class="form-control"
                                value="" />
                        </div>
                    </div>
                </div>


                {{-- Operating Hours --}}
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="opeing-h">Operating Hours</h4>

                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="twentyFourSeven">24/7</label>
                                </div>
                                <div class="col-md-1">
                                    <input class="form-check-input" type="checkbox" id="twentyFourSeven"
                                        name="operating_hours[24_7]" value="1">
                                </div>
                            </div>

                            <!-- Sunday -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="sunday">Sunday</label>
                                </div>
                                <div class="col-md-1">
                                    <input class="form-check-input day-switch" type="checkbox" role="switch"
                                        id="sunday" name="operating_hours[sunday]" value="1">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <span class="status mr-4" id="status-sunday">Closed</span>
                                        <div class="time-picker" id="time-sunday" style="display: none;">
                                            <input type="time" id="sundayStart"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="09:00"
                                                name="operating_hours[sunday_start]">
                                            <input type="time" id="sundayEnd"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="20:00"
                                                name="operating_hours[sunday_end]">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Monday -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="monday">Monday</label>
                                </div>
                                <div class="col-md-1">
                                    <input class="form-check-input day-switch" type="checkbox" role="switch"
                                        id="monday" name="operating_hours[monday]" value="1">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <span class="status mr-4" id="status-monday">Closed</span>
                                        <div class="time-picker" id="time-monday" style="display: none;">
                                            <input type="time" id="mondayStart"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="09:00"
                                                name="operating_hours[monday_start]">
                                            <input type="time" id="mondayEnd"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="20:00"
                                                name="operating_hours[monday_end]">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tuesday -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="tuesday">Tuesday</label>
                                </div>
                                <div class="col-md-1">
                                    <input class="form-check-input day-switch" type="checkbox" role="switch"
                                        id="tuesday" name="operating_hours[tuesday]" value="1">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <span class="status mr-4" id="status-tuesday">Closed</span>
                                        <div class="time-picker" id="time-tuesday" style="display: none;">
                                            <input type="time" id="tuesdayStart"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="09:00"
                                                name="operating_hours[tuesday_start]">
                                            <input type="time" id="tuesdayEnd"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="20:00"
                                                name="operating_hours[tuesday_end]">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Wednesday -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="wednesday">Wednesday</label>
                                </div>
                                <div class="col-md-1">
                                    <input class="form-check-input day-switch" type="checkbox" role="switch"
                                        id="wednesday" name="operating_hours[wednesday]" value="1">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <span class="status mr-4" id="status-wednesday">Closed</span>
                                        <div class="time-picker" id="time-wednesday" style="display: none;">
                                            <input type="time" id="wednesdayStart"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="09:00"
                                                name="operating_hours[wednesday_start]">
                                            <input type="time" id="wednesdayEnd"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="20:00"
                                                name="operating_hours[wednesday_end]">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Thursday -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="thursday">Thursday</label>
                                </div>
                                <div class="col-md-1">
                                    <input class="form-check-input day-switch" type="checkbox" role="switch"
                                        id="thursday" name="operating_hours[thursday]" value="1">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <span class="status mr-4" id="status-thursday">Closed</span>
                                        <div class="time-picker" id="time-thursday" style="display: none;">
                                            <input type="time" id="thursdayStart"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="09:00"
                                                name="operating_hours[thursday_start]">
                                            <input type="time" id="thursdayEnd"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="20:00"
                                                name="operating_hours[thursday_end]">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Friday -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="friday">Friday</label>
                                </div>
                                <div class="col-md-1">
                                    <input class="form-check-input day-switch" type="checkbox" role="switch"
                                        id="friday" name="operating_hours[friday]" value="1">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <span class="status mr-4" id="status-friday">Closed</span>
                                        <div class="time-picker" id="time-friday" style="display: none;">
                                            <input type="time" id="fridayStart"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="09:00"
                                                name="operating_hours[friday_start]">
                                            <input type="time" id="fridayEnd"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="20:00"
                                                name="operating_hours[friday_end]">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Saturday -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="saturday">Saturday</label>
                                </div>
                                <div class="col-md-1">
                                    <input class="form-check-input day-switch" type="checkbox" role="switch"
                                        id="saturday" name="operating_hours[saturday]" value="1">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <span class="status mr-4" id="status-saturday">Closed</span>
                                        <div class="time-picker" id="time-saturday" style="display: none;">
                                            <input type="time" id="saturdayStart"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="09:00"
                                                name="operating_hours[saturday_start]">
                                            <input type="time" id="saturdayEnd"
                                                class="form-control form-control-sm d-inline time-input"
                                                style="width: auto;" value="20:00"
                                                name="operating_hours[saturday_end]">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Select Time End --}}

            </div>


            <div class="col-md-4">
                <h6 class="map">Select location from the map</h6>
                <div class="map-img">

                    <div style=" border-radius: 12px; min-height: 300px;" id="map">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
