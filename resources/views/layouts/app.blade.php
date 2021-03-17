<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="log.png" type="image/icon type">
        <meta charset="utf-8">
        <meta name="theme-color" content="#000000" />
    <meta name="Space-Tech" content="Portfolio for Space-Tech" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/boostrap.js')}}"></script>
    <title>@yield('title')::->Portfolio For Folayan sola</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 back_ground">
                    @include('inc.navbar')
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        @yield('section')
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="about">

@yield('container')

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="project">

            @yield('project')

                    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="service">

            @yield('service')
                    </div>



                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer" id="foot">

                        @yield('contact')

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
