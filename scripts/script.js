jQuery(document).ready(function ($) {
	// Toggle offcanvas
	$(".site-header__toggle").on("click", function () {
		$(this).toggleClass("active");
		$("body").toggleClass("fixed");
		$(".offcanvas").toggleClass("active");
	});
});
