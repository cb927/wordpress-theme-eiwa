$(document).ready(function () {

	$(window).scroll(function () {
		if ($(window).scrollTop() >= 1) {
			$('header').addClass('header-sticky')
			$('.scroll-top').addClass('active')
		} else {
			$('header').removeClass('header-sticky')
			$('.scroll-top').removeClass('active')
		}
	});

	$('.scroll-top').click(function () {
		$('html, body').animate({ scrollTop: '0px' }, 300)
	})

	$('.hamburger').click(function () {
		$(this).toggleClass('active')
		$('.nav__group').toggleClass('active')
	})
	$('.nav__item').click(function(){
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
	})
})