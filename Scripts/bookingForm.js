//This validation script uses the jQuery validation plugin
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
		mailNum: {
			required: false
		},
		type: {
			required: true
		},
		orgCode: {
			required: true
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
		phoneNum2: {
			required: false
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
			required: "Please enter a valid email address",
			minlength: "Please enter a valid email address",
		}
	},
	submitHandler: function(form) {
	    $(form).ajaxSubmit();
	}
});
