var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

$(document).ready(function(){
	//console.log(sessionStorage.eventInfo);
	// Checking if user inputted preset information on another page via HTML5 storage
	if(typeof(sessionStorage.eventInfo)!=="undefined"){
		$('#location').val(sessionStorage.eventInfo);
		sessionStorage.eventInfo = ""
	}
	else {
		console.log("Sorry! No web storage support..");
	}	
	$('.datepicker').datepicker({
	format: 'mm-dd-yyyy',
	onRender: function(date) {
		return date.valueOf() < now.valueOf() ? 'disabled' : '';
	}
	});
	$('.timepicker').timepicker();
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
			eventName: {
				required: true
			},
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
			email: {
				required: true,
				email: true
			},
			phoneNum: {
				required: true
			},
			location: {
				required: true
			},
			eventName: {
				required: false
			},
			date: {
				required: true
			},
			hostFirstName: {
				required: false
			},
			hostLastName: {
				required: false
			},
			hostPhoneNum: {
				required: false
			},
			soundCheck: {
				required: true
			},
			startTime: {
				required: true
			},
			endTime: {
				required: true
			}
		},
		messages: {
			email: {
				required: "Please enter a valid email address"
			},
			eventName: {
				required: "Please enter a name for your event"
			}
		},
		submitHandler: function(form) {
		    $(form).ajaxSubmit();
		}
	});
	$('#affiliationType').on('change',function(){
		// organization code field is only required for student orgs
        if( $(this).val()==="Student Organization"){
        	$("#orgCodeGroup").show();
        	$("#bookingForm").validate().settings.rules.orgCode.required = true;
        }
        else{
        	$("#orgCodeGroup").hide();
        	$("#bookingForm").validate().settings.rules.orgCode.required = false;
        }
    });
    $('#sameInfo').on('change',function(){
    	//Autofill previous contact info
    	console.log("changed");
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