var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

$(document).ready(function(){
	//console.log(sessionStorage.eventInfo);
	// Checking if user inputted preset information on another page via HTML5 storage
	if(typeof(sessionStorage.eventInfo)!=="undefined"){
		var importedInfo = sessionStorage.eventInfo.split(",");
		console.log(importedInfo);
		$('#location').val(importedInfo[0]);
		$('#eventType').val(importedInfo[1]);
		$('#attendance').val(importedInfo[2]);
		sessionStorage.eventInfo = "";
	}
	else {
		console.log("No web storage support");
	}	
	$('.datepicker').datepicker({
		format: 'mm-dd-yyyy',
		onRender: function(date) {
			return date.valueOf() < now.valueOf() ? 'disabled' : '';
		}
	});
	$('.timepicker').timepicker();
	$('#location').typeahead({
		items: 18,
		source: [
			"Aquatic Center",
			"CFA Grand Tier",
			"CFA Lobby",
			"Field House",
			"North Plaza - Clock",
			"North Plaza - Statue",
			"South Plaza",
			"President's Park",
			"The Quad",
			"Southside Plaza",
			"Rogers",
			"The RAC",
			"The RAC Field",
			"Starbucks",
			"Other",
			"JC Dewberry Hall",
			"JC Dewberry North",
			"JC Dewberry South",
			"JC Cinema",
			"JC Atrium",
			"JC Gold Room",
			"JC Meeting Room",
			"JC George's",
			"JC Dance Studio",
			"The HUB Ball Room Full",
			"The HUB Ball Room Front",
			"The HUB Ball Room Mid",
			"The HUB Ball Room Back",
			"The HUB Meeting Room",
			"The HUB VIP",
			"The HUB Corner Pocket",
			"Mason Hall Atrium",
			"Mason Hall D1",
			"Mason Hall D3 A & B",
			"Mason Hall D5",
			"Mason Hall D7",
			"Mason Hall Edwin Meese",
			"Mason Inn Grand Ballroom",
			"Mason Inn Junior Ballrom",
			"Mason Inn Meeting Room",
			"Patriot Center",
			"Patriot Center South Enterance",
			"Patriot Center East Enterance",
			"Research Room 163",
			"Southside",
		]
	});
	// This validation script uses the jQuery validation plugin
	var validator = $("#bookingForm").validate({
		  invalidHandler: function(event, validator) {
		    // 'this' refers to the form
		    var errors = validator.numberOfInvalids();
		    if (errors) {
		      var message = errors == 1
		        ? 'You missed 1 field. It has been highlighted'
		        : 'You missed ' + errors + ' fields. They have been highlighted';
		      $("#error").html(message);
		      $("#error").show();
		    } else {
		      $("#error").hide();
		    }
		  },
		rules: {
			name: {
				required: true
			},
			affiliationType: {
				required: true
			},
			orgCode: {
				//This may change based on prior inputs
				required: false
			},
			requestorFirstName: {
				required: true
			},
			requestorLastName: {
				required: true
			},
			requestorPhoneNum: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			eventName: {
				required: true
			},
			date: {
				required: true
			},
			soundCheck: {
				required: true
			},
			startTime: {
				required: true
			},
			endTime: {
				required: true
			},
			hostFirstName: {
				required: false
			},
			hostLastName: {
				required: false
			},
			location: {
				required: true
			},
			eventType: {
				required: true
			},
			performers: {
				required: false
			},
			attendance: {
				required: true
			},
			eventDescription: {
				required: false
			},
			honor: {
				required: true
			},
		},
		messages: {
			email: {
				required: "Please enter a valid email address"
			},
			eventName: {
				required: "Please enter a name for your event"
			},
			eventType: {
				required: "Please select at least one event type"
			},
			honor: {
				required: "Please agree to the terms and conditions."
			}
		},
		submitHandler: function(form) {
			// Code for when the form is sumbited
		    $(form).ajaxSubmit();
		}
	});
	$('#affiliationType').change(function(){
		// organization code field is only required for student orgs
		console.log("Changed");
        if( $(this).val()=="Student Organization"||$(this).val()=="Mason Department"){
        	$("#bookingForm").validate().settings.rules.orgCode.required = true;
        }
        else{
        	$("#bookingForm").validate().settings.rules.orgCode.required = false;
        }
    });
    $('#sameInfo').on('change',function(){
    	//Autofill previous contact info
	    if ($(this).is(':checked')) {
		    if ($('#hostFirstName').val() != "") $('#requestorFirstName').val($('#hostFirstName').val());
		    if ($('#hostLastName').val() != "") $('#requestorLastName').val($('#hostLastName').val());
		    if ($('#phoneNum').val() != "") $('#requestorPhoneNum').val($('#phoneNum').val());
	    }
    });
    // Popover Initialization
    $('#soundcheckQuestion').popover({
    	title:'', 
    	content:"\"Sound check\" is the time at which you would like your event to be setup and ready to view. Depending on the size of the event, this time is usually reccomended to be an hour or more before the event begins.", 
    	trigger:"hover"
    });
    $('#orgCodeQuestion').popover({
    	title:'', 
    	content:"Offical GMU student organizations have a unique identification code. This code is required for student organizations to book EP for events.", 
    	trigger:"hover"
    });
});