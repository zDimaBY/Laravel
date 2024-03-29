@extends('layout')
@section('title', 'users')
@section('content')
<a role="button" class="btn btn-light" href="{{route('users.create')}}">Create user</a>
<table class="table table-dark">
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
{{$users->links()}}
<div style="display: flex">
@foreach ($categories as $categorie)
<nav class="dws-menu">
    <ul>
        <li><p style="color: white" href="#">{{$categorie->category}}</p>
            <ul>
                <div style="margin-left: -45px;">
                    @foreach ($categorie->products as $obgProductes)
                    <li><a class="btn btn-outline-success" style="margin: 5px" href="#">{{$obgProductes->product}}</a></li>
                    @endforeach
                <div>
            </ul>
        </li>
    </ul>
</nav>
@endforeach
</div>
@endsection
