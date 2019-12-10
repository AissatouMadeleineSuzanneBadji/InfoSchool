     
<div class="container">
           <div><p><a href="{{route('articles.index')}}">{{__('Enregistrement d\'un article')}}</a></p></div>
           <div class="container">
                   <form action="{{route('articles.store')}}" method="post">
                           @csrf
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

