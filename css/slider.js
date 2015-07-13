$(document).ready(function() {
	initSlider();
	initSelectSlider();
	initProductSlider();
	initSlidingPanels();
});

var sliderInterval;
var sliderTimeout;
var sliderRestartTimeout;
function initSlider() {
	if(!$('#slider').length) { return; }
	
	changeSlide();
	sliderInterval = setInterval(function() { changeSlide(); },6000);
	
	for(var i = 0;i < $('#slider li').length;i++) {
		$('#slider .points').append('<a href="javascript://" />');
	}
	$('#slider .points a:first').addClass('active');
	$('#slider .points a').click(function() {
		
		clearInterval(sliderInterval);
		clearTimeout(sliderRestartTimeout);
		
		sliderRestartTimeout = setTimeout(function() {
			sliderInterval = setInterval(function() { changeSlide(); },6000);
		},30000);
		
		if($(this).hasClass('active')) { return false; }
		
		var num = $(this).prevAll('a').length;
		changeSlide(num);
		
		return false;
	});
	$('#slider').hover(function() {
		clearInterval(sliderInterval);
		clearTimeout(sliderRestartTimeout);
		
		$('#slider .control.prev').animate({left:0},200);
		$('#slider .control.next').animate({right:0},200);
	},function() {
		clearInterval(sliderInterval);
		clearTimeout(sliderRestartTimeout);
		sliderInterval = setInterval(function() { changeSlide(); },6000);
		
		$('#slider .control.prev').animate({left:-48},200);
		$('#slider .control.next').animate({right:-48},200);
	});
	$('#slider a.control').click(function() {
		changeSlide(($(this).hasClass('prev')) ? 'prev' : 'next');
	});
}
function changeSlide(num) {
	var width = $('#slider').width()+20;
	
	if(num == undefined) {
		num = ($('#slider li.active').length) ? $('#slider li.active').prevAll('li').length+1 : 0;
	}
	else if(num == 'next') {
		num = ($('#slider li.active').length) ? $('#slider li.active').prevAll('li').length+1 : 0;
	}
	else if(num == 'prev') {
		num = ($('#slider li.active').length) ? $('#slider li.active').prevAll('li').length-1 : 0;
		num = (num < 0) ? $('#slider li').length-1 : num;
	}
	
	if(!$('#slider li:eq('+num+')').length) {
		num = 0;
	}	
	
	var offset = num*width*-1;
	
	$('#slider ul').stop().animate({marginLeft:offset},1000);
	$('#slider li:eq('+num+')').addClass('active').siblings().removeClass('active');
	$('#slider .points a:eq('+num+')').addClass('active').siblings().removeClass('active');
}
function initSelectSlider() {
	$('select.slider').each(function() {
		var select = $(this).wrap('<div class="slider" />');
		var parent = select.parent().append('<span class="title" />');
		var title = parent.children('.title');
		var slider = $('<div class="control"></div>').insertAfter(select).slider({
			animate: true,
			min: 1,
			max: select.find('option').length,
			range: "min",
			value: select[0].selectedIndex + 1,
			slide: function(event,ui) {
				select[0].selectedIndex = ui.value - 1;
				parent.find('.title').html(select.find('option:selected').text());
				$('#catalogListing').removeClass('done');
			}
		});
		select.change(function() {
			if($(this).parent().find('.ui-slider:visible').length) {
				slider.slider("value",this.selectedIndex+1);
				parent.find('.title').html($(this).find('option:selected').text());
			}
			else {
				$('#catalogListing').removeClass('done');
			}
		});
		
		if($(this).parent().find('.ui-slider:visible').length) {
			$(this).trigger('change');
		}
	});
}
function initProductSlider() {
	if(!$('#product').length) { return; }
	
	$('#product .imageset div').hover(function() {
		$(this).find('.hover').stop().fadeIn(200);
	},function() {
		$(this).find('.hover').stop().fadeOut(200);
	}); 
	
	if($('#productSlider').length) {
		$('#productSlider li:first').addClass('active');
		$('#productSlider a.next').click(function() {
			if($('#productSlider ul').is(':animated')) { return false; }
		
			var margin = 0;
		
			var next = ($('#productSlider li.active').next().length) ? $('#productSlider li.active').next() : $('#productSlider li:first');
		
			next.addClass('active').siblings().removeClass('active');
			next.prevAll('li').each(function() {
				margin += $(this).width()+6;
			});
		
			$('#productSlider ul').animate({'margin-left':(margin*-1)+'px'},300,function() {
				$(this).find('li:first').insertAfter($(this).find('li:last'));
				$(this).css('margin-left',0);
			});
		
			return false;
		})
	};
}
function initSlidingPanels() {
	if(!$('div.sliding').length) { return; }
	
	$('div.sliding').each(function() {
		var parent = $(this).addClass('ready').css('width',$(this).width()).css('height',$(this).parent().height()).wrapInner('<div class="container" />');
		var slideObj = parent.children('.container');
		var prependPx = 0;

		if(slideObj.length === 0) { return; }

		slideObj.css('width',slideObj.parent().css('width'));
		var slideObjOffset = 0;
		var parentOffset = parent.offset().top;

		$(window).scroll(function() {
			if(slideObjOffset == 0) { slideObjOffset = slideObj.offset().top-12; }
			var maxOffset = parent.parent().height()-slideObj.outerHeight();

			var scrollTop = $(window).scrollTop();
			var dif = scrollTop-slideObjOffset;
//alert(scrollTop+prependPx + ' - ' + slideObjOffset);
			if(scrollTop+prependPx >= slideObjOffset) {
				var slideDif = (maxOffset-dif-114);
//alert(slideDif);
				/*if(slideDif < 0) {
					// slideObj.css('position','absolute').css('bottom',0).css('top','auto');
				}
				else {*/
					slideObj.css('position','fixed').css('top',prependPx).css('bottom','auto');
				/*}*/
			}
			else {
				slideObj.css('position','relative').css('top','auto');
			}
		});
	});
}