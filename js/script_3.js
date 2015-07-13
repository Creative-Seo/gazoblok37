$(document).ready(function(){
	$(".tm_td_1").hover(
	function(){
		$(this).find("div.submenu_container").show();
	},
	function(){
		$(this).find("div.submenu_container").hide();
	});
	$(".tm_td_1").hover(
		function(){
			$(this).addClass('flesh');
		},
		function(){
      $(this).removeClass('flesh');
		});
		
	$('#project_filter .block_2 input[type=checkbox]').change(function() {
		if ($(this).attr('name') !== 'fetagnost') {
			$(this).parent().toggleClass('checked');
		}
	});
	$('.big_checkboxes a').click(function() {
		var bche = $(this).parent();
		if ($(this).hasClass("big_checked")) {
			$(this).removeClass("big_checked");
			$(this).parent().find("input").eq($(this).index()).attr('checked', false);
		} else {
			$(this).addClass("big_checked");
			$(this).parent().find("input").eq($(this).index()).attr('checked', true);
		}
	});
	$('#imgclick img').on('click', function () {
		$('.bs-example-modal-lg img').attr('src',$(this).attr('src'));
		$('.bs-example-modal-lg').modal('toggle');
	});
});

function ThirdLevel (num, el) {
	$('.pppmenu').hide();
	el.parent().parent().find('li').removeClass('active');
	if (num) {
		el.parents('.submenu_container2').find('.im').hide();
		$('#pppm_'+num).show();
		el.parent().addClass('active');
	} else {
		el.parents('.submenu_container2').find('.im').show();
	}
}