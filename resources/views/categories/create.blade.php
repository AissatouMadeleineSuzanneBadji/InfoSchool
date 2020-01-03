 


<div class="container">
           <div><h1><a href="{{route('categories.index')}}">{{__('Enregistrement d\'un categorie')}}</a></h1></div>
           <div class="container">
                   <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
            <div><input type="file" name="article_image" class="form-control"></div>
             @csrf
                           <div>
                                   <input type="text" name="name" class="form-control" placeholder="le nom du categorie">
                               </div>
                  
                           <div>
                                   <button class="btn btn-primary">Enregistrer</button>
                               </div>
                       </form>


    </div>
</div>
