@extends('layouts.admin')

@section('content')
    <h1>Update User</h1>

    <div class="col-sm-3">
        <img class="img-responsive" src="{{$user->photo?$user->photo->path:"http://via.placeholder.com/400x400"}}" />
    </div>
    <div class="col-sm-9">

    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

    <div class="form-group">
        {{ Form::label('name','Name') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group" >
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',[1=>'Active',0=>'In-Active'],null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group" >
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {{ Form::submit('Update',['class'=>'btn btn-primary col-sm-6']) }}
    </div>
    {!! Form::close() !!}




{!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
 <div class="form-group">
     {{ Form::submit('Delete',['class'=>'btn btn-danger col-sm-6']) }}
 </div>
 {!! Form::close() !!}
    @include('includes.form_errors')
    </div>

@stop