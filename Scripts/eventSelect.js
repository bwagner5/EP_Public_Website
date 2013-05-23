optionEnable = function(previous, next, fireNext, event){
	//previous shoould be the last activated menu, next should be the button that will be activated next
	//prevent bootstrap.js from interfering 
	event.stopPropagation();
	//Enable event type option after the previous is selected
	$(next).removeClass('disabled');
	//Close the previous dropdown
	$('.dropdown-backdrop').remove()
	$(previous).parent().removeClass('open');
	if (fireNext){	
		//Open the next dropdown
		$(next).parent().addClass('open');	
		$(next).parent().triggerHandler('click');
	}
}

$(document).ready(function() {
	
	var location = 'none';
	var attendance = 'none';
	var type = 'none';
	var addOns = [];
	var firstTime = true;
	//Other options cannot be selected unless a location is specified
	$('#eventType-btn, #attendance-btn, #necessities-btn').addClass('disabled');
	
	$('.location-menu .dropSelect').click(function(event) {
		location = $(this).text();
		//If you change the location, the other options must be reset
		$('#attendance-btn, #necessities-btn').addClass('disabled');
		attendance = 'none';
		type = 'none';
		//Enable event type option after a location is selected
		optionEnable('.location-menu', '#eventType-btn', true, event);
	});
	$('#eventType-menu .dropSelect').click(function(event) {
		type = $(this).text();
		//Enable event type option after a location is selected
		optionEnable('#eventType-menu', '#attendance-btn', true, event);
	});
	$('#attendance-menu .dropSelect').click(function(event){
		num = $(this).text();
		$('.eventImg').attr('src',"Images/"+num+".jpg"); //for testing
		optionEnable('#attendance-menu','#necessities-btn', firstTime, event);
		firstTime = false;
	});
	$('#necessities-menu .dropSelect').click(function(event){
		addOns.push($(this).text());
		event.stopPropagation();
	});
});

//Notes
//prevents the dropdown from closing after click
//event.stopPropagation();
//Check Mark	
//var content = $(this).text();
//$(this).text(content+' \u2714')