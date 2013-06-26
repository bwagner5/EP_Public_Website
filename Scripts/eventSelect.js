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

includedItems = {"Dewberry Hall": "Projector, Microphone"};

$(document).ready(function() {
	sessionStorage.eventInfo = "";
	var location = 'none';
	var parentLocation = "none"
	var attendance = 'none';
	var type = 'none';
	var addOns = [];
	var firstTime = true;
	var overlayMode = false
	//Other options cannot be selected unless a location is specified
	$('#eventType-btn, #attendance-btn, #necessities-btn, .submitButton').addClass('disabled');
	
	$('.location-menu .dropSelect').click(function(event) {
		location = $(this).text()
		if (location != "Other"){
			parentLocation = $(this).parent().parent().siblings('.parentLocation').text();
			if (parentLocation == "The HUB (SUB II)"){
				parentDisplayLocation = "The HUB";
			}
			else if (parentLocation == "Johnson Center") {
				parentDisplayLocation = "JC";
			}
			$('#selectedLocation').html(parentDisplayLocation + ", " + location + ' - <a id="diagramLink"><b>(View Diagram)</b></a>');
		}
		else {
			$('#selectedLocation').html("Other");
		}
		$('.overlayImg').attr("src","images/diagram.jpg");
		
		if (typeof(includedItems[location]) != "undefined"){
			$('#includedItems').html(includedItems[location]);
		} else {
			$('#includedItems').html("");
		}
		
		//If you change the location, the other options must be reset
		$('#attendance-btn, #necessities-btn, .submitButton').addClass('disabled');
		$('#selectedType, #selectedAttendance').empty();
		attendance = type = 'none';
		//Enable event type option after a location is selected
		optionEnable('.location-menu', '#eventType-btn', false, event);
	});
	$('#eventType-menu .dropSelect').click(function(event){
		type = $(this).text();
		$('#selectedType').html(type)
		//Enable event type option after a location is selected
		optionEnable('#eventType-menu', '#attendance-btn', false, event);
	});
	$('#attendance-menu .dropSelect').click(function(event){
		attendance = $(this).text();
		$('.eventImg').attr('src',"images/"+attendance+".jpg"); //for testing
		$('.captionText').html($('#'+attendance).html()); 
		$('#selectedAttendance').html(attendance)
		//Enable the necessities and submit button after attendace is selected
		optionEnable('#attendance-menu','#necessities-btn', false, event);
		$('.submitButton').removeClass('disabled');
		firstTime = false;
	});
	$('#necessities-menu input[name="extras"]').click(function(event){
		if ($(this).prop('checked')) addOns.push($(this).parent().text());
		else {
			var index = addOns.indexOf($(this).parent().text());
			addOns.splice(index, 1);
		}
		var displayAddOns = "";
		for (i = 0; i < addOns.length; i++){
			displayAddOns += addOns[i];
			if (i != addOns.length - 1){
				displayAddOns += ", ";
			}  
		}
		$('#selectedExtras').html(displayAddOns);
		event.stopPropagation();
	});
	//Click the large picture to enter overlay mode
	$(document).on("click", "#diagramLink", function() {
		$(".overlay").toggle();
		overlayMode = true;
	});
	//Exit overlay mode
	$(".overlay").on("click", function() {
		$(".overlay").toggle();
		overlayMode = false;
	});
	$(document).keydown(function(input) {
		//Keypress functionality
		var key = parseInt(input.which,10);
		if (parseInt(key,10) == 27 && overlayMode){ //esc
			$(".overlay").toggle();
			overlayMode = false;
		}
	});
	$('.submitButton').click(function(event){
		if ($(this).hasClass('disabled')){
			$(this).parent().removeAttr("href");
		}
		else {
			$(this).parent().attr("href","../bookingForm");
			submitObject = {
				location:location,
				attendance:attendance,
				type:type,
				addOns:addOns
			}
			if(typeof(Storage)!=="undefined"){
			  sessionStorage.eventInfo = submitObject["location"]+","+
			  							 submitObject["type"]+","+	
										 submitObject["attendance"]+",";
			}
			else {
			  console.log("Sorry! No web storage support..");
			}
		}
	});
});
//Notes
//prevents the dropdown from closing after click
//event.stopPropagation();
//Check Mark	
//var content = $(this).text();
//$(this).text(content+' \u2714')