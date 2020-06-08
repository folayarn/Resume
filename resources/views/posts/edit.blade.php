@extends('layouts.app')
@section('content')
<div class="col-md-12" style="padding:8px">
<a href="/posts/{{$posts->id}}" class="btn btn-success">Go Back</a>
    </div>
<div class="col-md-12">
 <div class="text-center" style="padding:6px"> <h3> Edit a project snippet</h3></div>
</div>

<div class="col-md-12" style="margin-bottom:40px">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="col-md-6">
               @include('inc.msg')
            </div>

        {!!Form::open(['action' => ['PostsController@update',$posts->id], 'method'=>'POST',
        'enctype'=>'multipart/form-data']) !!}

        <div class="form-group">
        {{form::label('title', 'project Name')}}

        {{form::text('title',$posts->title,['class'=>'form-control'])}}

        </div>
        <div class="form-group">
        {{form::label('type', 'project Type')}}

        {{form::text('type',$posts->type,['class'=>'form-control'])}}

        </div>
        <div class="form-group">
        {{form::label('description', 'Description')}}

        {{form::textarea('description',$posts->description,['id'=> 'article-ckeditor' ,'class'=>'form-control'])}}

        </div>


        <div class="form-group">
        {{form::file('cover_image', ['class'=>'form-control'])}}

        </div>
{{form::hidden('_method','PUT')}}
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!!form::close() !!}
        </div>
        <div class="col-md-3">
        </div>

    </div>

   </div>


@endsection
