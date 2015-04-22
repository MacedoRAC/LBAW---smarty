
$(document).ready(function(){
	$( ".accordion-inner ul li:even" ).css('background', '#cfd8dc');

	$('.accordion-toggle').on('click', function(){
		var element = $(this).find('i');
		if(element.hasClass('glyphicon-chevron-down')){
			element.removeClass('glyphicon-chevron-down');
			element.addClass('glyphicon-chevron-right');
		}else{
			element.removeClass('glyphicon-chevron-right');
			element.addClass('glyphicon-chevron-down');
		}
	})

})