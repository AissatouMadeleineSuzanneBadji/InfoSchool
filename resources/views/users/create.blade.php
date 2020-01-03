

<div class="container">
           <div><h1><a href="{{route('articles.index')}}">{{__('Enregistrement d\'un article')}}</a></h1></div>
           <div class="container">
                   <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
            <div><input type="file" name="article_image" class="form-control"></div>
            
                           <div>
                                   <input type="text" name="name" class="form-control" placeholder="mettez votre nom">
                            </div>
                            <div>
                                   <input type="text" email="title" class="form-control" placeholder="mettez votre email">
                            </div>
                   
                             <div>
                                   <input type="text" email="title" class="form-control" placeholder="mettez votre email">
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
