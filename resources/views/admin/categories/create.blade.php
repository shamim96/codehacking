@extends('layouts.admin')
@section('content')

<h1>Add a Category</h1>

    {!! Form::open(['method'=>'post','action'=>'CategoriesController@store']) !!}
     {!! csrf_field() !!}
     <div class="form-group">
         {{ Form::label('name','Category Name') }}
         {{ Form::text('name', null, ['class' => 'form-control']) }}
     </div>
     <div class="form-group">
         {{ Form::submit('Create',['class'=>'btn btn-primary']) }}
     </div>
     {!! Form::close() !!}

@stop