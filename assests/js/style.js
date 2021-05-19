function dark_mode(class_name){
	class_name.forEach(element => {
		$(element).toggleClass('dark');
	});
}


$(document).ready(function(){
	$('#chk').change(function(){
		var class_name = ["body",".label",".lang-btn",".font-size-btn li a",".main-title h1",".main-title h4",".light-img",".dark-img",".search",".search_input",".main-nav-menu .dropdown-menu",".main-nav-menu a.nav-link",".main-nav-menu .dropdown-menu a.dropdown-item",".main-nav-menu .dropdown-menu .dropdown-item:hover",".kg-alert",".img-outer",".section-what-new #col-gov-cm",".section-articles .article-author",".head-dark",".section-what-new #col-new-updates",".section-what-new #col-new-updates .table-cell",".footer-top",".footer-text",".footer-bottom"];
		dark_mode(class_name);
	});
	$('[data-toggle="tooltip"]').tooltip();
	$(window).scroll(function () {
		if ($(this).scrollTop() + $(window).height() > $(document).height() - 100)  {
			$('#btn-to-top,#btn-cm-live').fadeIn();
		}
		else {
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