<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="{{secure_asset('OL.png')}}" type="image/icon type">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{secure_asset('js/app.js')}}"></script>
    <script src="{{secure_asset('js/boostrap.js')}}"></script>
    <title>{{config('app.name','MyCV')}}</title>


    </head>
    <body>
    @include('inc.navbar')

        <div class="container-fluid">
            <div class="row">

@yield('content')
</div>


        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
<script>
$('#myModal').on('show.bs.modal', function (event) {
  var a = $(event.relatedTarget)
  var email = a.data('email')
  var name = a.data('name')
  var create = a.data('create')
  var body= a.data('body')
  var title= a.data('title')
    var modal = $(this)
  modal.find('.modal-header').html(title)
  modal.find('ul .email').html(email)
  modal.find('.modal-body p').text(body)
  modal.find('ul .date').text(create)
  modal.find('ul .name').text(name)
});



</script>
<script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwhke8tmqhDKFSHTLHR_rMTl0BYjDqdQM&callback=initMap">
    </script>

    </body>
</html>
