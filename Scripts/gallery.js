function preload(imageArray) {
    $(imageArray).each(function () {
        $('<img />').attr('src',this).appendTo('#preloaded').hide();
    });
}

imgOrient = function(img, size) { 
	if ($(img).height() > $(img).width()){
		$(img).css({
			"max-height":size,
			"max-width":"none"
		});	 
	}
	else {
		$(img).css({
			"max-width":size,
			"max-height":"none"
		});	 
	}
}

setChange = function() {
	//Displays the next 5 images in the gallery bar
	var newSet = Math.floor(currentImg/5);
	if (newSet != currentSet) {
		currentSet = newSet;
		var i = 0;
		$(".galleryBar > label > img").each(function(){
			if ((currentSet*5)+i > imgCount-1) {
				$(this).hide();
			}
			else{
				$(this).attr("src","Gallery/"+((currentSet*5)+i)+".jpg").show();
			}
			i++;
		});
	}
}

var imgCount = 11; //number of images 
var currentImg = 0;
var currentSet = 0;
var overlayMode = false;

$(".galleryBar > label > img").error(function () {
  $(this).unbind("error").hide();
});

$(document).ready(function() {
	
	for (var i = 0; i<imgCount-1; i++){
		preload(["Gallery/"+i+".jpg"]);
	}
		
	$(".galleryBar input").on("click", function() {
	  currentImg = parseInt($(".galleryBar input:checked").val())+currentSet*5;
	  $(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
	});
	
	//Click the large picture to enter overlay mode
	$(".mainDisplay").on("click", function() {
		$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
		//imgOrient(".overlayImg", "100%");
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
	$(".rightArrow").click(function(click) {
		if (currentImg < imgCount-1) {
			currentImg += 1;
			if (overlayMode) $(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
			else {
				$(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
				setChange()
				$("#img"+currentImg%5).prop("checked", true);
			}
		}
		//imgOrient(".overlayImg", "100%");
		click.stopPropagation();
	});
	$(".leftArrow").click(function(click) {
		if (currentImg > 0) {
			currentImg -= 1;
			if (overlayMode) $(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
			else {
				$(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg"); 
				setChange()
				$("#img"+currentImg%5).prop("checked", true);
			}
		}
		//imgOrient(".overlayImg", "100%");
		click.stopPropagation();
	});
	$(document).keydown(function(input) {
		//Keypress functionality
		var key = parseInt(input.which,10);
		switch(parseInt(key,10)) {
			case 39: //right
				if (currentImg < imgCount-1) currentImg += 1;
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
				//imgOrient(".overlayImg", "100%");
			}
			else {
				$(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
				if (currentImg%5 == 0 || currentImg%5 == 4) setChange();
				$("#img"+currentImg%5).prop("checked", true);
			}
		}	
	});
});

window.onerror=function(){console.log('hi');}