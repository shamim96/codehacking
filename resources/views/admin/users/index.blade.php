@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table">
        <thead>
          <tr>
<th>id</th>
<th>Name</th>
<th>Photo</th>
<th>Email</th>
<th>Roll</th>
<th>Status</th>
<th>Created</th>
<th>Updated</th>
          </tr>
        </thead>
        <tbody>
@if($users)
@foreach($users as $user)
          <tr>
<td>{{$user->id}}</td>
<td><a href="{{route('users.edit',$user->id)}}"> {{$user->name}} </a></td>
<td>
    <img width="70px" src="{{$user->photo?$user->photo->path:"no photo"}}" />
</td>
<td>{{$user->email}}</td>
              <td>{{$user->role->name}} </td>
<td>{{$user->is_active==1?"Active":"Disable"}}</td>
<td>{{$user->created_at->diffForHumans()}}</td>
<td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
   @endforeach
  @endif
        </tbody>
      </table>

@stop