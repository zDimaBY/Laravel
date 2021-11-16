@extends('layout')
@section('title', 'user -> '. $user->name)
@section('content')
<div class="card" style="width: 25rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">ID: {{$user->id}}</li>
      <li class="list-group-item">Email: {{$user->email}}</li>
      <li class="list-group-item">Password: {{$user->password}}</li>
      <li class="list-group-item">Created: {{$user->created_at}}</li>
      <li class="list-group-item">Update: {{$user->updated_at}}</li>
    </ul>
  </div>
  <form method="POST" action="{{route('users.destroy', $user)}}">
    <a type="button" class="btn btn-danger m-1" href="{{route('users.edit', $user)}}">Edit</a>
    @csrf
    @method('DELETE')
    <button class="btn btn-danger m-1" type="submit">Delete</button>
    <a href="{{route('users.index')}}" type="button" class="btn btn-info m-1">Back</a>
</form>
@endsection
