<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = \App\Article::orderBy('created_at', 'DESC')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**$this->authorize('admin');*/
        /**$categories = \App\Category::pluck('name', 'id');*/
        return view('articles.create', compact('articles'));

        $article->user_id = Auth::id();
        $article->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|max:300|min:5',
            'contents' => 'max:1000000',
            "article_image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048',
        ]);
        $article = new Article();
        //On verfie si une image est envoyée
        if ($request->has('articles_image')) {
            //On enregistre l'image dans un dossier
            $image = $request->file('artiles_image');
            //Nous allons definir le nom de notre image en combinant le nom de l/article et un timestamp
            $image_name = Str::slug($request->input('name')) . '_' . time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/images/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $article->images = $folder . $image_name . '.' . $image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
        $article->title = $request->input('title');
        $article->contents = $request->input('contents');
        $article->category_id = $request->input('category_id');
        $article->user_id = 1;
        $article->categories_id = 1;
        $article->save();
        return redirect(route('articles.index'));

    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = \App\Article::find($id);
        return view('articles.edit', compact('article'));
        $user = Auth::user();
        $user_id = Auth::id();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $article  = \App\article ::find($id);
      if($article ) {
          $article->update([
              'title' => $request->input('title'),
              'contents' => $request->input('contents'),
              /**'categories_id' => $request->input('categories_id'),**/
              'user_id' => 1,
          ]);

          $data = $request->validate([
          'title'   => 'required',
          'contents' => 'required | numeric',
          'article_image' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048'
          ]);


      }

        $article = \App\Article::find($id);
        if($article) {
            if ($request->has('article_image')) {
                //On enregistre l'image dans une variable
                $image = $request->file('article_image');
                if (file_exists(public_path() . $article->images))//On verifie si le fichier existe
                    Storage::delete(asset($article->images));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/images dans public
                $folder = '/uploads/images/';
                $image_name = Str::slug($request->input('name')) . '_' . time();
                $article->images = $folder . $image_name . '.' . $image->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
                $this->uploadImage($image, $folder, 'public', $image_name);
            }
            $article->title = $request->input('title');
            $article->contents = $request->input('contents');
            $article->categories_id = $request->input('categories_id');

            $article->save();

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = \App\Article::find($id);
        if($article)
            $article->delete();

        return redirect()->route('articles.index');
    }


    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}
