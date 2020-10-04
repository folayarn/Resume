@extends('layouts.app')
@section('content')
<div class="col-md-12 text-left" id="me">
<p>Let's have a chat<br>
<span id="message" >
    Message us
    </a></p>
</div>
<div class="col-md-12 " id="ro">
<div class="row ">
<div class="col-md-4 ">
</div>
<div class="col-md-4">
    <div class="col-md-4">
        <h1>Address</h1>
    </div>
    <address> Zone 1, Folayan Street, Ayekale Area, Ota-efun Road,
         Osogbo, Osun State,Nigeria </address>

</div>
<div class="col-md-4">

        <h1>Lets Talk</h1>

    <table>
<tr>
<td>Phone:</td>
<td>  + (234) 07033011638 </td>

</tr>
<tr>
    <td>Hotline:</td>
    <td>  + (234) 08138467941 </td>

    </tr>
    <tr>
        <td>Email:</td>
        <td>  folayanshola@gmail.com </td>

        </tr>



    </table>

</div>


</div>

</div>
<div class="col-md-12" id="bottom_line" >
<div class="row">
<div class="col-md-6">
    <div id="map">



    </div>


</div>
<div class="col-md-6" id="form">

    @include('inc.message')
{!! Form::open(['action' => 'MessagesController@store', 'method'=>'POST']) !!}


<div class="form-group">
    <label for="full name">{{ __('Full Name') }}</label>


        <input id="name" type="text"
         class="form-control @error('name') is-invalid @enderror" name="name"
         placeholder="Enter your Full Name Here ..."
         required>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

</div>
    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}</label>


            <input id="email" type="email" placeholder="@" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

    </div>
    <div class="form-group">
        <label for="subject">{{ __('Subject') }}</label>


            <input id="title" type="text"
             class="form-control @error('title') is-invalid @enderror" name="title"
             required>

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

    </div>
    <div class="form-group">
        <label for="Message">{{ __('Your Message') }}</label>


            <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body"
             placeholder="Format your Message for Readable... "
             rows="15" cols="30"
             required></textarea>

            @error('body')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{form::submit('Click here to Submit',['class'=>'form-control btn btn-primary'])}}

    </div>







{!! Form::close() !!}

</div>

</div>
</div>
<script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: 7.7710, lng:4.55698};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom:13, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
        </script>

@endsection
