$(function() {

	// Progress Bar
	var progressbar = $( "#progressbar" ),
	  	progressLabel = $( ".js-progress-value" );

	progressbar.progressbar({
	  value: 10,
	});

	// Progress label = value 
	progressLabel.text( progressbar.progressbar( "value" ) + "%" );


	// Initialize Tabs
	$('#tabs').tabs();

	// Make entire div clickable
	$('.js-dashboard-module').click(function(){
	     window.location=$(this).find(".js-dashboard-module--link").attr("href"); 
	     return false;
	});

});