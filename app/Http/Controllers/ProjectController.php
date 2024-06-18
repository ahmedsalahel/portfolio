<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Project::all();
        return view('dash.project.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.project.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|image',
            'link' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
        ];

        $request->validate($rules);

        $allProjectWithoutImages = $request->except(['image']);

        $project = Project::create($allProjectWithoutImages);

        if ($request->file('image')) {
            $uploadedImage = $project->addMediaFromRequest('image')
                ->toMediaCollection('project_image');

            $project->update([
                'image' => $uploadedImage->getUrl()
            ]);
        }

        return redirect()->route('dashboard.projects.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dash.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $rules = [
            'image' => 'image',
            'link' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',

        ];


        $request->validate($rules);

        $allProjectsWithoutImages = $request->except(['image']);

        $project->update($allProjectsWithoutImages);

        if ($request->file('image')) {
            $oldData = $project->media;
            $oldData[0]->delete();
            $uploadedImage = $project->addMediaFromRequest('image')
                ->toMediaCollection('project_image');

            $project->update([
                'image' => $uploadedImage->getUrl()
            ]);
        }

        return redirect()->route('dashboard.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard.projects.index');
    }
}
