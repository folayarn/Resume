@extends('layouts.app')
@section('content')
<div class="col-md-12" style="padding:15px">
<a href="/posts" class="btn btn-success">Go Back</a>
</div>

<div class="col-md-12">
<h1 class="text-center" style="font-family:E-SQUARE; padding-bottom:15px">{{$posts->title}}</h1>
</div>
<div class="col-md-12">
<img class="img-responsive" src="/storage/images/{{$posts->image}}" width="100%" height="400px">
</div>
<div class="col-md-12" style="padding-top:20px; padding-bottom:30px">
    <div class="row">
        <div class="col-md-4" style="font-family:E-SQUARE">
            <h4>Project Type</h4>
            <hr>

            <h6><i>{{$posts->type}}</i> </h6>
            <hr>

<small><i>created at {{' '. Date('F d, Y', strtotime($posts->created_at))}},
    {{' '. Date('h:iA', strtotime($posts->created_at))}}</i></h6>
</i> </small>
<hr>
@if(auth::check())
<div class="col-md-4">
<a href="/posts/{{$posts->id}}/edit" class="btn btn-default pull-left">Edit</a>
{!!Form::open(['action' => ['PostsController@destroy',$posts->id], 'method'=>'POST']) !!}
{{form::hidden('_method','DELETE')}}

{{form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!form:: close() !!}
</div>
@endif
        </div>
        <div class="col-md-6" style="font-family:E-SQUARE">
            <p class="text-center"><p>{!!$posts->description!!}</p></p>
</div>
    </div>
</div>

<div class="col-md-12"></div>
    </div>
@endsection
