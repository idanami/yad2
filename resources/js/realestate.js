
$(document).ready(function(){
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
    .mouseover(function(){
        let this_value = $(this).attr('value');
        $('.image-container__numImage').eq(this_value).css('display','block');

        // alert(this_value)
        // $.ajax({
        //     type:'get',
        //     url:"allImageById",
        //     data:{'id':this_value},
        //     success:function(data){
        //         $('.image-container__numImage').eq(this_value).css('display','block');
        //         $('.image-container__currentNumber').text(data+'+');
        //     },
        // });
    })
    .mouseleave(function(){
        let this_value = $(this).attr('value')
        $('.image-container__numImage').eq(this_value).css('display','none');
    })

})
