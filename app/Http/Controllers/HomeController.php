<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $categorie = Categorie::orderBy('id')->get();

        // A NE PAS MANQUER

        $dontMissArticles = Article::where('categorie_id', '=', 2)->get();

        // FAITS DIVERS

        $miscArticles = Article::where('categorie_id', '=', 1)->limit(3)->get();

        // SPORTS

        $sportsArticles = Article::where('categorie_id', '=', 3)->limit(3)->get();

        // CULTURE

        $cultureArticles = Article::where('categorie_id', '=', 7)->limit(3)->get();

        // LES PLUS LUS

        // LE LIVE

        $liveArticles = Article::orderBy('when')->limit(9)->get();

        return view('home.index', compact(
            'dontMissArticles',
            'miscArticles',
            'sportsArticles',
            'cultureArticles',
            'liveArticles',
            'categorie'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
