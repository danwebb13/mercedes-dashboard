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

    // Initialize Tabs
    $('#tabs').tabs();

    // Progress Bar
    var progressbar = $( "#progressbar" ),
        progressLabel = $( ".js-progress-value" );

    progressbar.progressbar({
      value: 10,
    });

    // Progress label = value 
    progressLabel.text( progressbar.progressbar( "value" ) + "%" );

    // Dialog box
    $(function() {
        var incomplete  = "#js-dialog-incomplete";

        $( incomplete ).dialog({
          resizable: false,
          width: 320,
          height: 160,
          modal: true,
          buttons: {
            "Complete Driver Profile": function() {
              $( this ).dialog( "close" );
            },
            Close: function() {
              $( this ).dialog( "close" );
            }
          }
        });

    });

    // Launch fancybox video
    $(".js-fancybox").on("click", function(){
        $.fancybox({
          href: this.href,
          type: $(this).data("type"),
          height: 450
        });
        return false;
    });


});