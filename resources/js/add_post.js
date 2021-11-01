$(document).ready(function(){
    let imageIndexByClassName = 0;
    $('.category-select__item-first').click(function(){
        $('.editing').eq(0).css('display','block')
        $('.publish-step__add').eq(1).css('display','block')
        $('.publish-step__add-first').css('display','none')
        $('.publish-step__description').eq(1).css('display','none')
        $('.publish-step__description-first').css('display','block')
    })

    $('.btn-back').click(function(){
        let index = $('.btn-back').index(this);
        $('.editing').eq(index+1).css('display','none')
        $('.publish-step__add').eq(index+1).css('display','none')
        $('.publish-step__add').eq(index).css('display','block')
        $('.publish-step__description').eq(index+1).css('display','block')
        $('.publish-step__description').eq(index).css('display','none')
    })
    $('.btn-next').click(function(e){
        let index = $('.btn-next').index(this);
        let next = false;
        valid = true;

        switch (index) {
            case 0:
                    valid = checkSelected('#propertyType');
                    valid = checkSelected('#propertyCondition');
                    valid = checkLength('#city');
                    valid = checkLength('#street');
                    valid = checkLength('#houseNumber');
                    valid = checkLength('#floorNumber');
                    valid = checkLength('#totalFloorsInTheBuilding') && valid;
                    if(valid)
                        next = true;
                    break;
            case 1:
                    valid = checkSelected('#roomsNumber');
                    // valid = checkCheckoBox($('.radio-input:checked'),55);
                    // valid = checkCheckoBox($('.label-input__balconies:checked'),55);
                    valid = checkLength('#generalDescription') && valid;
                    if(valid)
                        next = true;
                    break;
            case 2:
                    valid = checkLength('#builtMeter');
                    valid = checkLength('#square_meter_general');
                    valid = checkLength('#pricePost');
                    valid = checkLength('#entryDatePost') && valid;
                    if(valid)
                        next = true;
                    break;
            case 3: next = true; break;
            case 4:
                    valid = checkLength('#contactName');
                    valid = checkLength('#contactPhone');
                    valid = checkSelected('#prefixPhone');
                    valid = checkLength('#email') && valid;
                    if(valid)
                        next = true;
                    break;

        }
        if(next){
            $('.editing').eq(index+1).css('display','block');
            $('.publish-step__add').eq(index+1).css('display','none')
            $('.publish-step__add').eq(index+2).css('display','block')
            $('.publish-step__description').eq(index+1).css('display','block')
            $('.publish-step__description').eq(index+2).css('display','none')
        }
        e.preventDefault()
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
    // function checkCheckoBox(element,index){
    //     if(element.val() != 0){
    //         $('.error').eq(index).css('display','none')
    //         return true;
    //     }
    //     $('.error').eq(index).css('display','block')
    //     return false;
    // }
    function checkSelected(element){
        if($(element).children('option:selected').attr('value') != ''){
            $(`.error${element}Error`).css('display','none')
            return true;
        }
        $(`.error${element}Error`).css('display','block')
        return false;
    }
    function checkLength(element){
        if(($(element).val().length) > 0){
            if(element == "#pricePost"){
                if($(element).val() <= 200000){
                    $(`.error${element}Error`).css('display','none')
                    $(`.error${element}ISVlideError`).css('display','block')
                    return false;
                }
                else{
                    $(`.error${element}Error`).css('display','none')
                    $(`.error${element}ISVlideError`).css('display','none')
                }
            }
                $(`.error${element}Error`).css('display','none')
                return true;
        }
        $(`.error${element}Error`).css('display','block')
        return false;
    }
})
