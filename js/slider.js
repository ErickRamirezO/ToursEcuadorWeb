//Slider
document.addEventListener('DOMContentLoaded', function() {
	var splide = new Splide('.splide', {
		type: 'loop',
		perPage: 3,
		autoplay: true,
	});

	splide.mount();
});