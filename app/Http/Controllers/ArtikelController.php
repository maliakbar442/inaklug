<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArtikelController extends Controller
{
    public function index()
    {
        $header = Article::orderBy('id','desc')->first();
        $artikelterkait = Article::skip(1)->take(2)->orderBy('id', 'desc')->get();
        $items = Article::all();
        return view('pages.artikel', compact('header', 'artikelterkait', 'items'));
    }

    public function detail($id){
        $item = Article::findOrFail($id);
        $relatedArticle = Article::where('id','!=', $id)->take(2)->orderBy('id','desc')->get();
        return view('pages.artikel-detail', compact('item','relatedArticle'));
    } 
}
