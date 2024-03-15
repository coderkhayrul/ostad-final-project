<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(
    )
    {
        $skills = Skill::all();
        return view('admin.components.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Skill::create([
            'name' => $request->name,
            'percentage' => $request->percentage,
            'color' => $request->color,
        ]);

        $notification = [
            'message' => 'Color Created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
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
        return view('admin.components.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
         $request->validate([
            'name' => 'required',
            'percentage' => 'required',


        ]);

        $skill->update($request->all());
        $notification = [
            'message' => 'Skill Created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.skill.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return response()->json([
            'status' => true,
            'message' => 'Skill Deleted Successfully',
        ]);
    }
}
