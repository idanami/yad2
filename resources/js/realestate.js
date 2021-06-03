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
