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

