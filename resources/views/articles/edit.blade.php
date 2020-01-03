<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Article</title>
</head>
<body>

<form action="{{route('update_articles',['id'=>$article->id])}}" method="post" enctype="multipart/form-data">

<form action="{{route('update_articles',['id'=>$article->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" title="title" class="form-control" placeholder="le titre de l/article" value="{{$article->title}}"></div>
    <div> <textarea content="contents" id="contents" cols="30" rows="10" class="form-control" placeholder="Le contenu">{{$article->contents}}</textarea> </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>

    <div class="row">
        <div class="col-6 text-right"><img src="{{asset($article->images)}}" alt="{{$article->name}}" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
    </div>
    <div>
        <input type="file" name="article_image" class="form-control">
    </div>


</form>
</body>
</html>
