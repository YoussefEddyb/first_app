@extends('layout')


@section('content')
<h1 class="text-dark mb-3">Détail de  Categorie :
    <span class="badge badge-pill badge-dark"> {{$categorie->libelle}}</span>
</h1>

<form >
    <div class="form-group">
      <label for="libelle">Libelle</label>
        <input type="text" name="libelle" id="libelle" value="{{ old('libelle',$categorie->libelle)}}" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="icon">Icone</label>
        <input type="text" name="icon" id="icon" value="{{ old('icon',$categorie->icon)}}" class="form-control" readonly>
    </div>
</form>
@endsection
