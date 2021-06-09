$(document).ready(function(){

    $('.btn-contact').click(function(){
        let parentIndex = $('.btn-contact').index(this);
        let idTable = $('.feed-list__item').eq(parentIndex).attr('value');
        if($('.contact-details').eq(parentIndex).css('display') == 'none'){
            $('.contact-details').eq(parentIndex).css('display','block');
            $.ajax({
                type:'get',
                url:"getContact",
                data:{'id':idTable},
                success:function(data){
                    $('.contactName').eq(parentIndex).text(data[0].name);
                    $('.contactPhoneNumber').eq(parentIndex).text(data[0].phone_prefix+'-'+data[0].phone);
                },
            });
        }
        else $('.contact-details').eq(parentIndex).css('display','none');
    })
    $('.dropdown_item').click(function(event){
        return false;
    })
    $('.disconnect_click').click(function(){
        $('#logout_form').submit();
    })
    $('.category-select').click(function(){
        window.location.href = '/add_post';
    })
    $('.feed-list__item').click(function(){
        let op='';
        let index_content = $(this).attr('value');
        let index_parent = $(this).parent().index();
        let ua = new UAParser();
        let result = ua.getResult();
        if($('.feed-lists__content').eq(index_parent).css('display') == 'none'){
            $('.feed-list__item').eq(index_parent).addClass('feed-list__item-click')
            $('.location-asset').eq(index_parent).addClass('location-asset__click')
            $('.location-asset__description').eq(index_parent).addClass('location-asset__description-click')
            $('.partial-detail__asset').eq(index_parent).addClass('partial-detail__asset-click')
            $('.asset-price').eq(index_parent).addClass('asset-price__click')
            $('.material-icon__asset-price').eq(index_parent).css('display','none')
            $('.btn-contact').eq(index_parent).css('display','block');
            $.ajax({
                type:'get',
                url:"allImageById",
                data:{'value':index_content,'index':index_parent},
                success:function(data){
                    for(var i=0;i<data[0].length;i++){
                        op+='<a href="'+data[0][i].image+'" data-lightbox="imagelist"><img class="testimage" src="'+data[0][i].image+'"> </a>';
                    }
                    $('.post-images'+data[1]).append(op);
                    $('.post-images'+data[1]).css('display','block');
                    $('.image-container').eq(data[1]).css('display','none')
                },
            });
        }
        else if($('.feed-lists__content').eq(index_parent).css('display') != 'none'){
            $('.post-images'+index_parent).empty();
            $('.post-images'+index_parent).css('display','none');
            $('.image-container').eq(index_parent).css('display','flex')
            $('.feed-list__item').eq(index_parent).removeClass('feed-list__item-click')
            $('.location-asset').eq(index_parent).removeClass('location-asset__click')
            $('.location-asset__description').eq(index_parent).removeClass('location-asset__description-click')
            $('.partial-detail__asset').eq(index_parent).removeClass('partial-detail__asset-click')
            $('.asset-price').eq(index_parent).removeClass('asset-price__click')
            $('.material-icon__asset-price').eq(index_parent).css('display','block')
            $('.btn-contact').eq(index_parent).css('display','none');
        }
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
                    $('.testimage').eq(data[2]).attr('src',data[0].image)
                    $('.image-container__currentNumber').eq(data[2]).text(data[1]+'+');
                    $('.image-container__currentNumber').eq(data[2]).attr('value',data[1]);
                    $('.image-container__numImage').eq(data[2]).attr('value',data[3]);
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
