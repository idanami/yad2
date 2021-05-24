// require('./bootstrap');
$(document).ready(function(){

    $('button').click(function(event) {

        var spanCheck = $(this).children('span').text();
        var divCheck = $(this).children('div').text();
        var iCheck = $(this).children('i').text();
        event.preventDefault()

        if(divCheck == 'בחרו סוגי נכסים'){
            if(spanCheck == 'expand_more'){
                var spanCheck = $(this).children('span').text('expand_less');
                $('.allTypes-ofAssets').css('display', 'block');
            }else{
                var spanCheck = $(this).children('span').text('expand_more');
                $('.allTypes-ofAssets').css('display', 'none');
            }
        }
        if(iCheck == 'חיפוש מתקדם'){
            if(spanCheck == 'add_circle_outline'){
                var spanCheck = $(this).children('span').text('highlight_off');
                $('.dropdown-content__search').css('display', 'block');
            }else{
                var spanCheck = $(this).children('span').text('add_circle_outline');
                $('.dropdown-content__search').css('display', 'none');
            }
        }
        if(iCheck == 'לפי תאריך'){
            if(spanCheck == 'expand_more'){
                var spanCheck = $(this).children('span').text('expand_less');
                $('.feed-filter___dropdowm').css('display', 'block');
            }else{
                var spanCheck = $(this).children('span').text('expand_more');
                $('.feed-filter___dropdowm').css('display', 'none');
            }
        }
        if(iCheck == 'חיפוש'){
            $("#searchInPage").submit();}
            // let city = $("#city").val();
            // let max_price = $("#max_price").val();
            // let min_price = $("#min_price").val();
            // let pandor_doors = $("#pandor_doors").val();
            // let elevators = $("#elevators").val();
            // let air_conditioning = $("#air_conditioning").val();
            // let mamad = $("#mamad").val();
            // let bars = $("#bars").val();
            // let access_for_disabled = $("#access_for_disabled").val();
            // let renovated = $("#renovated").val();
            // let Furniture = $("#Furniture").val();
            // let floor_min = $("#floor_min").val();
            // let floor_max = $("#floor_max").val();
            // let size_min = $("#size_min").val();
            // let size_max = $("#size_max").val();
            // let entry_date = $("#entry_date").val();
            // let free_search = $("#free_search").val();
            // alert("asfgd")
            // $.ajax({
                // type:"GET",
                // url: "check_advanced",
                // data:{
                    // 'city':city ,
                    // 'max_price':max_price ,'min_price':min_price ,'pandor_doors':pandor_doors,'elevators':elevators ,
                    // 'air_conditioning':air_conditioning ,'mamad':mamad ,'bars':bars ,'access_for_disabled':access_for_disabled ,
                    // 'renovated':renovated ,'Furniture':Furniture ,'floor_min':floor_min ,'floor_max':floor_max ,'size_min':size_min ,
                    // 'size_max':size_max ,'entry_date':entry_date ,'free_search':free_search ,
                // },
                // success:function(data){
                    // alert(data)
                    // {{ $property_lists = data }}
                    // $('#propertyListIdMobile').attr('value',data)
                    // window.location.href=route('home.realestate',data)
                // },
            // })
            // window.location.href=route('home.realestate','id' , $('#propertyListIdMobile').val());
        // }
    })
})

