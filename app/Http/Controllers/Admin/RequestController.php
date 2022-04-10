<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request as RequestModel;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = RequestModel::all();

        return view('admin.requests.index', compact('requests'));
    }

    public function show(RequestModel $request)
    {
        return view('admin.requests.show', compact('request'));
    }

    public function destroy(RequestModel $request)
    {
        $request->delete();

        return redirect()->route('dashboard.requests.index')->with('success', 'Request deleted');
    }
}
