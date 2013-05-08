currentImg = 0;
$(".galleryBar input").on("click", function() {
  currentImg = parseInt($(".galleryBar input:checked").val());
  $(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
});
//Click the large picture to enter overlay mode
$(".mainDisplay").on("click", function() {
	$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
	$(".overlay").toggle();
});
//Exit overlay mode
$(".overlay").on("click", function() {
	$(".mainDisplay").attr("src","Gallery/"+currentImg+".jpg");
	console.log("#img"+currentImg%5);
	$("#img"+currentImg%5).prop("checked", true);
	$(".overlay").toggle();
});
$("#rightArrow").on("click", function(click) {
	currentImg += 1;
	$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
	click.stopPropagation();
});
$("#leftArrow").on("click", function(click) {
	if (currentImg > 0) currentImg -= 1;
	$(".overlayImg").attr("src","Gallery/"+currentImg+".jpg");
	click.stopPropagation();
});
