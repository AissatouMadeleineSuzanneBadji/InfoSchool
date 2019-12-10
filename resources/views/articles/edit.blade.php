<form action="{{route('articles.update',['id'=>$articles->id])}}" method="post">
       @csrf
       @method('patch')
       <div><input type="text" name="title" class="form-control" placeholder="le titre de l\article" value="{{$article->title}}"></div>
       <div> <textarea name="contents" id="contents" cols="30" rows="10" class="form-control" placeholder="Le contenu">{{$article->contents}}</textarea> </div>
       <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

<form action="{{route('update_articles',['id'=>$articles->id])}}
    " method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="title" class="form-control" placeholder="le titre de l\article" value="{{$article->title}}"></div>
    <div> <textarea name="description" id="contents" cols="30" rows="10" class="form-control" placeholder="Le contenu">{{$article->contents}}</textarea> </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
