$(document).ready(function () {
    $('.hamburger').click(function () {
        if (!$('.hamburger').hasClass('is-active')) {
            $('#premium-fer').removeClass('col-md-12').addClass('col-md-4');
            $('#premium-fer .premium-upgrade').css('height', '100%');
            $('#premium-fer .premium-upgrade').css('padding-inline', '12px');


            $('#premium-fer .premium-upgrade').css('margin-inline', '5px');



            $('#premium-fer .row').addClass('no-gutters');
            $('#premium-card').removeClass('col-md-12').addClass('col-md-8');
            $('#premium-card .row').addClass('no-gutters');
            $('#premium-fer-left').removeClass('col-md-6').addClass('col-md-12');
            $('#premium-fer-right').removeClass('col-md-6').addClass('col-md-12');
            $('#premium-fer .title span').css('display', 'inline');
            $('.create-slot h2').css('padding-top', '0');

            $('#premium-card .booking-plan-card .booking-plan-card-body ul').css('min-height',
                '177px');

            $('#premium-card .booking-plan-card').css('margin-inline',
                '5px');


            $('#premium-card .booking-plan-card .booking-plan-card-body').css('padding-inline',
                '12px');

            $('#premium-fer-right .right').css('padding-left', '35px');

            $('#premium-fer .premium-upgrade .left p').css('font-size', '18px');
            $('.create-slot h2').css('padding-left', '14px');

            $('#premium-fer .upgrade-1').hide()
            $('#premium-fer .upgrade-2').show()

        } else {
            $('#premium-fer').removeClass('col-md-4').addClass('col-md-12');
            $('#premium-fer .premium-upgrade .left p').css('font-size', '16px');

            $('#premium-card').removeClass('col-md-8').addClass('col-md-12');
            $('#premium-fer-left').removeClass('col-md-12').addClass('col-md-6');
            $('#premium-fer-right').removeClass('col-md-12').addClass('col-md-6');
            $('#premium-fer .title span').css('display', 'block');
            $('.create-slot h2').css('padding-top', '30px');

            $('#premium-card .row').removeClass('no-gutters');
            $('#premium-fer .row').removeClass('no-gutters');

            $('#premium-fer .premium-upgrade').css('padding-inline', '32px');
            $('#premium-card .booking-plan-card .booking-plan-card-body').css('padding-inline',
                '24px');



            $('#premium-card .booking-plan-card .booking-plan-card-body ul').css('min-height',
                '170px');

            $('#premium-fer-right .right').css('padding-left', '0px');


            $('#premium-card .booking-plan-card').css('margin-inline',
                '0');

            $('#premium-fer .premium-upgrade').css('margin-inline', '0');

            $('#premium-fer .upgrade-1').show();
            $('#premium-fer .upgrade-2').hide()
        }
    });
});
