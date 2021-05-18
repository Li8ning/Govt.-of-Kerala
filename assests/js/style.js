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