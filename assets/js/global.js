$(function() {

	// Progress Bar
	var progressbar = $( "#progressbar" ),
	  	progressLabel = $( ".js-progress-value" );

	progressbar.progressbar({
	  value: 10,
	});

	// Progress label = value 
	progressLabel.text( progressbar.progressbar( "value" ) + "%" );

});