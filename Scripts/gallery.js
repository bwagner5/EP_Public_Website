$.preload = function() {
    this.each(function(){
        $('<img/>')[0].src = this;
    });
}

imgOrient = function(img, size) {
	if ($(img).height() > $(img).width()){
		console.log("switched");
		$(img).css({
			"max-height":size,
			"max-width":"none"
		});	 
	}
	else {
		$(img).css({
			"max-width":size,
			"height":"none"
		});	 
	}
}

setChange = function() {
	var newSet = Math.floor(currentImg/5);
	if (newSet != currentSet) {
		currentSet = newSet;
		var i = 0;
		$(".galleryBar > label > img").each(function(){
			$(this).attr("src","Gallery/"+((currentSet*5)+i)+".jpg");
			i++;
		});
	}
}

var currentImg = 0;
var currentSet = 0;
var overlayMode = false;
	
$(document).ready(function() {
	
	$(".galleryBar input").on("click", function() {
	  currentImg = parseInt($(".galleryBar input:checked").val())+currentSet*5;
	  $(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
	});
	
	//Click the large picture to enter overlay mode
	$(".mainDisplay").on("click", function() {
		$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
		imgOrient(".overlayImg", "100%");
		$(".overlay").toggle();
		overlayMode = true;
	});
	//Exit overlay mode
	$(".overlay").on("click", function() {
		$(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
		setChange();
		$("#img"+currentImg%5).prop("checked", true);
		$(".overlay").toggle();
		overlayMode = false;
	});
	$("#rightArrow").on("click", function(click) {
		currentImg += 1;
		$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
		imgOrient(".overlayImg", "100%");
		click.stopPropagation();
	});
	$("#leftArrow").on("click", function(click) {
		if (currentImg > 0) currentImg -= 1;
		$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
		imgOrient(".overlayImg", "100%");
		click.stopPropagation();
	});
	$(document).keydown(function(input) {
		//Keypress functionality
		var key = parseInt(input.which,10);
		switch(parseInt(key,10)) {
			case 39: //right
				currentImg += 1;
				break;
			case 37: //left
				if (currentImg > 0) currentImg -= 1;
				break;
			case 27: //esc
				if (overlayMode){
					$(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
					setChange();
					$("#img"+currentImg%5).prop("checked", true);
					$(".overlay").toggle();
					overlayMode = false;
				}
		} 
		if (key == 39||key == 37) {
			if (overlayMode) {
				$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
				imgOrient(".overlayImg", "100%");
			}
			else {
				$(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
				if (currentImg%5 == 0 || currentImg%5 == 4) setChange();
				$("#img"+currentImg%5).prop("checked", true);
			}
		}	
	});
});