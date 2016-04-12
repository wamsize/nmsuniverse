var open = false;

$(document).ready(function(){
	$('.ham, .mob-cover').click(function(){
		if (open == false) {
			$('.container').hide();
			$('.ham').css('z-index', '5');
			$('.sidebar').animate({"left": "0"}, 250);
			$('.mob-cover').fadeIn(250);
			open = true;
		} else {
			$('.container').show();
			$('.sidebar').animate({"left": "-50%"}, 250, function() {
				$('.ham').css('z-index', '11');
			});
			$('.mob-cover').fadeOut(250);
			open = false;
		}
	});
	
	$('.tab').click(function() {
		var nav = $(this).html().toLowerCase();
        window.location.href="/" + nav;
	})
});