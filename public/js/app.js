$(function() {
	var headerHeight = $('#header').height();

	$(window).scroll(function(e) {
		if($(document).scrollTop() > headerHeight) {
			$('#nav-bar').css('position', 'fixed');
		} else {
			$('#nav-bar').css('position', 'relative');
		}
	});
});

