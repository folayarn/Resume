<div class="col-md-3">
</div>
<div class="col-md-6">
    <div class="col-md-6">
       @include('inc.msg')
    </div>

{!!Form::open(['action' => 'PostsController@store', 'method'=>'POST',
'enctype'=>'multipart/form-data']) !!}

<div class="form-group">
{{form::label('title', 'project Name')}}

{{form::text('title','',['class'=>'form-control'])}}

</div>
<div class="form-group">
{{form::label('type', 'project Type')}}

{{form::text('type','',['class'=>'form-control'])}}

</div>
<div class="form-group">
{{form::label('description', 'Description')}}

{{form::textarea('description','',['id'=> 'article-ckeditor' ,'class'=>'form-control'])}}

</div>


<div class="form-group">
{{form::file('cover_image', ['class'=>'form-control'])}}

</div>

{{form::submit('Submit',['class'=>'btn btn-primary'])}}
{!!form::close() !!}
</div>
<div class="col-md-3">
</div>
