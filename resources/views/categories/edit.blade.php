@extends('layout')


@section('content')

<h1 class="text-dark mb-3">Modifier Categorie :
    <span class="badge badge-pill badge-dark"> {{$categorie->libelle}}</span>
</h1>

@if ($errors->any())
    <ul class="list-group list-group-flush">
        @foreach ($errors->all() as $error)
                <li class="list-group-item">{{ $error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('categories.update',['category'=>$categorie->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
      <label for="libelle">Libelle</label>
        <input type="text" name="libelle" id="libelle" value="{{ old('libelle',$categorie->libelle)}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="icon">Icone</label>
        <input type="text" name="icon" id="icon" value="{{ old('icon',$categorie->icon)}}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
@endsection
