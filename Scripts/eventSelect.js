// This global stores the specific options for each event space
var eventData;

$.getJSON('../data/eventData.json', function(data){
	eventData = data;
});


$(document).ready(function(){
	sessionStorage.eventInfo = "";
	var type = 'none';
		
	$('#eventType-menu .dropSelect').click(function(event){
		type = $(this).text();
		$('#selectedType').text(type);
		// Formating the addons
		var displayAddOns = "";
		var items = eventData[type]["Included Items"];
		for (i = 0; i < items.length; i++){
			displayAddOns += items[i];
			if (i != items.length - 1){
				displayAddOns += ", ";
			}  
		}
		$('#includedItems').text(displayAddOns);
		$('#description').text(eventData[type]["Description"]);
		$('#diagramLink').show();
		$('.eventImg').attr("src", eventData[type]["Image Path"]);
	});
	
	//Click the large picture to enter overlay mode
	$("#diagramLink").click(function() {
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
			  sessionStorage.eventInfo = type;	
			}
			else {
			  console.log("Sorry! No web storage support..");
			}
		}
	});
});