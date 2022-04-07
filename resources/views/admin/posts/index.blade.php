@extends('admin.layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <a href="{{route('admin.posts.create')}}" class="btn btn-primary mb-3">Nuovo Post</a>

            {{-- table --}}
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        
                    <tr>
                      <th scope="row">{{$post['id']}}</th>
                      <td>{{$post['title']}}</td>
                      <td>{{substr($post['content'], 0, 30)}}</td>
                      <td>{{$post['slug']}}</td>
                      <td>{{$post['category']['name']}}</td>
                      <td class="d-flex">
                        <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Vai</a>
                        <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-secondary">Modifica</a>
                        
                        <form method="POST" action="{{route('admin.posts.destroy', $post->id)}}">

                          @csrf
                          @method('DELETE')

                          <button type="sumbit" class="btn btn-danger">Elimina</button>

                        </form>
                      </td>
                    </tr>

                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection