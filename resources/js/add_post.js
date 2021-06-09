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
                    valid = checkSelected($('#propertyType'));
                    valid = valid && checkSelected($('#propertyCondition'));
                    valid = valid && checkLength($('#city'));
                    valid = valid && checkLength($('#street'));
                    valid = valid && checkLength($('#houseNumber'));
                    valid = valid && checkLength($('#floorNumber'));
                    valid = valid && checkLength($('#totalFloorsInTheBuilding'));
                    if(valid)
                        next = true;
                    break;
            case 1:
                    valid = checkSelected($('#roomsNumber'));
                    valid = valid && checkCheckoBox($('.radio-input:checked'));
                    valid = valid && checkCheckoBox($('.label-input__balconies:checked'));
                    valid = valid && checkLength($('#generalDescription'));
                    if(valid)
                        next = true;
                    break;
            case 2:
                    valid = checkLength($('#builtMeter'));
                    valid = valid && checkLength($('#square_meter_general'));
                    valid = valid && checkLength($('#pricePost'));
                    valid = valid && checkLength($('#entryDatePost'));
                    if(valid)
                        next = true;
                    break;
            case 5:
                    valid = checkLength($('#contactName'));
                    valid = valid && checkLength($('#contactPhone'));
                    valid = valid && checkSelected($('#prefixPhone'));
                    valid = valid && checkSelected($('#email'));
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
    function checkCheckoBox(element){
        if(element.val() != 0)
            return true;
        return false;
    }
    function checkSelected(element){
        if(element.children('option:selected').attr('value') != '')
            return true;
        return false;
    }
    function checkLength(element){
        if((element.val().length) > 0)
            return true;
        return false;
    }
})
