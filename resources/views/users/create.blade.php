@extends('layout')


@section('content')

<h1 class="text-dark mb-3">Ajouter utilisateur :</h1>

@if ($errors->any())
    <ul class="list-group list-group-flush">
        @foreach ($errors->all() as $error)
                <li class="list-group-item">{{ $error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('users.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name')}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email"  id="email" value="{{ old('email')}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  id="password" class="form-control">
        </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
@endsection
