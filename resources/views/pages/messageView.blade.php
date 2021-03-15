@extends('layouts.app_login')
@section('title')
Feed Back
@endsection
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:100px">
    <a href="/home" class="btn btn-success">Go Back</a>
        </div>
<div class="col-md-12" style="background:#dff3e1">
<div class="col-md-12">
<h3 class="text-center" style="padding:10px; margin-bottom:20px">Messages </h3>
</div>

<div class="col-md-12">
    @include('inc.msg')
    <div class="row">

@if(count($message) > 0)
<div class="col-md-3" ></div>
<div class="col-md-6">
@foreach($message as $msg )

<div class="well well-lg" id="well">
    <div  style="padding-left:15px; padding-top:10px">
<h5  ><a href="#" id="h5"  style="text-decoration:none; " data-toggle="modal"
data-target="#myModal"
data-title= "{{$msg->title}}"
data-email= "{{$msg->email}}"
data-name= "{{$msg->name}}"
data-create=" {{$msg->created_at->diffForHumans()}}"
data-body= "{{$msg->body}}">


{{$msg->title}}
</a></h5>
<hr>
<h6><i>Sent By: {{$msg->name}}</i></h6>
<h6><i> Sent {{($msg->created_at->diffForHumans())}}</i></h6>

@include('inc.modal',['message'=>$msg])

    </div>
    {!!Form::open(['action'=>['MessagesController@destroy',$msg->id ], 'method'=>'POST',
'class'=>'pull-right'])!!}
{{ Form::hidden('_method','DELETE') }}
{{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}

{!! Form::close() !!}
</div>

@endforeach
</div>
<div class="col-md-3"></div>


<div class="col-md-12" style="padding:40px">
<span style="padding:5px">{{$message->links()}}</span>
</div>

@else
    <div class="col-md-12">
<h1 class="text-center" style="padding-top:200px; color:#c1f0c5"> No available message for now !!</h1>
    </div>
@endif
</div>
    </div>
</div>


@endsection
