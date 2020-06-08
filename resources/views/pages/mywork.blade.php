@extends('layouts.app')
@section('content')
<div class="col-md-12" style="padding:8px">
    <a href="/home" class="btn btn-success">Go Home</a>
    </div>
<div class="col-md-12">
 <div class="text-center" style="padding:6px"> <h3> create a project snippet</h3></div>
</div>



<div class="col-md-12" style="margin-bottom:40px">
    <div class="row">
        @include('posts.create')
    </div>

   </div>


@endsection
