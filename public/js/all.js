var approval_of_regulations = false;
function changeType(id,visibil){
    if($("#"+visibil).text() == 'visibility_off'){
        $("#"+id).attr("type","text");
        $("#"+visibil).text('visibility')
    }else {
        $("#"+id).attr("type","password");
        $("#"+visibil).text('visibility_off')
    }

}
function approvalOfRegulations(AOR){
     if(AOR.checked){
       approval_of_regulations = true;
       validate(2)
     }else{
       approval_of_regulations = false;
       validate(2)
    }
}
function validate(status){
    $('button').css("color","#ccc");
    $('button').css("background-color","#eee");
    var valid = true;
    if(status == 1){
        valid = checkEmail($("#email_register"));
        valid = checkEmpty($("#password"));
        valid = valid && checkEmpty($("#pass_confirm"));
        $('#btn-continued__register').attr('disabled',true);
        if(valid && ($("#password").val() == $("#pass_confirm").val() )){
            $('#btn-continued__register').attr("disabled",false);
            $('#btn-continued__register').css("color","#fff");
            $('#btn-continued__register').css("background-color","#ff7100");
        }
    }
    if(status == 2){
        valid = checkEmpty($("#firstname"));
        valid = checkEmpty($("#lastname"));
        valid = checkEmpty($("#phoneNumber"));
        valid = valid && checkEmpty($("#dateOfBirth"));
        $('#btn-create__acount').attr('disabled',true);
        if(valid && approval_of_regulations){
            $('#btn-create__acount').attr("disabled",false);
            $('#btn-create__acount').css("color","#fff");
            $('#btn-create__acount').css("background-color","#ff7100");
        }
    }
    if(status == 3){
        valid = valid && checkEmail($("#email-reseet_pass"));
        $('#btn-check__emailIfExsist').attr('disabled',true);
        if(valid){
            $('#btn-check__emailIfExsist').attr("disabled",false);
            $('#btn-check__emailIfExsist').css("color","#fff");
            $('#btn-check__emailIfExsist').css("background-color","#ff7100");
        }
    }

    if(status == 4){
        valid = checkEmpty($("#newPassword"));
        valid = valid && checkEmpty($("#confirmNewPassword"));
        if(valid && ($("#newPassword").val() == $("#confirmNewPassword").val())){
            $('#btn-new__password').attr("disabled",false);
            $('#btn-new__password').css("color","#fff");
            $('#btn-new__password').css("background-color","#ff7100");
        }
    }
    if(status == 5){
        valid = valid && checkEmpty($("#password-token__confirm"));
        if(valid){
            $('#btn-token__confirm').attr("disabled",false);
            $('#btn-token__confirm').css("color","#fff");
            $('#btn-token__confirm').css("background-color","#ff7100");
        }
    }
    if(status == 6){
        valid = checkEmail($("#email__login"));
        valid =  valid && checkEmpty($("#password__login"));
        if(valid){
            $('#btn_login').attr("disabled",false);
            $('#btn_login').css("color","#fff");
            $('#btn_login').css("background-color","#ff7100");
        }
    }

}
function checkEmpty(object){
    var name = $(object).attr("name");
    $("." + name + "-validation").html("");
    $(object).css("border", "");
    if($(object).val().length < 6){
        $(object).css("border","#FF0000 1px solid");
        $("."+name+"-validation").html("Required");
        return false;
    }
    return true;
}
function checkEmail(object){
    var result = true;
    var name = $(object).attr("name");
    $("."+name+"-validation").html("");
    $(object).css("border","");
    result = checkEmpty(object);
    if(!result) {
        $(object).css("border","#FF0000 1px solid");
        $("."+name+"-validation").html("Required");
        return false;
    }
    var email_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,3})+$/;
    result = $(object).val().match(email_regex);
    if(!result) {
        $(object).css("border","#FF0000 1px solid");
        $("."+name+"-validation").html("Invalid");
        return false;
    }
    return result;
}

$(document).ready(function(){
    $(".connected-link").click(function(){
        $(".popUpWindow").css("display","block")
    })
    $(".close-popUpWindow").click(function(){
        $(".popUpWindow").css("display","none")
    })
    $( "#btn-continued__register" ).click(function() {
        $(".popupContent-register__part1").css("display","none")
        $(".popupContent-register__part2").css("display","block")
    });
    $("#toRegister").click(function(){
        $(".login-popupContent").css("display","none")
        $(".register-popupContent").css("display","flex")
        $(".popupContent-register__part2").css("display","none")
    })
    $("#toConnection").click(function(){
        $(".login-popupContent").css("display","flex")
        $(".register-popupContent").css("display","none")
    })
    $("#forgetPassword").click(function(){
        $(".login-popupContent").css("display","none")
        $(".password-reset__popupContent").css("display","flex")
    })
    $("#btn-check__emailIfExsist").click(function(){
        var email_check=$('#email-reseet_pass').val();
        $.ajax({
            type:'get',
            url:"{{ route('sendVarificationCode') }}",
            data:{'email':email_check},
            success:function(data){
                if(data){
                    $(".send-mail__forAuth").css("display","none");
                    $(".send-for__review").css("display","flex");
                    $("#your-email__forResetPassword").html("המייל לשחזור סיסמה נשלח בהצלחה למייל:"+ data)
                    $(".haader-description__resetPass").text("")
                    $('#email_for_change_pass').val(data)
                }
                else{
                    alert('email is not exsist')
                }
        },
        });
    })

    $("#btn-token__confirm").click(function(){
        var token__confirm=$("#password-token__confirm").val();
        var emailCheck__token = $("#email_for_change_pass").val();
        $.ajax({
            type:'get',
            url:"{{ route('confirmToken') }}",
            data:{'token__confirm':token__confirm , 'email':emailCheck__token},
            success:function(data){
                if(data){
                    $(".send-for__review").css("display","none");
                    $(".change-password").css("display","flex");
                    $(".haader-description__resetPass").html("לחידוש סיסמה, הזן סיסמה בעלת 6 תווים, לפחות אות אחת גדולה, אות אחת קטנה ומספר אחד");
                }
                else{
                    alert('token password is wrong')
                }
        },
        });
    })
})


$(document).ready(function(){
    $('.feed-list__item').click(function(){
        var index_content = $(this).attr('value');
        var ua = new UAParser();
        var result = ua.getResult();
        $('#propertyListId').attr('value',index_content)
        if(result.device.type == "mobile")
            $('#property_list_id').submit()
        else{
            $('.feed-lists__content').each(function(){
                if($(this).attr('id') == 'feed-lists__content'+index_content){
                    if($(this).css("display") == 'none'){
                        $(this).css("display","flex")
                        $( ".including-list" ).each(function() {
                            var this_index = $(this).index();
                            var this_value = $(this).attr('value');
                            if(this_value == 0){
                                $( ".including-list" ).eq(this_index).css('color','#b6b6b6')
                                $( ".including-list span" ).eq(this_index).css('color','#b6b6b6')
                            }
                        });
                    }
                    else
                        $(this).css("display","none")
                }
            })
        }
    })

})

$(document).ready(function(){
    $('.scrolling-item').click(function(){
        var this_index = $(this).index();
        $('.scrolling-item').each(function() {
            if($(this).index() == this_index){
                $(this).css('border-bottom','3px solid #ff7100')
                $(this).css('color','#ff7100')
            }
            else{
                $(this).css('border-bottom','none')
                $(this).css('color','#363636')
            }
        })
    });
    $('.property-characteristics__mobile-item').each(function(){
        var this_index = $(this).index();
        var this_value = $(this).attr('value');
        if(this_value == 0){
            $('.property-characteristics__mobile-item').eq(this_index).css('color','#ccc')
            $('.property-characteristics__mobile-item span').eq(this_index).css('color','#ccc')
            $('.property-characteristics__mobile-item span').eq(this_index).css('background-color','#eee')
        }
    });

});

// require('./bootstrap');
$(document).ready(function(e){
    $('.expand_moreOrexpand_less').click(function(event) {

        var spanCheck = $(this).children('span').text();
        var divCheck = $(this).children('div').text();
        if(spanCheck == 'expand_more'){
            var spanCheck = $(this).children('span').text('expand_less');
            if(divCheck == 'בחרו סוגי נכסים')
                $('.allTypes-ofAssets').css('display', 'block')
        }
        else{
            var spanCheck = $(this).children('span').text('expand_more');
            if(divCheck == 'בחרו סוגי נכסים')
                $('.allTypes-ofAssets').css('display', 'none')
        }
        event.preventDefault();
    })
})

