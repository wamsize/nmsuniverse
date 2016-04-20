$(document).ready(function() {
	var chars = 0;
	$(".bio-ta").keyup(function() {
		chars = 140 - this.value.length;
		$('.count').text("" + chars);
		if (this.value.length > 140) {
			$('.count').css('color', 'red');
			$('.count').text($(".count").text().substring(1))
		} else {
			$('.count').css('color', 'black');
		}
	});
	
});