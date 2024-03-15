<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Image;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function generalSetting()
    {
        $setting = GeneralSetting::first();
        return view('admin.generalSetting', compact('setting'));
    }

    public function generalSettingUpdate(Request $request)
    {
        $this->validate($request, [
            'site_title' => 'required',
            'site_email' => 'required|email',
            'site_phone' => 'required',
            'site_address' => 'required',
        ]);

        if ($request->hasFile('site_logo')) {
            $image = saveImage($request->file('site_logo'), 'uploads/setting/');
        } else {
            $image = GeneralSetting::first()->site_logo;
        }
        if ($request->hasFile('site_favicon')) {
            $favicon = saveImage($request->file('site_favicon'), 'uploads/setting/');
        } else {
            $favicon = GeneralSetting::first()->site_favicon;
        }

        GeneralSetting::first()->update([
            'site_logo' => $image,
            'site_favicon' => $favicon,
            'site_title' => $request->site_title,
            'site_email' => $request->site_email,
            'site_phone' => $request->site_phone,
            'site_address' => $request->site_address,
            'site_fax' => $request->site_fax,
            'site_url' => $request->site_url,
            'site_author' => $request->site_author,
            'site_keywords' => $request->site_keywords,
            'site_description' => $request->site_description,
            'site_footer' => $request->site_footer,
        ]);

        $notification = [
            'message' => 'General Setting Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
