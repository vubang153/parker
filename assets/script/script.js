var menu = {
	toggleButton : '.toggle-menu',
	menuName: '.navigation',
	overlayName: '.overlay.menu',
	init: function(){
		this.toggleEvent();
		this.mobile.init();
	},
	mobile: {
		init: function(){
			this.toggleEvent();
		},
		toggleEvent: function(){
			$('.main-menu ._btns-mobile ._btn-mobile-search').click(function(e){
				e.preventDefault();
				menu.mobile.toggle();
			});
		},
		toggle: function(){
			let mainMenuHeight  = $('.main-menu').outerHeight();
			if ($('.search-form').hasClass('active')) {
				$('.search-form').css('top',0);
			}
			else
			{
				$('.search-form').css('top',mainMenuHeight);
			}
			$('.search-form, .overlay.main-menu').toggleClass('active');

		}
	},
	toggleEvent: function() {
		$(this.toggleButton).click(function(e) {
			e.preventDefault();
			menu.toggle();
		})
	},
	toggle: function(){
		$(".site-nav, .overlay.menu").toggleClass('active');
		$('.main-menu').toggleClass('position-static');
	}
}
var overlay = {
	init: function(){
		this.closeMenu();
		this.closeSearchBar();
	},
	closeMenu: function(){
		$('.overlay.menu').click(function(){
			menu.toggle();
		});
	},
	closeSearchBar: function(){
		$('.overlay.main-menu').click(function(){
			menu.mobile.toggle();
		});
	},
	active: function(){
		$(".overlay.menu").toggleClass('active');
	}

}
var navigation = {
	character: "<span class='fw-bold fs-4 _show'>+</span>",
	init: function(){
		navigation.renderArrow();
		navigation.toggleArrow();
	},
	renderArrow: function(){
		var list = $('.site-nav ul li');
		$.each( list, function( key, value ) {
			var childCount = $(this).find('ul').length;
			if (childCount > 0) {
				$(this).append(navigation.character);
			}
		});
	},
	toggleArrow: function(){
		$('.menu ._show').click(function(){
			var _this = $(this);
			_this.toggleClass('active');
			if (_this.hasClass('active')) {
				_this.text('-');
			}
			else {
				_this.text('+');
			}
			_this.prev().toggle('fadein');
		})
	},

}
var page = {
	init: function() {
		page.toggleScrollButton(1000);
		page.scrollToTop();
	},
	toggleScrollButton: function(pixel) {
		$(document).scroll(function(){
			let currentScroll = $(window).scrollTop();
			if (currentScroll > pixel) {
				$('#go-to-top').css('display', 'inline-block');
			}
			else {
				$('#go-to-top').css('display', 'none');
			}
		})
	},
	scrollToTop: function(){
		$('#go-to-top').click(function(e){
			e.preventDefault();
			$(document).scrollTop({top:0, behavior: 'smooth'});
		})
	}


}
var swiper = new Swiper(".featured-prod-slider", {
	slidesPerView: 4,
	spaceBetween: 40,
	slidesPerGroup: 4,
	loop: true,
	loopFillGroupWithBlank: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	breakpoints: {
		320: {
			slidesPerView: 2,
			spaceBetween: 10
		},
		480: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 20
		}
	}
});
var  mainSiderThumb = new Swiper(".main-slider ._thumb", {
	loop: true,
	slidesPerView: 4,
	freeMode: true,
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	breakpoints: {
		320: {
			slidesPerView: 2,
		},
		480: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 50
		}
	}
});
var mainSliderSwiper = new Swiper(".main-slider ._main-swiper", {
	loop: true,
	spaceBetween: 10,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	thumbs: {
		swiper: mainSiderThumb,
	},
});
var category = {
	extensionDOM: '.bodier .product-cate ._categories ._category ._extension',
	init: function(){
		this.showChildCate();
	},
	showChildCate: function(){
		$(this.extensionDOM).click(function(){
			$(this).parent().parent().parent().toggleClass('active');
		})
	}
}
var product = {
	init: function(){
		this.slider.init();
	},
	slider: {
		name: '.product-slider',
		init: function(){
			this.showImg();
		},
		showImg: function(){
			$(this.name + ' .product-slider__slide > ._img-link').click(function(e){
				e.preventDefault();
				$(this.name + ' .product-slider__slide > ._img-link').removeClass('active');
				$(this).addClass('active');
				let src = $(this).find('._img').attr('src');
				$('.product-slider__inner > ._img').attr('src', src);
			})
		}
	}
}

$(document).ready(function(){
	/*header.init();*/
	menu.init();
	overlay.init();
	page.init();
	navigation.init();
	page.init();
	category.init();
	product.init();
});

