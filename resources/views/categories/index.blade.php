



@extends('layout')
@section("contenu_page")

    <h1>Affiche des Categories</h1>
    <table class="table table-striped table-bordered">
        <thead>
        <th>#</th>
        <th>Non</th>
        <th>Methode</th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>

                <th>#</th>
                <th>{{$category->name}} {{ $category->categories->name ?? '' }}</th>
                <th>

                     <p><a class="btn btn-primary" href="{{route('editer_categories',['id'=>$category->id])}}">Editer</a></p>
                    <form action="category/{{$category->id}}" method="post">
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

