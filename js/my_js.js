$(document).ready(function(){
	$(".sandwich").click(function() {
	  $(".sandwich").toggleClass("active");
	});
	
	$(".btn-mn").click(function() {
	  $(".btn-mn.slide-in").toggleClass("active");
	});
	
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