<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $items = Service::all();
        return view('pages.services', compact('items'));
    }

    public function detail($id){
        $item = Service::findOrFail($id);
        return view('pages.service-detail', compact('item'));
    } 
}
