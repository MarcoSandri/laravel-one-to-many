@extends('admin.layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h1>Nuovo Post</h1>

          <form method="POST" action="{{route('admin.posts.store')}}">

            @csrf
            <div class="form-group">
              <label for="title">Titolo</label>
              <input name="content" type="text" class="form-control" id="title" placeholder="Titolo">
            </div>

            <div class="form-group">
              <label for="content">Contenuto</label>
              <textarea name="content" class="form-control" id="content" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
          
          </form>
        </div>
    </div>
</div>
@endsection