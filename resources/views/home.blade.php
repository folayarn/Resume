@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <br>
                  <small>  welcome back {{auth::User()->name}}! </small>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul style="list-style:none">
<li style="padding-bottom:10px"><a href="/works" >Publish Project</a></li>
                    <li style="padding-bottom:10px"><a href="/posts" class="btn btn-success">Post
                    <span class="badge" style="background:white">{{$posts}}</span></a></li>

                    <li style="padding-bottom:10px"><a href="/messages" class="btn btn-success">Messages
                    <span class="badge" style="background:white">{{$msg}}</span></a></li>

                    </ul>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
