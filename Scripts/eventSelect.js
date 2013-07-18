// Photo carosuel function
var infiniteRotator =
{
    init: function(numberOfItems)
    {
        //initial fade-in time (in milliseconds)
        var initialFadeIn = 100;

        //interval between items (in milliseconds)
        var itemInterval = 4000;

        //cross-fade time (in milliseconds)
        var fadeTime = 1000;

        //count number of items
        var numberOfItems = numberOfItems;

        //set current item
        var currentItem = 0;

        //show first item
        $('.eventImg').eq(currentItem).fadeIn(initialFadeIn);

        //loop through the items
        var infiniteLoopID = setInterval(function(){
            $('.eventImg').eq(currentItem).fadeOut(fadeTime);
            
            if(currentItem == numberOfItems -1){
                currentItem = 0;
            }else{
                currentItem++;
            }
            $('.eventImg').eq(currentItem).fadeIn(fadeTime);

        }, itemInterval);
        return infiniteLoopID;
    }
};

// This global stores the specific options for each event space
var eventData;

$.getJSON('../data/eventData.json', function(data){
	eventData = data;
});


$(document).ready(function(){
	sessionStorage.eventInfo = "";
	var type = 'none';
	var infiniteLoopID;
		
	$('#eventType-menu .dropSelect').click(function(event){
		type = $(this).text();
		$('#title').text(eventData[type]["Title"]);
		$('#includedItems').text(eventData[type]["Included Items"]);
		$('#description').text(eventData[type]["Description"]);
		$('#eventType').text(type);
		$('.eventImg').each(function(i){
			if (i < eventData[type]["Image Paths"].length){
				newImage = eventData[type]["Image Paths"][i];

				$(this).attr("src", eventData[type]["Image Paths"][i]);
			}
			else {
				$(this).attr("src", "");
			}
		});
		clearInterval(infiniteLoopID);
		infiniteLoopID = infiniteRotator.init(eventData[type]["Image Paths"].length);
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