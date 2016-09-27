//initiate Swiper
function initiateSwiperSliders () {
	//default settings
	var dataDirection = 'horizontal'; //swipe direction
	var dataLoop = 'true';	//loop slides
	var dataSpeed = 5000; //transition speed (in ms)
	var dataEffect = 'slide';
	var dataAutoplay = 0; //delay between transitions (in ms)

	var dataInitialSlide = 0; //Index number of initial slide
	var dataAutoHeight = false; //Set to true and slider wrapper will adopt its height to the height of the currently active slide


	//slider menu selectors
	var dataNextButton = '.swiper-button-next';
	var dataPrevButton = '.swiper-button-prev';
	var dataPagination = '.swiper-pagination';
	var dataScrollbar = '.swiper-scrollbar';
	

	var dataPaginationClickable = true;





	//initiate sliders
	var SliderElements = $('.ce_sliderStart .swiper-container');

	SliderElements.each(function(index, el) {
		

		//set slider parameters
		var objSwiperParams = new Object();

		if($(this).attr('data-slider-direction')){
			objSwiperParams.direction = $(this).attr('data-slider-direction');
		} else {
			objSwiperParams.direction = dataDirection;
		}

		if($(this).attr('data-slider-loop')){
			objSwiperParams.loop = Boolean($(this).attr('data-slider-loop'));
		} else {
			objSwiperParams.loop = dataLoop
		}

		if ($(this).attr('data-slider-speed')) {
			objSwiperParams.speed = parseInt($(this).attr('data-slider-speed'), 10);
		} else {
			objSwiperParams.speed = dataSpeed;
		}

		if ($(this).attr('data-slider-effect')) {
			var effectName = $(this).attr('data-slider-effect');
			objSwiperParams.effect = effectName;


			if (effectName === 'fade') {
				objSwiperParams.fade = {
					crossFade: false
				}
				objSwiperParams.virtualTranslate = true;
			}

		} else {
			objSwiperParams.effect = dataEffect;
		}

		if($(this).attr('data-slider-autoplay')){
			objSwiperParams.autoplay = parseInt($(this).attr('data-slider-autoplay'), 10);
		}

		if ($(this).attr('data-slider-autoplayDisableOnInteraction')) {
			objSwiperParams.autoplayDisableOnInteraction = false;
		}

		if ($(this).attr('data-slider-initialSlide')) { 
			//check for number of slides?
			objSwiperParams.initialSlide = parseInt($(this).attr('data-slider-initialSlide'), 10);
		} else {
			objSwiperParams.initialSlide = dataInitialSlide;
		}

		if ($(this).attr('data-slider-autoHeight')) {
			objSwiperParams.autoHeight = Boolean($(this).attr('data-slider-autoHeight'));
		}

		if ($(this).attr('data-slider-spaceBetween')) {
			objSwiperParams.spaceBetween = parseInt($(this).attr('data-slider-spaceBetween'), 10);
		}

		if ($(this).attr('data-slider-buttons')) {
			objSwiperParams.nextButton = dataNextButton;
			objSwiperParams.prevButton = dataPrevButton;
		} else {
			$(this).find(dataNextButton).remove();
			$(this).find(dataPrevButton).remove();
		}

		if ($(this).attr('data-slider-pagination')) {
			objSwiperParams.pagination = dataPagination;
			objSwiperParams.paginationClickable = true;
		} else {
			$(this).find(dataPagination).remove();
		}

		if ($(this).attr('data-slider-scrollbar')) {
			objSwiperParams.scrollbar = dataScrollbar;
		} else {
			$(this).find(dataScrollbar).remove();
		}


		//add fix parameters here
		// objSwiperParams.paginationType = 'fraction';
		// objSwiperParams.paginationElement = 'span';
		// objSwiperParams.hashnav = true; //Hash navigation is intended to have a link to specific slide that allows to load page with specific slide opened.
		// objSwiperParams.preloadImages =  true;

		//initiate slider width parameters
		var objSwiper = new Swiper ($(this)[0], objSwiperParams);

		//set data attribute true after initialisation of swiper
		$(this).attr('data-slider-initReady', true);
	});
}



$(document).ready(function () {
	// Slider - Swiper
	initiateSwiperSliders();

});
