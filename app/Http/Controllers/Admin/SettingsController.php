<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings()
    {
        return view('admin.settings');
    }

    public function updateStoreLink(Request $request)
    {
        return $request->all();
    }

    public function updateCopyrightText(Request $request)
    {
        return $request->all();
    }

    public function updatePrimaryEmail(Request $request)
    {
        return $request->all();
    }
}
