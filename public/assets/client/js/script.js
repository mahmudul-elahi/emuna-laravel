$(function () {
    //Navbar Scroll Effect
    var navbar = $('#navbar')

    $(window).scroll(() => {
        var scrollPosition = $(this).scrollTop()

        if (scrollPosition > 100) {
            navbar.addClass('navbarActive')
        } else if (scrollPosition <= 0) {
            navbar.removeClass('navbarActive')
        }
    })

})

// MultiStep Form
$(document).ready(function () {
    let currentStep = 0;
    const steps = $(".form-step").length;

    function updateProgressBar() {
        const progressPercent = ((currentStep) / (steps - 1)) * 100;
        $("#progress").css("width", progressPercent + "%").attr("aria-valuenow", progressPercent);

        // Update active and completed classes for circles
        $(".circle").removeClass("active completed");
        $(".circle").eq(currentStep).addClass("active");
        $(".circle").slice(0, currentStep).addClass("completed");
    }

    $(".next").click(function () {
        if (validateForm()) {
            currentStep++;
            showStep();
        }
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

    function validateForm() {

        //Validate the form in client side here
        return true;
    }

    showStep();
});


// Drag and Drop Image
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
                    uploadArea.find('#upload-text').hide();
                    fileLabel.hide();
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

    $('#upload-form').on('submit', function (e) {
        e.preventDefault();
        alert('Form submitted! You can add your AJAX upload logic here.');
    });

});

//Select Flag For Language
$(document).ready(function () {
    $('#imageSelect').select2({
        theme: 'bootstrap-5',
        templateResult: formatState,
        templateSelection: formatState,
        minimumResultsForSearch: Infinity,
    });

    function formatState(state) {
        if (!state.id) {
            return state.text;
        }

        var imageUrl = $(state.element).data('image');
        var $state = $(
            '<span><img src="' + imageUrl + '" class="img-flag" width="20" height="20" /> ' + state.text + '</span>'
        );
        return $state;
    }
});
