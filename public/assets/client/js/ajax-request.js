$(document).ready(function () {


    // Login Request
    $('.loginBtn').on('click', function () {

        //Form Data
        var formData = new FormData($('#loginForm')[0]);

        //See data in the console
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }

        //Make request Here

    });


    //Register Request
    $('#registerBtn').on('click', function () {
        var formData = new FormData($('#registerForm')[0]);

        //See data in the console
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }


        //Make request Here
    });



    $("#submitSellerData").on("click", function () {
        var formData = new FormData($('#multiStepFormSeller')[0]);

        //See data in the console
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }


        //Make request Here
    });


    $("#submitFranchiserData").on("click", function () {
        var formData = new FormData($('#multiStepFormFranchiser')[0]);

        //See data in the console
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }


        //Make request Here
    });

    $("#submitHaveVending").on("click", function () {
        var formData = new FormData($('#multiStepFormHaveVendin')[0]);

        //See data in the console
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }


        //Make request Here
    });






});
