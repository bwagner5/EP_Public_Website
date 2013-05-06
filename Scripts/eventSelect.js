var eventOptions = {location:'none',attendance:'none',type:'none',addOns:[]};

$('.dropSelect').click(function(event) {
	//var content = $(this).text();
	//$(this).text(content+' \u2714')
	num = $(this).text();
	console.log(num);
	$('.eventImg').attr("src",'Images/'+num+'.jpg');
	//prevents the dropdown from closing after click
	event.stopPropagation();	
});

