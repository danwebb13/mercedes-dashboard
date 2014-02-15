$(function() {

	// Progress Bar
	var progressbar = $( "#progressbar" ),
	  	progressLabel = $( ".js-progress-label" );

	progressbar.progressbar({
	  value: 10,
	});

	// Progress label = value 
	progressLabel.text( progressbar.progressbar( "value" ) + "%" );

});