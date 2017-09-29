@extends('layouts.admin')
@section('content')

<h1>All Categories</h1>


<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Category Name</th>
        <th>Created</th>
          <th>Updated</th>
      </tr>
    </thead>
    <tbody>
@if($categories)
 @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->created_at->diffForHumans()}}</td>
          <td>{{$category->updated_at->diffForHumans()}}</td>
      </tr>
@endforeach
    @endif

    </tbody>
  </table>

@stop