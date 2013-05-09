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
currentImg = 0;
currentSet = 0;

$(".galleryBar input").on("click", function() {
  currentImg = parseInt($(".galleryBar input:checked").val())+currentSet*5;
  $(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
  //imgOrient(".mainDisplay;", "95%")
});

//Click the large picture to enter overlay mode
$(".mainDisplay").on("click", function() {
	$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
	imgOrient(".overlayImg", "100%");
	$(".overlay").toggle();
});
//Exit overlay mode
$(".overlay").on("click", function() {
	$(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
	//imgOrient(".mainDisplay", "95%")
	setChange();
	$("#img"+currentImg%5).prop("checked", true);
	$(".overlay").toggle();
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
