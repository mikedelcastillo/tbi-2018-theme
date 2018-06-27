$(document).ready(function(){
	// Initialize slider
	$('.slider').slick({
		responsive: [
			{
				breakpoint: 1024,
				settings: {							infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 426,
				settings: "unslick"
			}
		]
	});
});

function closeNav() {
	$(".mobile-nav").css('margin-left','425px');
}

function openNav() {
	$(".mobile-nav").css('margin-left','0px');
}
