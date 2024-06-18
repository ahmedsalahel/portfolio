<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Setting::all();
        return view('dash.setting.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.setting.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $rules = [
            'image' => 'image',
            'github' => 'required|string',
            'name' => 'required|string',
            'linkedin' => 'required|string',
            'description' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
        ];


        $request->validate($rules);

        $allSettingsWithoutImages = $request->except(['image']);

        $setting = Setting::create($allSettingsWithoutImages);

        if ($request->file('image')) {
            $uploadedImage = $setting->addMediaFromRequest('image')
                ->toMediaCollection('setting_image');

            $setting->update([
                'image' => $uploadedImage->getUrl()
            ]);
        }

        return redirect()->route('dashboard.settings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return view('dash.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {

        $rules = [
            'image' => 'required|image',
            'github' => 'required|string',
            'name' => 'required|string',
            'linkedin' => 'required|string',
            'description' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
        ];


        $request->validate($rules);

        $allSettingsWithoutImages = $request->except(['image']);

        $setting->update($allSettingsWithoutImages);

        if ($request->file('image')) {
            $oldData = $setting->media;
            $oldData[0]->delete();

            $uploadedImage = $setting->addMediaFromRequest('image')
                ->toMediaCollection('setting_image');

            $setting->update([
                'image' => $uploadedImage->getUrl()
            ]);
        }

        return redirect()->route('dashboard.settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('dashboard.settings.index');
    }
}
