<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
   
   public function index()
   {

   	 $articles = Article::all();
   	 return view('article.index', compact('articles'));

   }

   public function create()
   {

   	  return view('article.create');
   }

   public function store(Request $request)
   {

      $articles = new Article();
      $articles->code = $request->code;
      $articles->description = $request->description;
      $articles->amount = $request->amount;
      $articles->price = $request->price;
      $articles->save();
      return redirect('/');
   }

   public function edit(Article $article)
   {
      return view('article.edit', compact('article'));
   }

   public function update(Request $request, Article $article)
   {
       
      $article->code = $request->code;
      $article->description = $request->description;
      $article->amount = $request->amount;
      $article->price = $request->price;
      $article->save();
      return redirect('/');

   }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/');
    }
}
