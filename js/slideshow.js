var i = 0;

$(document).ready(function() {

	var front_page_slideshow_width = $(".front-page-slideshow").width();

	$(".front-page-slideshow-link").hover(function() {
		$(this).find('img').css('opacity', '.8');
	}, function() {
		$(this).find('img').css('opacity', '1');
	});

	$(".stop-slideshow-link").focus(function() {
		$(this).css("opacity", "1.0");
	});

	$(".stop-slideshow-link").blur(function() {
		$(this).css("opacity", "0");
	});

	// setInterval(function() {
	// 	$("#slide" + i).fadeOut("slow",
	// 	function() {
	// 		next();
	// 		$("#slide" + i).fadeIn("slow");	
	// 	});
		
	// }, 10000);
});

function next() {
	if (i == 0) {
		i = 1;
		return;
	} else if (i == 1) {
		i = 2;
		return;
	} else if (i == 2) {
		i = 0;
		return;
	}
}

