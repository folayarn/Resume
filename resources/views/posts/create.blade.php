<div class="col-md-3">
</div>
<div class="col-md-6">
    <div class="col-md-6">
       @include('inc.msg')
    </div>

{!!Form::open(['action' => 'PostsController@store', 'method'=>'POST',
'enctype'=>'multipart/form-data']) !!}

<div class="form-group">
{{form::label('title', 'Title')}}

{{form::text('title','',['class'=>'form-control','placeholder'=>'enter title'])}}

</div>
<div class="form-group">
{{form::label('type', 'Url')}}

<input type="url" name="url" class="form-control" placeholder="htps://"/>
</div>


<div class="form-group">
{{form::file('cover_image', ['class'=>'form-control'])}}

</div>

{{form::submit('Submit',['class'=>'btn btn-secondary'])}}
{!!form::close() !!}
</div>
<div class="col-md-3">
</div>
