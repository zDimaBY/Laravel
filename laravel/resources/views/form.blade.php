@extends('layout')
@section('title', isset($user) ? 'Update -> ' . $user->name : 'New user')
@section('content')
<form method="POST" @if (isset($user)) action="{{route('users.update', $user)}}" @else action="{{route('users.store')}}" @endif>
    @csrf
    @isset($user)
        @method('PUT')
    @endisset
    <div class="row g-3">
        <div class="col">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="name" value="{{old('name', isset($user) ? $user->name : null) }}">
            @error('name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <input type="text" class="form-control" name="email" placeholder="Email" aria-label="email" value="{{old('email', isset($user) ? $user->email : null)}}">
            @error('email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <input type="text" class="form-control" name="password" placeholder="Password" aria-label="password" value="{{old('password', isset($user) ? $user->password : null)}}">
            @error('password')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
      </div>
      <button type="submit" class="btn btn-light mt-2">{{isset($user) ? 'Update' : 'Create'}}</button>
      <a href="{{route('users.index')}}" type="button" class="btn btn-info mt-2">Back</a>
</form>
@endsection
