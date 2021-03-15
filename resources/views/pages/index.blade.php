@extends('layouts.app')
@section('title')
Space-Tech
@endsection

@section('section')
<div class="row">
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="home">
    <div class="header">
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3"></div>
            <div class="col-xs-0 col-sm-10 col-md-6 col-lg-6">
    <span class="text-left" id="header"><img src="images/hello.png"  width="300"/></span>
    <br/>
   <span class="text-left" id="entry"> I am a Software Developer based in Nigeria
    I am available for Freelance Work and Projects
    I also specialized in other services like Graphics and Digital Marketing Design.
</span>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3"></div>
    </div>

</div>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 ">

</div>
</div>
@endsection


@section('container')
@include('pages.about')

@endsection
@section('project')
@include('pages.project')

@endsection

@section('service')
@include('pages.services')

@endsection

@section('contact')
@include('pages.contact')

@endsection



