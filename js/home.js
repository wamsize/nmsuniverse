$(document).ready(function() {
	var multiplier = .8;

	$(".YT").load(function() {
		var heightforYT;
		heightforYT = $(document).width() * 315 / 560 * .5;
		$(".YT").height(heightforYT);
	});
	
	
	$(window).resize(function() {
		heightforvid = $(document).width() * 360 / 640 * multiplier;
		$(".t-vid, .t-chat").css("height", heightforvid);
		
		heightforYT = $(document).width() * 315 / 560 * .5;
		$(".YT").height(heightforYT);
	});
	
	$(".p-button").click(function() {
		if ($(".p-button").html() == "Close Stream Chat") {
			$(".t-chat").hide();
			multiplier = .8;
			
			$(".t-vid").css("width", "100%");
			
			heightforvid = $(document).width() * 360 / 640 * multiplier;
			$(".t-vid, .t-chat").height(heightforvid);
			
			$(".p-button").html("Open Stream Chat");
		} else {
			$(".t-chat").show();
			multiplier = .52;
			
			$(".t-vid").css("width", "65%");
			
			heightforvid = $(document).width() * 360 / 640 * multiplier;
			$(".t-vid, .t-chat").css("height", heightforvid);
			
			$(".p-button").html("Close Stream Chat");
		}
	});
	
	$(".cover").mouseenter(function() {
		$(this).css("background-color", "rgba(0,0,0,0.2)");
	});
	$(".cover").mouseleave(function() {
		$(this).css("background-color", "rgba(0,0,0,0.5)");
	});
	
	$("#play").click(function() {
		$(".home-cover2").fadeIn(1000);
		$(".video").fadeIn(1000);
		$("body").css("overflow", "hidden");
		$(window).scrollTop(0);
	});
	
	$(".home-cover2").click(function() {
		$(".home-cover2").fadeOut(1000);
		$(".video").fadeOut(1000);
		$("body").css("overflow", "visible");
		var src= $(".YT").attr('src');
		$(".YT").delay(1000).attr('src', src);  
	});
	
	$("#down").click(function() {
		$('body, html').animate({ scrollTop: $(window).height() }, 400);
	});
	
	$(window).unload(function() {
		$('body, html').scrollTop(0);
	});
	
	var highlight = 0;
	var animateLength = 600;
	
	$("#mhm").click(function() {
		if (highlight == 3) {
			highlight = -1;
			$(".highlight").animate({"height": "33.3vh"}, animateLength);
			$(".cover").animate({"height": "33.3vh"}, animateLength);
			$(this).find("h1").animate({"margin": ".67em 0"}, animateLength); // default h1 top margin
			highlight = 0;
		} else if (highlight == 0) {
			highlight = -1;
			$(this).animate({"height": "100vh"}, animateLength);
			$(this).children(".cover").animate({"height": "100vh"}, animateLength);
			$(this).find("h1").animate({"margin-top": "20vh"}, animateLength);
			$("#mbv").animate({"height": "0"}, animateLength);
			$("#mbv").children(".cover").animate({"height": "0"}, animateLength);
			$("#mil").animate({"height": "0"}, animateLength);
			$("#mil").children(".cover").animate({"height": "0"}, animateLength);
			$('body, html').animate({scrollTop: $(".content#highlights").offset().top}, 200);
			highlight = 3;
		}
	});
	
	$("#mil").click(function() {
		if (highlight == 2) {
			highlight = -1;
			$(".highlight").animate({"height": "33.3vh"}, animateLength);
			$(".cover").animate({"height": "33.3vh"}, animateLength);
			$(this).find("h1").animate({"margin": ".67em 0"}, animateLength); // default h1 top margin
			highlight = 0;
		} else if (highlight == 0) {
			highlight = -1;
			$(this).animate({"height": "100vh"}, animateLength);
			$(this).children(".cover").animate({"height": "100vh"}, animateLength);
			$(this).find("h1").animate({"margin-top": "20vh"}, animateLength);
			$("#mbv").animate({"height": "0"}, animateLength);
			$("#mbv").children(".cover").animate({"height": "0"}, animateLength);
			$("#mhm").animate({"height": "0"}, animateLength);
			$("#mhm").children(".cover").animate({"height": "0"}, animateLength);
			$('body, html').animate({scrollTop: $(".content#highlights").offset().top}, 200);
			highlight = 2;
		}
	});
	
	$("#mbv").click(function() {
		if (highlight == 1) {
			highlight = -1;
			$(".highlight").animate({"height": "33.3vh"}, animateLength);
			$(".cover").animate({"height": "33.3vh"}, animateLength);
			$(this).find("h1").animate({"margin": ".67em 0"}, animateLength); // default h1 top margin
			highlight = 0;
		} else if (highlight == 0) {
			highlight = -1;
			$(this).animate({"height": "100vh"}, animateLength);
			$(this).children(".cover").animate({"height": "100vh"}, animateLength);
			$(this).find("h1").animate({"margin-top": "20vh"}, animateLength);
			$("#mil").animate({"height": "0"}, animateLength);
			$("#mil").children(".cover").animate({"height": "0"}, animateLength);
			$("#mhm").animate({"height": "0"}, animateLength);
			$("#mhm").children(".cover").animate({"height": "0"}, animateLength);
			$('body, html').animate({scrollTop: $(".content#highlights").offset().top}, 200);
			highlight = 1;
		}
	});
	
	var login = 0;
	
	$(".btn-log").click(function() {
		$('body, html').animate({scrollTop: 0}, 600);
		if (login == 0) {
			$(".login").show();
			$("#user").focus();
			login = 1;
		} else {
			$(".login").hide();
			login = 0;
		}
	});
	
	$(".content#home").click(function() {
		if (login == 1) {
			$(".login").hide();
			login = 0;
		}
	});
	
	$(".key").click(function() {
		var id = $(this).attr('id');
		var t = $(".content#"+id).offset().top + 1;
		$('body, html').animate({scrollTop: t}, 200);
	});
	
	var map = 0;
    var loc = 0; // 0 = home; 1 = description; 2 = highlights; 3 = twitch
	var prevScr = 0;
	var scr = 0;
    var dir = 0; // 0 = down; 1 = up;
	
	$(window).scroll(function() {
		
		scr = $(window).scrollTop();
		var mult = 0.5;
		
		if (prevScr < scr) {
            dir = 0;
			mult = 0.75;
		} else {
            dir = 1;
        }
		
		if ($(this).scrollTop() > ($(window).height() * mult) && map == 0) {
			map = 1;
			$(".map").show(100);						
		} else if ($(this).scrollTop() < ($(window).height() * mult) && map == 1) {
			map = 0;
			$(".map").hide(100);
		}
		
		if (map == 1) {
			mapOpacity();
		}
		
		prevScr = $(window).scrollTop();
		
	});			
	
	function mapOpacity() {
		var hm = 0;					
		var desc, high, tw;
		
		if (dir == 0) { // scrolling down
			desc = $(".content#description").offset().top - ($(".content#home").height() * 0.2);
			high = $(".content#highlights").offset().top - ($(".content#description").height() * 0.2);
			tw = $(".content#twitch").offset().top  - ($(".content#highlights").height() * 0.2);
        } else {
			desc = $(".content#description").offset().top - ($(".content#home").height() * 0.8);
			high = $(".content#highlights").offset().top - ($(".content#description").height() * 0.8);
			tw = $(".content#twitch").offset().top  - ($(".content#highlights").height() * 0.8);
		}
		if (scr < desc) {
            if (loc > 0 && dir == 1) {
                $(".key#description").css("opacity", "0.2");
                $(".key#highlights").css("opacity", "0.2");
                $(".key#twitch").css("opacity", "0.2");
                $(".key#home").css("opacity", "1");
                loc = 0;
            }
		} else if (scr < high && scr >= desc) {
            if ((loc > 1 && dir == 1) || (loc < 1 && dir == 0)) {
                $(".key#home").css("opacity", "0.2");
                $(".key#highlights").css("opacity", "0.2");
                $(".key#twitch").css("opacity", "0.2");
                $(".key#description").css("opacity", "1");
                loc = 1;
            }
		} else if (scr < tw && scr >= high) {
            if ((loc > 2 && dir == 1) || (loc < 2 && dir == 0)) {
                $(".key#description").css("opacity", "0.2");
                $(".key#home").css("opacity", "0.2");
                $(".key#twitch").css("opacity", "0.2");
                $(".key#highlights").css("opacity", "1");
                loc = 2;
            }
		} else {
			$(".key#description").css("opacity", "0.2");
			$(".key#highlights").css("opacity", "0.2");
			$(".key#home").css("opacity", "0.2");
			$(".key#twitch").css("opacity", "1");
            loc = 3;
		}
		
	}
	
	var hash = window.location.hash.substr(1);
	var elem = document.getElementById(hash);
	if (elem != null) {
		var off = $(".content#" + hash).offset().top;
		$('body, html').delay(500).animate({scrollTop: off}, off * 0.75);
	}
	var heightforvid = $(document).width() * 360 / 640 * multiplier;
	setTimeout($(".t-vid, .t-chat").css("height", heightforvid), 10);
});