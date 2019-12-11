<?php

namespace App\Http\Controllers;
use App\Article;

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
        return view('articles.create');
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
            'contents' => 'max:1000000'
        ]);

        $article = new \App\Article();
        $article->title = $request->input('title');
        $article->contents = $request->input('contents');
        $article->user_id = 1;
        $article->categories_id = 1;
        $article->save();
        $article->categories_id = $request->input('categories_id');
        return redirect('/articles');
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
        $articles = \App\Article::find($id);//on recupere l/article
        return view('articles.edit', compact('articles'));
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
        if($article ){
            $article ->update([
                'title' => $request->input('title'),
                'contents' => $request->input('contents'),
                'categories_id' => $request->input('categories_id'),
                'user_id' => 1
            ]);
        }
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }

}
