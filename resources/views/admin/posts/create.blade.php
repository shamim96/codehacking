@extends('layouts.admin')
@section('content')

    <h1>Create Post</h1>


    {!! Form::open(['method'=>'post','action'=>'AdminPostsController@store','files'=>true]) !!}

     <div class="form-group">
         {{ Form::label('title','Title') }}
         {{ Form::text('title', null, ['class' => 'form-control']) }}
     </div>
    <div class="form-group">
        {{ Form::label('category_id','Category') }}
        {{ Form::select('category_id',[''=>'-select a category-']+$categories, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('photo_id','Photo') }}
        {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body','Other Details') }}
        {{ Form::textarea('body', null, ['class' => 'form-control','rows'=>5]) }}
    </div>
     <div class="form-group">
         {{ Form::submit('Create',['class'=>'btn btn-primary']) }}
     </div>
     {!! Form::close() !!}


    @include('includes.form_errors')


@stop
