@extends('layouts.app')
@section('content')
<div class="col-md-12 text-left" id="me">
<p>Let's have a chat<br>
<a href="#form" style="padding:10px; border:2px solid green; text-decoration:none">
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
<div class="col-md-12" style="background-color:green; margin-top:60px;" >
<div class="row">
<div class="col-md-6">


</div>
<div class="col-md-6" id="form">


{!! Form::open(['action' => 'MessagesController@store', 'method'=>'POST']) !!}

<div class="form-group">
    {{form::submit('Click here to Submit',['class'=>'form-control btn btn-dark'])}}

</div>

    <div class="form-group">
{{form::label('name','Full Name')}}
{{form::text('name','',['class'=>'form-control', 'placeholder'=>'Enter your Full name'])}}

    </div>
    <div class="form-group">
        {{form::label('email','Email')}}
        {{form::email('email','',['class'=>'form-control', 'placeholder'=>'@'])}}

            </div>
            <div class="form-group">
                {{form::label('title','Title')}}
                {{form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}

                    </div>
                    <div class="form-group">
                        {{form::label('body','Your Message')}}
                        {{form::textarea('body','',['class'=>'form-control',
                         'placeholder'=>'type your message here'])}}

                            </div>




{!! Form::close() !!}
<div >
    @include('inc.message')
    </div>
</div>

</div>
</div>
@endsection
