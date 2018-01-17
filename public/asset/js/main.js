/**
 * Created by 1 on 08.11.2017.
 */
$(document).ready(function(){

    $("#menu").on("click","a", function (event) {
        if ($(this).attr('href').indexOf("#") == 0) {
            event.preventDefault();
            var id = $(this).attr('href'), top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 500);
        }
    });

});

$(document).ready(function(){

    $("#more").on("click","a", function (event) {
            event.preventDefault();
            if($('.toggle-article').attr('data-active') == 1){
                $('.toggle-article').attr('data-active', '0');
                $('.all').css('display', 'none');
                $('.begin').css('display', 'block');
                $('.toggle-article').text('Читати всю статтю');
            } else {
                $('.toggle-article').attr('data-active', '1');
                $('.all').css('display', 'block');
                $('.begin').css('display', 'none');
                $('.toggle-article').text('Згорнути');
            }
    });
});

$(window).load(function(){
    var h = $('.info-link').outerHeight() - 19;
    $('.map').attr('height', h);

});

// $(window).load(function(){
//     var h = $('.rowcontent').css('padding-left');
//     var pad = h.substring(0, h.length - 2);
//     $('.banner-content').css('margin-left', '-' + pad + 'px');
//     $('.banner-content').css('margin-right', '-' + pad + 'px');
// });

$(window).load(function(){
    $('.banner').on("mouseover", function() {
        var id = $(this).attr('id');
        $('#'+ id +' p').css('color', 'black');
        $('#'+ id +' img').css('filter', 'grayscale(100%)');
    })
});

$(window).load(function(){
    $('.banner').on("mouseout", function() {
        var id = $(this).attr('id');
        $('#'+ id +' p').css('color', 'white');
        $('#'+ id +' img').css('filter', 'grayscale(0%)');
    })
});

$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},500);
    });
});

$(document).ready(function(){
    $(".search-submit").on("click", function (event) {
        if (!$(".search-text").val()) {
            event.preventDefault();
        }
    });

});