<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table class="table table-striped">
           <tr>
                   <th>#</th>          <th>titre Article</th>           <th>Contenu Article</th>           <th></th>
               </tr>

    @foreach($articles as $article)
        <tr>
            <th>#</th>
            <th>{{$article->title}}</th>
             <th>{{$article->contents}} {{ $article->categories->title ?? '' }}</th>
            <th>

                <p><a href="{{route('editer_articles',['id'=>$article->id])}}">Editer</a>

                </p>

                <p><a href="{{route('editer_articles',['id'=>$article->id])}}">Editer</a>

                </p>
            </th>
        </tr>
    @endforeach
</table>


</body>
</html>
