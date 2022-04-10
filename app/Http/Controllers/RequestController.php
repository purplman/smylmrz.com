<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('app.contact');
    }

    public function handle(Request $request)
    {
        ModelsRequest::create($request->all());

        return redirect()->route('contact');
    }
}
