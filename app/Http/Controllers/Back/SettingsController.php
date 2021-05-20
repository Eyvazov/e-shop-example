<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    public function general() {
        $settings = Settings::find(1);
        return view('back.settings.general', compact('settings'));
    }

    public function logoFaviconUpdate(Request $request){
        $request->validate([
            'logo' =>'min:0|max:1024|mimes:jpg,jpeg,png',
            'favicon' =>'min:0|max:1024|mimes:jpg,jpeg,png'
        ]);

        $settings = Settings::find(1);
        $settings->logo = $request->logo;
        $settings->favicon = $request->favicon;

        if ($request->hasFile('logo')){
            $newLogoName = 'Logo-' . $settings->title . '.' . $request->logo->extension();
            $request->logo->move(public_path('/images/general'), $newLogoName);
            $settings->logo = $newLogoName;
        }

        if ($request->hasFile('favicon')){
            $newFaviconName = 'Favicon-' . $settings->title . '.' . $request->favicon->extension();
            $request->favicon->move(public_path('/images/general'), $newFaviconName);
            $settings->favicon = $newFaviconName;
        }


        $settings->save();
        return redirect()->back();
    }

}
