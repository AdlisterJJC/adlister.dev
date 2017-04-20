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



	// var maxHeight = 0;

	// $(".img").each(function () {
 //    	if ($(this).height() > maxHeight) {
 //        	maxHeight = $(this).height();
 //    	}
	// });

	// $(".img").height(maxHeight);






});
