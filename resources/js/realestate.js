
$(document).ready(function(){
    $('.feed-list__item').click(function(){
        // var index_content = $(this).attr('value');
        var index_parent = $(this).parent().index();

        var ua = new UAParser();
        var result = ua.getResult();
        $('#propertyListIdMobile').attr('value',index_parent)
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
            else
                $feed_list_content.css('display','none')
             // $('.feed-lists__content').each(function(){
            //     if($(this).attr('id') == 'feed-lists__content'+index_content){
            //         if($(this).css("display") == 'none'){
            //             $(this).css("display","flex")
            //             $( ".including-list" ).each(function(){
            //                 var this_index = $(this).index();
            //                 var this_value = $(this).attr('value');
            //                 alert(this_index)
            //                 if(this_value == 0){
            //                     $( ".including-list" ).eq(this_index).css('color','#b6b6b6')
            //                     $( ".including-list span" ).eq(this_index).css('color','#b6b6b6')
            //                 }
            //             });
            //         }
            //         else
            //             $(this).css("display","none")
            //     }
            // })
        }
    })

})
