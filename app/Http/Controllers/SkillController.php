<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Skill::all();
        return view('dash.skill.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.skill.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [
            'image' => 'required|image',
            'name' => 'required|string',
        ];

        $request->validate($rule);

        $allSkillsWithoutImages = $request->except(['image']);

        $skill = Skill::create($allSkillsWithoutImages);

        if ($request->file('image')) {
            $uploadedImage = $skill->addMediaFromRequest('image')
                ->toMediaCollection('skill_image');

            $skill->update([
                'image' => $uploadedImage->getUrl()
            ]);
        }

        return redirect()->route('dashboard.skills.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('dash.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $rule = [
            'image' => 'image',
            'name' => 'required|string',
        ];

        $request->validate($rule);

        $allSkillsWithoutImages = $request->except(['image']);

        $skill->update($allSkillsWithoutImages);

        if ($request->file('image')) {
            $oldData = $skill->media;
            $oldData[0]->delete();
            $uploadedImage = $skill->addMediaFromRequest('image')
                ->toMediaCollection('skill_image');

            $skill->update([
                'image' => $uploadedImage->getUrl()
            ]);
        }

        return redirect()->route('dashboard.skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('dashboard.skills.index');
    }
}
