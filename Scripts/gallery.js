$(".galleryBar input").on("click", function() {
  var imgNum = $(".galleryBar input:checked").val();
  $(".mainDisplay").attr("src","Gallery/"+imgNum+".jpg");
});