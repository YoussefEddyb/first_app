@extends('layout')

@section('content')

<h1 class="text-dark mb-3">Liste des posts</h1>


<a href="{{ route('posts.create')}}" class="btn btn-success btn-lg my-4 float-right"><i class="fa fa-plus-circle"></i></a>

<table class="table table-striped">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Categorie</th>
            <th>User</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->category->libelle}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>
                        <a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-primary"> <i class="fa fa-eye"></i></a>
                        <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                        <form action="{{route('posts.destroy',['post'=>$post->id])}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6">Non data trouvé !!!!</td></tr>
                @endforelse
        </tbody>
</table>

@endsection
