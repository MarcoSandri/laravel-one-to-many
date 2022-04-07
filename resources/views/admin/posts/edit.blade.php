@extends('admin.layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h1>Nuovo Post</h1>

          <form method="POST" action="{{route('admin.posts.update', $post->id)}}">

            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="title">Titolo</label>
              <input name="title" type="text" class="form-control" id="title" placeholder="Titolo" value="{{old('title', $post->title)}}">
            </div>

            <div class="form-group">
              <label for="content">Contenuto</label>
              <textarea name="content" class="form-control" id="content" rows="10"> {{old('content', $post->content)}} </textarea>
            </div>

            <select class="form-control" id="category_id" name="category_id">
              <option value="">Nessuna categoria</option>
              @foreach ($categories as $category)
                <option {{old('category_id', $post->category_id) == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>

            <button type="submit" class="btn btn-primary my-3">Salva</button>
          
          </form>
        </div>
    </div>
</div>
@endsection