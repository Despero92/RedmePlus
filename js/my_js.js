$(document).ready(function(){
	$(".sandwich").click(function() {
	  $(".sandwich").toggleClass("active");
	});
	
	$(".btn-mn").click(function() {
	  $(".btn-mn.slide-in").toggleClass("active");
	});
	
	/*Ficsed menu*/

    var $gallery = $('.gallery a').simpleLightbox({
		overlay: true,
        preloading: true
	});
     var headerHeight = $(".mn").outerHeight();
     $(".gallery").css('margin-top', headerHeight);
	
});