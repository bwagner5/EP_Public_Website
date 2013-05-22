$(document).ready(function() {

	var location = 'none';
	var attendance = 'none';
	var type = 'none';
	var addOns = [];
	//Other options cannot be selected unless a location is specified
	$("#eventType-btn, #attendance-btn, #necessities-btn").addClass("disabled");
	
	$(".location-menu .dropSelect").click(function(event) {
		location = $(this).text();
		//Enable event type option after a location is selected
		$("#eventType-btn").removeClass("disabled");
	});
	$("#eventType-menu .dropSelect").click(function(event) {
		type = $(this).text();
		//Enable event type option after a location is selected
		$("#attendance-btn").removeClass("disabled");	
	});
	$("#attendance-menu .dropSelect").click(function(event){
		num = $(this).text();
		$('.eventImg').attr("src",'Images/'+num+'.jpg'); //for testing
		$("#necessities-btn").removeClass("disabled");
	});
	$("#necessities-menu .dropSelect").click(function(event){
		addOns.push($(this).text());
	});
});

//Notes
//prevents the dropdown from closing after click
//event.stopPropagation();
//Check Mark	
//var content = $(this).text();
//$(this).text(content+' \u2714')