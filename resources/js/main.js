$(document).ready(function(){

$('#text2,#text3').slideDown(1000)
$('#text1').fadeIn(1000)
$('#social').fadeIn(1000)

$('.thumbnail').fadeIn(1000)

$('#form').on('click',function(){

$('#scroll_form form input').focus()



})

$('#button').on('click',function(){

$('#id').show()
$('html,body').animate({
    scrollTop: $('#id').offset().top},1000);
})

$('#message').on('click',function(){

    $('#bottom_line').show()
    $('html,body').animate({
        scrollTop: $('#form').offset().top},1000);
    })








})


