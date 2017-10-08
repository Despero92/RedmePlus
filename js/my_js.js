$(document).ready(function(){
	$("#trigger").click(function() {
	  $("#trigger").toggleClass("active");
	  $(".overlay").toggleClass("open");
	  $(".wraper").toggleClass("close_wraper");
	});
	
	$(".btn-mn").click(function() {
	  $(".btn-mn.slide-in").toggleClass("active");
	});

	var windowHeight = $(window).height();
    $(".up_part").css('height', windowHeight);
	/*Ficsed menu*/

	// Галлерея фотографий
    var $gallery = $('.gallery a').simpleLightbox({
		overlay: true,
        preloading: true
	});

    // Отступ сверху для блоков под фиксированным меню
    var headerHeight = $(".mn").outerHeight();
    $(".gallery, .title-box, .nesw_cntnr, .delivery-block").css('margin-top', headerHeight);
    $(window).resize( function (  ) {
        var headerHeight = $(".mn").outerHeight();
        $(".gallery, .title-box, .nesw_cntnr, .delivery-block").css('margin-top', headerHeight);
    });


});