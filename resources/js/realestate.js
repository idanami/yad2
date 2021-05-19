
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
