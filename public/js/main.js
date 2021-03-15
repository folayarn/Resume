$(document).ready(function(){

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });



    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      var spinner="<div class='spinner-border' style='margin-left:50%; width: 5rem; height: 5rem;' role='status'></span></div>"


$(window).on('scroll',function(){
var sm=$(document).scrollTop();
if(sm > 650){
    $('#nav').css({'background-color':'#111e24'})
}else{
    $('#nav').css({'background-color':'transparent'})
}
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

    $('#post_message').submit(function(e){
        e.preventDefault()
        $('.send_btn').text('Please Wait...')
    $.ajax({
    url:'/messages',
    type:'POST',
    data:$(this).serialize()
    }).done(function(response){
        $('.send_btn').removeClass('btn-primary')
        $('.send_btn').addClass('btn-success')
        $('.send_btn').text('Successfully Sent')

       $('#post_message')[0].reset()
    }).fail(function(){
        $('.send_btn').removeClass('btn-primary')
        $('.send_btn').addClass('btn-danger')
            $('.send_btn').text('Failed to send')
    });
    })



    $('.project').html(spinner)

        $.ajax({
            url:"/posts",
            type:'GET',
            }).done(function(res){
                if(res.posts.length > 0){
            $.each(res.posts,function(i,value){

console.log(value)
                var col="<div class='card col-md-1'>"+ value.title+"</div>"

                $('.project').html(col)
            })
            }else{
                var error="<h3 class='text-center'>No Available project</h3>"
                var alert="<div class='alert alert-warning'>"+error +"</div>"
                var col="<div class='col-md-3'></div>"
                
                 var col2="<div class='col-md-6'>"+alert+"</div>"
                 var alldiv=col+col2+col
                $('.project').html(alldiv)
            }

            }).fail(function(){
                var error="<h3 class='text-center'>Fetching Error</h3>"
                var alert="<div class='alert alert-danger'>"+error +"</div>"
                var col="<div class='col-md-3'></div>"
                
                 var col2="<div class='col-md-6'>"+alert+"</div>"
                 var alldiv=col+col2+col
                $('.project').html(alldiv)

            });













})


