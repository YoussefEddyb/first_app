@extends('layout')


@section('content')
<h1 class="text-dark mb-3">Détail de  utilisateur :
    <span class="badge badge-pill badge-dark"> {{$user->name}}</span>
</h1>

<form >
    <div class="form-group">
      <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name',$user->name)}}" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email',$user->email)}}" class="form-control" readonly>
    </div>
    <a href="{{route('users.index')}}"  class="btn btn-dark btn-lg btn-block">Retour</a>
</form>
@endsection
