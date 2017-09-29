@extends('layouts.admin')
@section('content')

    <h1>All Posts</h1>


    <table class="table">
        <thead>
          <tr>
            <th>No</th>
              <th>Owner</th>
              <th>Category</th>
              <th>Photo</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created</th>
              <th>Deleted</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)
        @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category->name}}</td>
            <td>
             <img width="90px" src="{{$post->photo?$post->photo->path:"http://via.placeholder.com/400x400"}}" />
            </td>
              <td>{{$post->title}}</td>
              <td>{{$post->body}}</td>
              <td>{{$post->created_at}}</td>
              <td>{{$post->updated_at}}</td>
          </tr>
         @endforeach
       @endif

        </tbody>
      </table>
@stop
