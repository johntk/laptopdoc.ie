$(document).ready(function () {
	$('.item').mouseenter(function () {
		$('.item').fadeTo('fast', 0.8);
	});
	$('.item').mouseleave(function () {
		$('.item').fadeTo('slow', 1);

	});
});