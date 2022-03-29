<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __construct(public Settings $settings)
    {
        $this->settings = Settings::find(1);
    }
    
    public function instance()
    {
        return Settings::find(1);
    }

    public function settings()
    {
        $settings = $this->settings;

        return view('admin.settings', compact('settings'));
    }

    public function updateStoreLink(Request $request)
    {
        $this->settings->update(['store_link' => $request->store_link]);

        return redirect()->route('dashboard.settings')->with('success', 'External store link updated');
    }

    public function updateCopyrightText(Request $request)
    {
        $this->settings->update(['copyright_text' => $request->copyright_text]);

        return redirect()->route('dashboard.settings')->with('success', 'External store link updated');
    }

    public function updatePrimaryEmail(Request $request)
    {
        $this->settings->update(['email' => $request->email]);

        return redirect()->route('dashboard.settings')->with('success', 'Email updated');
    }
}
