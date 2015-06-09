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


    $("#loginSubmitButton").click(function (e) {
        e.preventDefault();

        var email = $("#email").val().trim();
        var password = $("#password").val().trim();

        var url = $("#signin_form").attr('action');
        $.ajax({
            url: url,
            type: 'POST',
            data: { email: email, password: password },
            dataType: 'json',
            success: function(data) {
                if(data.error == false) {
                    location.reload();
                } else {
                    alert("Something went wrong while signing you in!");
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


    // SIGNUP ACTION
    $("#signupButton").click(function(e) {
        e.preventDefault();
        var action = $("#signupForm").attr('action');

        var username = $("#signupUsername").val().trim();
        var name = $("#signupName").val().trim();
        var email = $("#signupEmail").val().trim();
        var password = $("#signupPassword").val().trim();
        var passwordConfirmation = $("#signupPassword2").val().trim();
        var phoneNumber = $("#signupPhoneNumber").val().trim();
        var birthDate = $("#signupDateBirth").val().trim();


        if(!name || !email || !password || !passwordConfirmation || !username || !phoneNumber || !birthDate)
            alert("Error! Please fill all the required fields!");
        else {
            if(password != passwordConfirmation)
                alert("Error! Passwords must match!");
            else {
                // Perform the AJAX request
                $.ajax({
                    url: action,
                    type: 'POST',
                    data: { username: username, phoneNumber: phoneNumber, birthDate: birthDate, name: name, email: email, password: password, passwordConfirmation: passwordConfirmation },
                    dataType: 'json',
                    success: function(data) {
                        if(data.error == false)
                            alert("User registered with success!");
                        else
                            alert(data.message);
                    }, error: function(data) {
                        alert("Something went wrong while signing you up!");
                    }
                });
            }
        }
    });


    // CREATE QUESTION ACTION
    $("#createQuestionButton").click(function(e) {
        e.preventDefault();

        var userID = $("#user_id").val().trim();
        var action = $("#createQuestionForm").attr('action');
        var isOpenAnswer = $("#openAnswerButton").hasClass('btn-active');
        var finalArrayData = [];
        var tags = [];
        var choices = [];


        if(isOpenAnswer) {
            $('input[name="tags[]"]').each(function() {
                var tag = $(this).val().trim();
                if(tag)
                    tags.push(tag);
            });
        } else {
            $('input[name="choices[]"]').each(function() {
                var choice = $(this).val().trim();
                if(choice)
                    choices.push(choice);
            });
        }


        if(isOpenAnswer) {
            if(tags.length > 0) {
                var questionText = $("#createQuestionText").val().trim();
                if(!questionText) {
                    alert("You must enter a question!");
                } else {
                    // Send the request
                    $.ajax({
                        url: action,
                        type: 'POST',
                        data: { text: questionText, tags: tags, userID: userID },
                        dataType: 'json',
                        success: function(data) {
                            if(data.error == true) {
                                alert("Your question was created with success!");
                            }
                        }, error: function(data) {
                            alert("Something went wrong while creating your question!");
                        }
                    });
                }
            } else {
                alert("You must provide at least one tag!");
            }
        }
    });

    
    $('.carousel').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        swipe: true,
        infinite: true,
        adaptiveHeight: true,
        dots: true
    });

    $('.add-field-tag').click(function(){
        $('.multi-field-tag').append(' <li><input class="col-sm-3 form-control" type="text" placeholder="TAG" name="tags[]" class="tag" id="tags"></li>');
    }); 

    $('.remove-field-tag').click(function(){
        $('.multi-field-tag li:last-child').remove(); 
    });
    
    
    $('.add-field-choice').click(function(){
        $('.multi-field-choice').append(' <li><input class="col-sm-12 form-control" type="text" placeholder="Choices" name="choices[]" id="choices"></li>');
    }); 

    $('.remove-field-choice').click(function(){
        $('.multi-field-choice li:last-child').remove(); 
    });
    
    
    //KEEP BUTTONS SELECTED
    $('.open_answer').click(function () {
        $('.choices_panel').hide('fast');
        $('.tags_panel').show('fast');
        $('.multi_choice').removeClass('btn-active');
        $('.open_answer').addClass('btn-active');
    });
    $('.multi_choice').click(function () {
        $('.tags_panel').show('fast');
        $('.choices_panel').removeClass('hidden');
        $('.choices_panel').show('fast');
        $('.open_answer').removeClass('btn-active');
        $('.multi_choice').addClass('btn-active');
    });
});


//SHOW QUESTION
//FOLLOW AND UNFOLLOW

$('a.follow_js').on('click', function() {
  $(this).text($(this).text() == "Follow" ? "Unfollow" : "Follow");
});

//VOTES
$('li.pos_vot').click(function () {
    if($(this).hasClass('voted')){
        $(this).alert('You have already voted');
    }else{
        $(this).addClass('voted');
        $(this).next().removeClass('voted');
    }
});

$('li.neg_vot').click(function () {
    if($(this).hasClass('voted')){
        $(this).alert('You have already voted');
    }else{
        $(this).addClass('voted');
        $(this).prev().removeClass('voted');
    }
});


$('.optn').click(function (){
   if($(this).hasClass('selected')){
        $(this).removeClass('selected');   
   }else{
       $(this).addClass('selected');
   }
    
});

$('.optn2').click(function (){
   if($(this).hasClass('selected2')){
        $(this).removeClass('selected2');   
   }else{
       $(this).addClass('selected2');
       $(this).prev().removeClass('selected2');
       $(this).next().removeClass('selected2');
   }
    
});


//SEARCH FILTERS
    $('.search_questions').click(function () {
        if($(this).hasClass('hideResults')){
            $(this).removeClass('hideResults');
            $('.search_questions_results').show('fast');
        }else{
            $(this).addClass('hideResults');
            $('.search_questions_results').hide('fast');
        }
    });

    $('.search_tags').click(function () {
        if($(this).hasClass('hideResults')){
            $(this).removeClass('hideResults');
            $('.search_tags_results').show('fast');
        }else{
            $(this).addClass('hideResults');
            $('.search_tags_results').hide('fast');
        }
    });

    $('.search_users').click(function () {
        if($(this).hasClass('hideResults')){
            $(this).removeClass('hideResults');
            $('.search_users_results').show('fast');
        }else{
            $(this).addClass('hideResults');
            $('.search_users_results').hide('fast');
        }
    });

    $('.search_answers').click(function () {
        if($(this).hasClass('hideResults')){
            $(this).removeClass('hideResults');
            $('.search_answers_results').show('fast');
        }else{
            $(this).addClass('hideResults');
            $('.search_answers_results').hide('fast');
        }
    });

    $('.search_comments').click(function () {
        if($(this).hasClass('hideResults')){
            $(this).removeClass('hideResults');
            $('.search_comments_results').show('fast');
        }else{
            $(this).addClass('hideResults');
            $('.search_comments_results').hide('fast');
        }
    });

// MOVING FILTERS WHILE SCROLLING
    $(window).scroll(function(){
        if($(window).scrollTop() + $('.filters').height() < $('#myFooter').position().top ){
            $(".filters").stop().animate({"marginTop": ($(window).scrollTop()) + "px", "marginLeft":($(window).scrollLeft()) + "px"}, "slow" );    
        }
    });

// BLOCKING QUESTIONS
    $('.block_question').click(function () {
       if($(this).hasClass('blocked')){
           $(this).removeClass('blocked');
       }else{
           $(this).addClass('blocked');
       } 
    });

// SHOW EDIT FORMS
 $('.edit').click(function () {
    if($(this).next().hasClass('hide')){
        $(this).next().removeClass('hide');
    }else{
        $(this).next().addClass('hide');
    }
 });



// PAINEL DE ADMINISTRAÇAO
//efeitos da navbar
$('.optn_admin').click(function (){
   if($(this).hasClass('selected')){
        $('.admin_block').removeClass('hide');
        $(this).removeClass('selected');
   }else{
       $(this).addClass('selected');
       $(this).prev().prev().prev().removeClass('selected');
       $(this).prev().prev().removeClass('selected');
       $(this).prev().removeClass('selected');
       $(this).next().removeClass('selected');
       $(this).next().next().removeClass('selected');
       $(this).next().next().next().removeClass('selected');
   }
    
});

$('.nav_users').click(function (){
    if($(this).hasClass('selected')){
        $('.admin_users_block').removeClass('hide');
        $('.admin_question_block').addClass('hide');
        $('.admin_answer_block').addClass('hide');
        $('.admin_comment_block').addClass('hide');
    }
});

$('.nav_questions').click(function (){
    if($(this).hasClass('selected')){
        $('.admin_users_block').addClass('hide');
        $('.admin_question_block').removeClass('hide');
        $('.admin_answer_block').addClass('hide');
        $('.admin_comment_block').addClass('hide');
    }
});

$('.nav_answers').click(function (){
    if($(this).hasClass('selected')){
        $('.admin_users_block').addClass('hide');
        $('.admin_question_block').addClass('hide');
        $('.admin_answer_block').removeClass('hide');
        $('.admin_comment_block').addClass('hide');
    }
});

$('.nav_comments').click(function (){
    if($(this).hasClass('selected')){
        $('.admin_users_block').addClass('hide');
        $('.admin_question_block').addClass('hide');
        $('.admin_answer_block').addClass('hide');
        $('.admin_comment_block').removeClass('hide');
    }
});

