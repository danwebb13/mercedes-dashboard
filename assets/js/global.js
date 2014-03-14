$(document).ready(function () {

    /* Open popup box */
    var popup = $('.popup');

    $(".open-popup").click(function () {
        popup.removeClass('hidden');
    });

    // Close popup box
    $(".standard-box-footer a").click(function () {
        $("#terms-of-use").addClass('hidden');
    });

    $("#ContinuetoDashboard").click(function () {
        $("#dashboard").submit();
    });

    $('.MvcDynamicFieldError').prepend('<BR><BR>');
    $('.MvcDynamicFieldError').css('font-weight:bold');

});



