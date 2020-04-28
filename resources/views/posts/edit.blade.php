@extends('layout')


@section('content')

<h1 class="text-dark mb-3">Modifier Post : {{ $post->title}}</h1>

    @if ($errors->any())
    <ul class="list-group list-group-flush">
        @foreach ($errors->all() as $error)
                <li class="list-group-item text-danger">{{ $error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('posts.update',['post'=>$post->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
             <label for="title">Titre</label>
             <input type="text" name="title" id="title" value="{{ old('title',$post->title)}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Desription</label>
            <textarea name="description" id="description" class="form-control" rows="4">
                {{ old('description',$post->description)}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option @if ($category->id==$post->category_id) selected @endif value="{{ $category->id }}"> {{ $category->libelle }}</option>
                @endforeach
            </select>
        </div>
    <button type="submit" class="btn btn-warning">Envoyer</button>
</form>
@endsection
