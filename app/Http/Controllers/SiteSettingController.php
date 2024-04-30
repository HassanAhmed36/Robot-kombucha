<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index', [
            'setting' => SiteSetting::find(1)
        ]);
    }

    public function update(Request $request)
    {
        $setting = SiteSetting::find(1);
        $setting->update([
            'payment_active' => !$setting->payment_active
        ]);

        return response('Setting updated', 200);
    }
}
