

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Categories</title>
</head>
<body>

<form action="{{route('categories.update',['id'=>$category->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="name" class="form-control" placeholder="le nom du categorie" value="{{$category->name}}"></div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
</body>
</html>
