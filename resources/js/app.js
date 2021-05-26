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

