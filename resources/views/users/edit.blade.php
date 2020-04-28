@extends('layout')


@section('content')

<h1 class="text-dark mb-3">Modifier Utilisateur :
    <span class="badge badge-pill badge-dark"> {{$user->name}}</span>
</h1>

@if ($errors->any())
    <ul class="list-group list-group-flush">
        @foreach ($errors->all() as $error)
                <li class="list-group-item">{{ $error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('users.update',['user'=>$user])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name',$user->name)}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ old('email',$user->email)}}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password',$user->password)}}" class="form-control">
        </div>

    <button type="submit" class="btn btn-warning">Envoyer</button>
</form>
@endsection
