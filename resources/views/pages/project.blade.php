@extends('layouts.app')
@section('content')
@if(auth::check())
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:8px">
    <a href="/home" class="btn btn-success">Go Back</a>
        </div>
        @endif
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3 class="text-center" style="padding:10px; margin-bottom:20px">Project lists </h3>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
@include('inc.message')

</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
@if(count($posts) > 0)
@foreach($posts as $post )


    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="step" style="padding:8px">
<div class="thumbnail">
<a href="/posts/{{$post->id}}" style="text-decoration:none">
    <img src="{{$post->image}}" id="post_image" class="img-fluid">
</a>
</div>
</div>
@endforeach
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:40px">
<span style="padding:5px">{{$posts->links()}}</span>
</div>
@else
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h1 class="text-center" style="padding-top:200px; color:#c1f0c5"> No available project!!</h1>
    </div>
@endif
</div>
</div>
@endsection
