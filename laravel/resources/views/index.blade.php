@extends('layout')
@section('title', 'users')
@section('content')
<a role="button" class="btn btn-dark" href="{{route('users.create')}}">Create user</a>
<table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Name</th>
       <th scope="col">Email</th>
       <th scope="col">password</th>
     </tr>
   </thead>
   <tbody>
       @foreach ($users as $user)
       <tr>
         <th scope="row">{{$user->id}}</th>
         <td><a href="{{route('users.show', $user)}}">{{$user->name}}</a></td>
         <td><a href="{{route('users.show', $user)}}">{{$user->email}}</a></td>
         <td><a href="{{route('users.show', $user)}}">{{$user->password}}</a></td>
         <td>
            <form method="POST" action="{{route('users.destroy', $user)}}">
                <a type="button" class="btn btn-danger m-1" href="{{route('users.edit', $user)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger m-1" type="submit">Delete</button>
            </form>
        </td>
       </tr>
       @endforeach
   </tbody>
</table>
@endsection
