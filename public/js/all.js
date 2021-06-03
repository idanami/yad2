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
        }else{
            $('.btn-create__acount').css("color","#ccc");
            $('.btn-create__acount').css("background-color","#eee");
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
    $('#btn_login').click(function(){
        let email_check=$('#email__login').val();
        let pass_check =$('#password__login').val();
        $.ajax({
            type:'get',
            url:"login",
            data:{'email':email_check , 'password':pass_check},
            success:function(data){
                if(data == 'true'){

                }else{
                    $('.notification').css('display','block')
                    setTimeout(function () {
                        $('.notification').css('display','none')
                    }, 10000);
                }
        },
        });
    })
    $('#btn-create__acount').click(function(){
        $('.register-form').submit();
    })
    $('#btn-new__password').click(function(){
        $('.change-password').submit()
    })
    $(".connected-link").click(function(){
        $(".popUpWindow").css("display","block")
    })
    $(".close-popUpWindow").click(function(){
        $(".popUpWindow").css("display","none")
        $(".login-popupContent").css("display","flex")
        $(".register-popupContent").css("display","none")
        $(".password-reset__popupContent").css("display","none")
     })
    $( "#btn-continued__register" ).click(function() {
        $(".popupContent-register__part1").css("display","none")
        $(".popupContent-register__part2").css("display","block")
    });
    $("#toRegister").click(function(){
        $(".login-popupContent").css("display","none")
        $(".register-popupContent").css("display","flex")
    })
    $("#toConnection").click(function(){
        $(".login-popupContent").css("display","flex")
        $(".register-popupContent").css("display","none")
    })
    $("#forgetPassword").click(function(){
        $(".login-popupContent").css("display","none")
        $(".password-reset__popupContent").css("display","flex")
    })
    $('.areaCode-btn').click(function(){
        if($('.areaCode-icon').text() == 'expand_more'){
            $('.areaCode-icon').text('expand_less')
            $('.croll-num__selects').css('display', 'block');
        }else{
            $('.areaCode-icon').text('expand_more')
            $('.croll-num__selects').css('display', 'none');
        }
    })
    $('.croll-number div').click(function(){
        let areaCode = $(this).text();
        $('.areaCodeValue').text(areaCode)
    })
    $('.m-clean').click(function(){
        $('.areaCodeValue').text('קידומת')
    })
    $("#btn-check__emailIfExsist").click(function(){
        var email_check=$('#email-reseet_pass').val();
        $.ajax({
            type:'get',
            url:"send_verification_code",
            data:{'email':email_check},
            success:function(data){
                alert(data)
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
            url:"check_token",
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
    $('.category-select').click(function(){
        window.location.href = '/add_post';
    })
    $('.feed-list__item').click(function(){
        var index_content = $(this).attr('value');
        var index_parent = $(this).parent().index();
        var ua = new UAParser();
        var result = ua.getResult();
        $('#propertyListIdMobile').attr('value',index_content)
        if(result.device.type == "mobile")
            $('#property_list_id').submit()
        else{
            $feed_list_content = $('.feed-lists__content').eq(index_parent);
            if($feed_list_content.css('display') == 'none')
            {
                $feed_list_content.css('display','flex')
                $feed_list_content.find('.including-list').each(function(index,element){
                    var this_value = $(this).attr('value');
                    if(this_value == 0){
                        $(element).css('color','#b6b6b6')
                        $(element).find('span').css('color','#b6b6b6')
                    }
                })
            }
            else    $feed_list_content.css('display','none')
        }
    })
    $('.feed-list__item')
    .each(function(index,value ){
        let this_value = $(this).attr('value');

        $.ajax({
            type:'get',
            url:"firstImageById",
            data:{'id':this_value,'index':index},
            success:function(data){
                if ($.trim(data)){
                    $('.testimage').eq(data[2]).attr('src','images/'+data[0].image)
                    $('.image-container__currentNumber').eq(data[2]).text(data[1]+'+');
                }
            },
        });
    })
    .mouseover(function(index,value){
        let this_value = $('.feed-list__item').index(this);
        $('.image-container__numImage').eq(this_value).css('display','block');
    })
    .mouseleave(function(){
        let this_value = $('.feed-list__item').index(this);
        $('.image-container__numImage').eq(this_value).css('display','none');
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

$(document).ready(function(){
    let imageIndexByClassName = 0;
    $('.btn-next').click(function(){
        let index = $('.btn-next').index(this);
        // $('.publish-step__add').eq(index+1).css('display','none')
        // $('.publish-step__description').eq(index+1).css('display','block')
        // $('.publish-step__items').eq(index+1).css('background','#f9f9f9')
    })
    $('.btn-add_post').click(function(){
        $('.add-post__form').submit();
    })

    $(".category-select__item")
    .mouseover(function(){
        $(this).css('border', '1px solid #ff7100')
        $(this).find('svg g g path').css('fill','#ff7100')
        $(this).find('div').css('color','#ff7100')

    })
    .mouseleave(function(){
        $(this).css('border', '1px solid #ccc')
        $(this).find('svg g g path').css('fill','rgb(127, 127, 127)')
        $(this).find('div').css('color','rgb(0, 0, 0)')
    })
    $('.multiImageUpdateLable').click(function(){
        imageIndexByClassName=  $(this).attr('value');
    })
    $('#multiImageUpdate').change(function(event) {
        multiImgToData(this);
    });
    $('#imageUpdate').change(function(event) {
        imgToData(this,'firstImage','firstImageLabel');
    });
    $('#videoUpdate').change(function(event) {
        imgToData(this,'firstVideo','firstVideoLabel');
    });

    function imgToData(input,setImageLocal,index) {
        if (input.files) {
            var File = new FileReader();
            File.onload = function(event) {
            $('<img/>').attr({
                src: event.target.result,
                class: `${setImageLocal}Show`,
                id: `primary${setImageLocal}Show`,
            }).appendTo(`.${setImageLocal}`);
            };
            $(`.${index}`).css('display','none');
            $(`.${setImageLocal}`).css('display','block');
            File.readAsDataURL(input.files[0]);
        }
    }
    function multiImgToData(input) {
        if (input.files) {
            var setIn = Number(imageIndexByClassName);
            var length = input.files.length;
            $.each(input.files, function(i, v) {
                var n = i + setIn;
                if(($($(".imageAdded")[n]).find('.imgshow').length) == 0){
                    var File = new FileReader();
                    File.onload = function(event) {
                    $('<img/>').attr({
                        src: event.target.result,
                        class: 'imgshow',
                        id: 'img-' + n + '-preview',
                    }).appendTo($(".imageAdded")[n]);
                    };
                    $('.multiImageUpdateLable').eq(n).css('display','none')
                    $('.imageAdded').eq(n).css('display','block')
                    File.readAsDataURL(input.files[i]);
                }
            });
        }
    }
})

// require('./bootstrap');
$(document).ready(function(){



    $('button').click(function(event) {
        var spanCheck = $(this).children('span').text();
        var divCheck = $(this).children('div').text();
        var iCheck = $(this).children('i').text();
        event.preventDefault()

        if(divCheck == 'בחרו סוגי נכסים'){
            if(spanCheck == 'expand_more'){
                var spanCheck = $(this).children('span').text('expand_less');
                $('.allTypes-ofAssets').css('display', 'block');
            }else{
                var spanCheck = $(this).children('span').text('expand_more');
                $('.allTypes-ofAssets').css('display', 'none');
            }
        }
        if(iCheck == 'חיפוש מתקדם'){
            if(spanCheck == 'add_circle_outline'){
                var spanCheck = $(this).children('span').text('highlight_off');
                $('.dropdown-content__search').css('display', 'block');
            }else{
                var spanCheck = $(this).children('span').text('add_circle_outline');
                $('.dropdown-content__search').css('display', 'none');
            }
        }
        if(iCheck == 'לפי תאריך'){
            if(spanCheck == 'expand_more'){
                var spanCheck = $(this).children('span').text('expand_less');
                $('.feed-filter___dropdowm').css('display', 'block');
            }else{
                var spanCheck = $(this).children('span').text('expand_more');
                $('.feed-filter___dropdowm').css('display', 'none');
            }
        }
        if(iCheck == 'חיפוש'){
            $("#searchInPage").submit();}
    })
})

