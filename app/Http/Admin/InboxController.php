<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inbox;

class InboxController extends Controller
{
    public function index()
    {
    $items = Inbox::all();
    return view('pages.admin.inbox', compact('items'));
    }
}
