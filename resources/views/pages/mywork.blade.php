@extends('layouts.app_login')
@section('title')
Post Projects
@endsection
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:100px">
    <a href="/home" class="btn btn-success">Go Home</a>
    </div>
<div class="col-md-12">
 <div class="text-center" style="padding:6px"> <h3>share your project with visitors</h3></div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:40px">
    <div class="row">
        @include('posts.create')
    </div>

   </div>


@endsection
