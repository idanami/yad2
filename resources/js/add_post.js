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
