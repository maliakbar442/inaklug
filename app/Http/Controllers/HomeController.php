<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Article::take(2)->orderBy('id', 'desc')->get();
        $items2 = Article::skip(2)->take(2)->orderBy('id', 'desc')->get();
        $service = Service::all();
        return view('pages.home', compact('items','items2', 'service'));
    }
}
