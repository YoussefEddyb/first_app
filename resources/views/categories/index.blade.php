@extends('layout')

@section('content')
<h1 class="text-dark mb-3">Liste des Categories :</h1>
        @if (session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session()->get('status')}}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        @endif

        <a href="{{route('categories.create')}}" class="btn btn-success btn-lg my-4 float-right">
            <span class="text-secondary font-weight-bold">+</span>
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libelle</th>
                    <th>Icone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $category->id}}</td>
                        <td>{{ $category->libelle}}</td>
                        <td>{{ $category->icon}}</td>
                        <td>
                        <a href="{{ route('categories.show',['category'=>$category])}}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('categories.edit',['category'=>$category->id])}}" class="btn btn-warning">Modifier</a>
                        <form class="d-inline" action="{{ route('categories.destroy',['category'=>$category->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        </td>
                    </tr>
                @empty
                        <tr><td colspan="4">Non data trouvé !!!!</td></tr>
                @endforelse
            </tbody>
        </table>
@endsection
