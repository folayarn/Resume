@extends('layouts.app')
@section('title')
Homepage
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
   <h4 class="text-left" id="entry">
        <span style="font-weight:bolder;font-size:30pt; color:rgb(141, 61, 134)">I am sola,</span>
        a Freelancer, Software Developer and a Graphic Designer based in
        <span style="color:rgb(14, 75, 14);font-weight:bolder;font-size:20pt">Ni</span>ger <span style="font-weight:bolder;font-size:20pt;color:rgb(14, 75, 14)">ia</span>
      <br/> Scroll down to view some of my previous Projects
      <br/><br/><a href="#foot" class="btn btn-default" style="color:white;background-color:rgb(141, 61, 134)"><span class="fa fa-envelope"> Get in Touch</span></a>

   </h4>
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



