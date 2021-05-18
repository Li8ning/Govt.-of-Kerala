$(document).ready(function(){
	$('#chk').change(function(){
		$('body').toggleClass('dark');
		$('.label').toggleClass('dark');
		$('.lang-btn').toggleClass('dark');
		$('.font-size-btn li a').toggleClass('dark');
		$('.main-title h1').toggleClass('dark');
		$('.main-title h4').toggleClass('dark');
		$('.light-img').toggle();
		$('.dark-img').toggle();
	});
	$('[data-toggle="tooltip"]').tooltip();
	$(window).scroll(function () {
		if ($(this).scrollTop() + $(window).height() > $(document).height() - 100)  {
			$('#btn-to-top,#btn-cm-live').fadeIn();
		}  else {
			$('#btn-to-top, #btn-cm-live').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('#btn-to-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
});