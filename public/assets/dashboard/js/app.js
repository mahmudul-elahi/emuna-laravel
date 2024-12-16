// slider
$(document).ready(function () {
    $(".location-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".location-slider-nav",
    });

    $(".location-slider-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".location-slider",
        centerMode: true,
        focusOnSelect: true,
        arrows: true,
        prevArrow: '<div class="arrow left"><i class="fas fa-angle-left"></i></div>',
        nextArrow: '<div class="arrow right"><i class="fas fa-angle-right"></i></div>',
    });

    $("#newModal").on("shown.bs.modal", function () {
        $(".location-slider, .location-slider-nav").slick("setPosition");
    });
});

// multiple step from
$(document).ready(function () {

    let currentStep = 0;
    const steps = $(".form-step").length;

    function updateProgressBar() {
        const progressPercent = (currentStep / (steps - 1)) * 100;
        $("#progress")
            .css("width", progressPercent + "%")
            .attr("aria-valuenow", progressPercent);

        $(".circle").removeClass("active completed");
        $(".circle").eq(currentStep).addClass("active");
        $(".circle").slice(0, currentStep).addClass("completed");
    }

    $(".next").click(function () {
        currentStep++;
        showStep();
    });

    $(".prev").click(function () {
        currentStep--;
        showStep();
    });

    $("#multiStepForm").on("submit", function (e) {
        e.preventDefault();
        currentStep++;
        showStep();
    });

    function showStep() {
        $(".form-step").removeClass("active");
        $(".form-step").eq(currentStep).addClass("active");
        updateProgressBar();
    }

    showStep();
});

//date picker
$(function () {
    $("#dateInput").datepicker();
});

// Selected slot
$(document).ready(function () {
    const normalCost = 19.9;
    const premiumCost = 25.9;

    let locationTotals = {
        "Location 1": 0,
        "Location 2": 0,
    };

    $(".slot-checkbox").change(function () {
        const slotDiv = $(this).next(".slot");
        const slotText = slotDiv.text();
        const location = $(this).data("location");

        let locationList =
            location === "Location 1" ?
                "#selected-location-1-list" :
                "#selected-location-2-list";
        let totalCostElement =
            location === "Location 1" ?
                "#total-cost-location-1" :
                "#total-cost-location-2";

        if ($(this).is(":checked")) {
            let slotClass =
                $(this).data("type") === "normal" ?
                    "normal" :
                    "premium";
            $(locationList).append(
                `<span class="selected-slot ${slotClass}">${slotText}</span>`
            );

            if (slotClass === "normal") {
                locationTotals[location] += normalCost;
                slotDiv.addClass("selected-normal");
            } else {
                locationTotals[location] += premiumCost;
                slotDiv.addClass("selected-premium");
            }
        } else {
            $(locationList)
                .find(`.selected-slot:contains('${slotText}')`)
                .remove();

            let slotClass =
                $(this).data("type") === "normal" ?
                    "normal" :
                    "premium";
            if (slotClass === "normal") {
                locationTotals[location] -= normalCost;
            } else {
                locationTotals[location] -= premiumCost;
            }
            slotDiv.removeClass("selected-normal selected-premium");
        }

        $(totalCostElement).html(
            `Total: <br><span>$${locationTotals[location].toFixed(
                2
            )}</span>`
        );
    });
});

// File Upload
$(document).ready(function () {
    var uploadArea = $('#upload-area');
    var previewImg = $('#preview-img');
    var removeBtn = $('#remove-btn');
    var fileLabel = $('#file-label');


    $(document).on('dragenter dragover dragleave drop', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });


    uploadArea.on('dragenter', function () {
        $(this).addClass('hover');
    });

    uploadArea.on('dragleave dragend drop', function () {
        $(this).removeClass('hover');
    });


    uploadArea.on('drop', function (e) {
        var files = e.originalEvent.dataTransfer.files;
        handleFiles(files);
    });

    $('#fileElem').on('change', function (e) {
        var files = e.target.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        if (files.length > 0) {
            var file = files[0];

            if (file.type.startsWith('image/')) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    previewImg.attr('src', e.target.result).show();
                    // uploadArea.find('#upload-text').hide();
                    // fileLabel.hide();
                    removeBtn.show();
                }
                reader.readAsDataURL(file);
            } else {
                alert('Please upload an image file.');
            }
        }
    }

    removeBtn.on('click', function () {
        previewImg.attr('src', '').hide();
        uploadArea.find('#upload-text').show();
        fileLabel.show();
        removeBtn.hide();
        $('#fileElem').val('');
    });
});


// Add select product
$(document).ready(function () {
    // Open the modal
    $("#openModal").on("click", function () {
        $("#productModal").modal("show");
    });

    // Product selection
    $("#product_list").on("click", function () {
        const product = $(this).data("product");

        $("#productImage").attr("src", product.image);
        $("#productName").html(
            `<span>Name</span>: ${product.name}`
        );
        $("#productBrand").html(
            `<span>Brand</span>: ${product.brand}`
        );
        $("#productCategory").html(
            `<span>Category</span>: ${product.category}`
        );
        $("#productPrice").html(
            `<span>Price Per Unit</span>: ${product.price}`
        );
        $("#productStocks").html(
            `<span>Available Stocks</span>: ${product.stocks}`
        );
        $("#productWeight").html(
            `<span>Weight</span>: ${product.weight}`
        );
        $("#productDimensions").html(
            `<span>Dimensions</span>: ${product.height} x ${product.width} x ${product.depth}`
        );
        $("#productBarcode").html(
            `<span>Barcode</span>: ${product.barcode}`
        );

        $("#productModal").modal("hide");

        $("#openModal").addClass("d-none");
        $("#changeProductBtn").removeClass("d-none");

        $("#productDetails").removeClass("d-none");
    });

    $("#changeProductBtn").on("click", function () {
        $("#productModal").modal("show");
    });
});


// Checkbox for Date

const twentyFourSevenSwitch =
    document.getElementById("twentyFourSeven");
const daySwitches = document.querySelectorAll(".day-switch");

twentyFourSevenSwitch.addEventListener("change", function () {
    const isChecked = this.checked;

    daySwitches.forEach((switchElement) => {
        switchElement.checked = false;
        switchElement.disabled = isChecked;

        const statusText = "Closed";
        document.getElementById(
            "status-" + switchElement.id
        ).textContent = statusText;

        const timePicker = document.getElementById(
            "time-" + switchElement.id
        );
        timePicker.style.display = "none";
    });
});

daySwitches.forEach((switchElement) => {
    switchElement.addEventListener("change", function () {
        const statusText = this.checked ? "Open" : "Closed";
        document.getElementById("status-" + this.id).textContent =
            statusText;

        const timePicker = document.getElementById(
            "time-" + this.id
        );
        timePicker.style.display = this.checked ? "block" : "none";

        if (twentyFourSevenSwitch.checked) {
            timePicker.style.display = "none";
            document.getElementById(
                "status-" + this.id
            ).textContent = "Closed";
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    const allOption = document.getElementById("all");
    const customOption = document.getElementById("custom");
    const customCheckboxes = document.querySelectorAll(
        '#customCheckboxes input[type="checkbox"]'
    );

    customCheckboxes.forEach((checkbox) => {
        checkbox.disabled = true;
    });

    allOption.addEventListener("change", function () {
        customCheckboxes.forEach((checkbox) => {
            checkbox.disabled = true;
        });
    });

    customOption.addEventListener("change", function () {
        customCheckboxes.forEach((checkbox) => {
            checkbox.disabled = false;
        });
    });
});


// File Upload 2

$(document).ready(function () {
    var uploadArea = $("#upload-area");
    var previewImg = $("#preview-img");
    var removeBtn = $("#remove-btn");
    var fileLabel = $("#file-label");

    $(document).on(
        "dragenter dragover dragleave drop",
        function (e) {
            e.preventDefault();
            e.stopPropagation();
        }
    );

    uploadArea.on("dragenter", function () {
        $(this).addClass("hover");
    });

    uploadArea.on("dragleave dragend drop", function () {
        $(this).removeClass("hover");
    });

    uploadArea.on("drop", function (e) {
        var files = e.originalEvent.dataTransfer.files;
        handleFiles(files);
    });

    $("#fileElem").on("change", function (e) {
        var files = e.target.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        if (files.length > 0) {
            var file = files[0];

            if (file.type.startsWith("image/")) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    previewImg.attr("src", e.target.result).show();
                    uploadArea.find("#upload-text").hide();
                    fileLabel.hide();
                    removeBtn.show();
                };
                reader.readAsDataURL(file);
            } else {
                alert("Please upload an image file.");
            }
        }
    }

    removeBtn.on("click", function () {
        previewImg.attr("src", "").hide();
        uploadArea.find("#upload-text").show();
        fileLabel.show();
        removeBtn.hide();
        $("#fileElem").val("");
    });

    $("#upload-form").on("submit", function (e) {
        e.preventDefault();
        alert(
            "Form submitted! You can add your AJAX upload logic here."
        );
    });
});

// Slot Select And Change

let totalSlots = 0;
let totalLevels = 0;
let slotsPerRow = [];
let rowTypes = [];

function changeTotalSlots(amount) {
    totalSlots += amount;
    if (totalSlots < 0) totalSlots = 0;
    document.getElementById("totalSlots").textContent = totalSlots;

    adjustSlotRows();
}

function changeTotalLevels(amount) {
    totalLevels += amount;
    if (totalLevels < 0) totalLevels = 0;
    document.getElementById("totalLevels").textContent =
        totalLevels;

    adjustSlotRows();
}

function adjustSlotRows() {
    const slotList = document.getElementById("slotList");
    slotList.innerHTML = "";
    if (totalLevels === 0) {
        return;
    }

    const slotsPerLevel = Math.floor(totalSlots / totalLevels);
    const extraSlots = totalSlots % totalLevels;

    slotsPerRow = new Array(totalLevels).fill(slotsPerLevel);
    rowTypes = new Array(totalLevels).fill(false);

    for (let i = 0; i < extraSlots; i++) {
        slotsPerRow[i]++;
    }

    for (let i = 0; i < totalLevels; i++) {
        const row = document.createElement("tr");
        row.innerHTML = `
                    <td class="align-middle">
                       <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-primary"
                                onclick="changeRowSlot(${i}, 1)">+</button>

                            <div class="step-counter">${slotsPerRow[i]}</div>
                            <button type="button" class="btn btn-primary"
                                onclick="changeRowSlot(${i}, -1)">-</button>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="doubleSwitch${i}" onchange="toggleRowType(${i})">
                            <label class="form-check-label" for="doubleSwitch${i}">Double Row</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="slot-container2" id="slotContainer${i}">
                            ${generateSlotBlocks(i)}
                        </div>
                    </td>
                `;
        slotList.appendChild(row);
    }
}

function changeRowSlot(rowIndex, amount) {
    if (slotsPerRow[rowIndex] + amount > 30) {
        alert("Maximum 8 slots per row!");
        return;
    }

    slotsPerRow[rowIndex] += amount;
    if (slotsPerRow[rowIndex] < 0) slotsPerRow[rowIndex] = 0;

    totalSlots += amount;
    if (totalSlots < 0) totalSlots = 0;

    document.getElementById("totalSlots").textContent = totalSlots;
    document.getElementById(`slotContainer${rowIndex}`).innerHTML =
        generateSlotBlocks(rowIndex);

    const productCell = document.querySelector(
        `#slotList tr:nth-child(${rowIndex + 1}) td:first-child`
    );
    productCell.innerHTML = ` <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-primary"
                                onclick="changeRowSlot(${rowIndex}, 1)">+</button>

                            <div class="step-counter">${slotsPerRow[rowIndex]}</div>
                            <button type="button" class="btn btn-primary"
                                onclick="changeRowSlot(${rowIndex}, -1)">-</button>
                        </div>`;
}

function toggleRowType(rowIndex) {
    rowTypes[rowIndex] = !rowTypes[rowIndex];

    document.getElementById(`slotContainer${rowIndex}`).innerHTML =
        generateSlotBlocks(rowIndex);
}

function generateSlotBlocks(rowIndex) {
    let slotBlocks = "";
    const rowLetter = String.fromCharCode(65 + rowIndex);

    const totalSlotsInRow = slotsPerRow[rowIndex];

    const isDouble = rowTypes[rowIndex];

    if (isDouble) {
        for (let i = 0; i < totalSlotsInRow; i++) {
            if (i % 2 === 0 && i + 1 < totalSlotsInRow) {
                slotBlocks += `
                            <div class="slot-block">
                                ${rowLetter}${i + 1}&${rowLetter}${i + 2}
                            </div>`;
                i++;
            } else {
                slotBlocks += `<div class="slot-block">${rowLetter}${i + 1
                    }</div>`;
            }
        }
    } else {
        for (let i = 0; i < totalSlotsInRow; i++) {
            slotBlocks += `<div class="slot-block">${rowLetter}${i + 1
                }</div>`;
        }
    }

    return slotBlocks;
}

// Editor

tinymce.init({
    selector: '#content',
    plugins: 'lists link image table code',
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code',
    menubar: false,
    height: 200,
});

// change the status

function loadview(view) {
    $('#show-content > div').fadeOut(100);
    $(`#${view}`).delay(300).fadeIn(100);
}
