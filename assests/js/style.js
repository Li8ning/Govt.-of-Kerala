// Dark Mode Function
function dark_mode(class_name){
	class_name.forEach(element => {
		$(element).toggleClass('dark');
	});
}

$(document).ready(function(){

	// For Screen Size>1024
	if ($(window).width()>=992) {
		$(".dropdown").hover(function(){
			$(this).find(".dropdown-menu").toggleClass("show");
			$(this).find(".dropdown-toggle").toggleClass("active");
		});
	}


	// Change Font Functionality
	var $font_ele_collection = $("body,.kg-i-font,.kg-ii-font,.kg-iii-font,.kg-iv-font,.kg-v-font,.kg-vi-font,.kg-vii-font,.kg-viii-font,.kg-ix-font,h1,h2,h3,h4,h5");
	var $font_counter = 0;
	$font_ele_collection.each( function(){
		var $this = $(this);
		$this.data("orig-size", $this.css("font-size"));
	});
	$("#kg-increase-font").click(function(){
		if ($font_counter<4) {
			changeFontSize(1);
			$("#kg-decrease-font").removeClass("disabled");
			$font_counter++;
		}
	});	
	$("#kg-decrease-font").click(function(){		
		if ($font_counter>0) {
			changeFontSize(-1);
			$font_counter--;
			if ($font_counter==0 && !$("#kg-decrease-font").hasClass("disabled")) {
				$("#kg-decrease-font").addClass("disabled");
			}
		}
	});	
	$("#kg-default-font").click(function(){
		$font_ele_collection.each( function(){
			var $this = $(this);
			$this.css( "font-size" , $this.data("orig-size") );
		});
		$font_counter = 0;
		if (!$("#kg-decrease-font").hasClass("disabled")) {
			$("#kg-decrease-font").addClass("disabled");
		}
	});
	function changeFontSize(direction){
		$font_ele_collection.each( function(){
			var $this = $(this);
			$this.css( "font-size" , parseInt($this.css("font-size"))+direction );
		});
	}


	// Dark Mode Activator
	$('#chk').change(function(){
		var class_name = ["body","header",".label",".lang-btn",".font-size-btn li a",".main-title h1",".main-title h4",".light-img",".dark-img",".search",".search_input",".main-nav-menu .dropdown-menu",".main-nav-menu a.nav-link",".main-nav-menu .dropdown-menu a.dropdown-item",".main-nav-menu .dropdown-menu .dropdown-item:hover",".kg-alert",".img-outer",".img-border",".section-what-new #col-gov-cm",".section-articles .article-author",".head-dark",".section-what-new #col-new-updates",".section-what-new #col-new-updates .table-cell",".footer-top",".footer-text",".footer-bottom,#youtube-toast .toast-body,.footer-top .col-connectwithus .fa"];
		dark_mode(class_name);
	});

	// Bottom right buttons hide/show on scroll
	$(window).scroll(function () {
		if ($(this).scrollTop() + $(window).height() > $(document).height() - 100)  {
			$('#btn-to-top,#btn-cm-live').fadeIn();
			$('#youtube-toast').toast('show');
		}
		else {
			$('#btn-to-top,#btn-cm-live').fadeOut();
			$('#youtube-toast').toast('hide');
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