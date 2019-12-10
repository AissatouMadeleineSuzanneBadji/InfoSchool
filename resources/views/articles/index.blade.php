<table class="table table-striped">
           <tr>
                   <th>#</th>          <th>titre Article</th>           <th>Contenu Article</th>           <th></th>
               </tr>

    @foreach($articles as $article)
        <tr>
            <th>#</th>
            <th>{{$article->name}}</th>
             <th>{{$article->contents}} {{ $article->category->name ?? '' }}</th>
            <th>

                <p><a href="{{route('editer_article',['id'=>$article->id])}}">Editer</a>

                </p>

                <p><a href="{{route('editer_article',['id'=>$article->id])}}">Editer</a>

                </p>
            </th>
        </tr>
    @endforeach
</table>
