
@extends('layout')
@section("contenu_page")

    <h1>Affiche Articles</h1>
    <table class="table table-striped table-bordered">
        <thead>
        <th>#</th>
        <th>Title</th>
        <th>Contents</th>
        <th>Action</th>
        </thead>
        <tbody>
    @foreach($articles as $article)
        <tr>
            <th>#</th>
            <th>{{$article->title}}</th>
            <th><p><img src="{{$article->images ? asset($article->images) : asset('uploads/images/default.png')}}" alt="{{$article->name}}" width="50"></p>{{$article->contents}} {{ $article->categories->title ?? '' }}</th>

            <th>
              <p><a class="btn btn-primary" href="{{route('editer_articles',['id'=>$article->id])}}">Editer</a></p>

              <form action="article/{{$article->id}}" method="post">
              @csrf
              @method('delete')
              <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
              </form>
          </th>

          </tr>
     @endforeach
        </tbody>
    </table>
@endsection




