$("document").ready(function(){

	"use strict";

	$('.loginFade').hover(function(){
		$('.signupFade').animate({
			"opacity": .1
		}, 500);
	}, function(){
		$('.signupFade').animate({
			"opacity": 1
		}, 500);
	});


	$('.signupFade').hover(function(){
		$('.loginFade').animate({
			"opacity": .1
		}, 500);
	}, function(){
		$('.loginFade').animate({
			"opacity": 1
		}, 500);
	});

	$(".deleteButton").hover(
		function() {
	    	$(this).css("font-size", "2em");
	}, function() {
	    	$(this).css("font-size", "1em");
	  	}
	);

	$(".editButton").hover(
		function() {
	    	$(this).css("font-size", "2em");
	}, function() {
	    	$(this).css("font-size", "1em");
	  	}
	);



	// var maxHeight = 0;

	// $(".img").each(function () {
 //    	if ($(this).height() > maxHeight) {
 //        	maxHeight = $(this).height();
 //    	}
	// });

	// $(".img").height(maxHeight);






});
