$(document).ready(function(){
	if($(".cd-secondary-nav")){
	var secondaryNav = $('.cd-secondary-nav'),
	topElement = $('.btn_price'),
	secondaryNavTopPosition = topElement.offset().top;
	$(window).on('scroll', function(){
	if($(window).scrollTop() > secondaryNavTopPosition ) {
	secondaryNav.addClass('is-fixed');
	setTimeout(function() {
	/*secondaryNav.addClass('animate-children');*/
	$('.btn-mn').addClass('slide-in');
	}, 50);
	} else {
	secondaryNav.removeClass('is-fixed');
	setTimeout(function() {
	/*secondaryNav.removeClass('animate-children');*/
	
	$('.btn-mn').removeClass('slide-in');
	}, 50);
	}
	});
	}
});