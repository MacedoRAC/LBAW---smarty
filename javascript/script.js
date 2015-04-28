
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
	});


    $("#submitBtn").click(function (e) {
        e.preventDefault();

        var email = $("#email").val().trim();
        var password= $("#password").val().trim();

        var url = $("#signin_form").attr('action');
        //alert(url);
        $.ajax({
            url: url,
            type: 'POST',
            data: { email: email, password: password },
            dataType: 'json',
            success: function(data) {
                if(data.error == false) {
                    //alert(data.username);
                    location.reload();
                }
            }, error: function(data) {
                alert('Something went wrong while logging you in!');
            }
        });
    });


    $("#signout_button").click(function (e) {
        e.preventDefault();

        var url = $("#logout_form").attr('action');
        var base_url = $("#base_url").val().trim();
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                if(data.error == false) {
                    location.href = base_url;
                }
            }, error: function(data) {
                alert('Something went wrong while logging you out!');
            }
        });
    });
});