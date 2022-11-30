<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function show(SearchRequest $request) {
        // dd($request->search);
        $articles = Article::where('title', 'like', '%'.$request->search.'%')->paginate(9);
        $categorie = Categorie::orderBy('id')->get();
        return view('search.show', compact('articles', 'categorie'));
    }
}
