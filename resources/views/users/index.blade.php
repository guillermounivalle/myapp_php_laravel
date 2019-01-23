@extends('layouts.app')

@section('content')
<h1> Usuario </h1>
@if(count($users) > 0)
  @foreach($users as $user)
    <div class="card">
      <div class="card-body">
        <h3><a href="user/{{$user->id}}">{{$user->nombre}}</a></h3> 
      </div>
    </div>

  @endforeach
@endif
@endsection