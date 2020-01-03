<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter Article</title>
</head>
<body>

<div class="container">
           <div><h1><a href="{{route('articles.index')}}">{{__('Enregistrement d\'un article')}}</a></h1></div>
           <div class="container">
                   <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
            <div><input type="file" name="article_image" class="form-control"></div>
                     @csrf

            @can('admin')
                <a class="dropdown-item" href="/admin/">Back Office</a>
            @endcan

                           <div>
                                   <input type="text" name="title" class="form-control" placeholder="le titre de l\article">
                               </div>
                   
                           <div>
                                   <textarea name="contents" id="contents" cols="30" rows="10" class="form-control" placeholder="Le contenu"></textarea>
                               </div>
                           <div>
                                   <button class="btn btn-primary">Enregistrer</button>
                               </div>
                       </form>
    </div>
</div>



@if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

</body>
</html>


