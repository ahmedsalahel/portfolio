<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Education::all();
        return view('dash.education.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.education.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|string',
            'country' => 'required|string',
            'section' => 'required|string',
            'description' => 'required|string',
        ]);

        Education::create($request->all());
        return redirect()->route('dashboard.educations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('dash.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|string',
            'country' => 'required|string',
            'section' => 'required|string',
            'description' => 'required|string',
        ]);

        $education->update($request->all());
        return redirect()->route('dashboard.educations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('dashboard.educations.index');
    }
}
