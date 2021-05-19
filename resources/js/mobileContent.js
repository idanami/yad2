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
