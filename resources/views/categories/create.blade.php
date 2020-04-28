@extends('layout')


@section('content')

<h1 class="text-dark mb-3">Ajouter Categorie :</h1>

@if ($errors->any())
    <ul class="list-group list-group-flush">
        @foreach ($errors->all() as $error)
                <li class="list-group-item">{{ $error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('categories.store')}}" method="POST">
        @csrf
        <div class="form-group">
      <label for="libelle">Libelle</label>
        <input type="text" name="libelle" id="libelle" value="{{ old('libelle')}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="icon">Icone</label>
        <input type="text" name="icon" id="icon" value="{{ old('icon')}}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
@endsection
