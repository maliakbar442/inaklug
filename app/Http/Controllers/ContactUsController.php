<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbox;
use App\Http\Requests\InboxRequest;

class ContactUsController extends Controller
{
    public function index()
    {

        return view('pages.contact-us');
    }

    public function create(InboxRequest $request)
    {
        $data = $request->all();
        Inbox::create($data);
        return redirect()->route('contact-us')->with('sukses','Pesan Berhasil Dikirim');
       
    }
}
