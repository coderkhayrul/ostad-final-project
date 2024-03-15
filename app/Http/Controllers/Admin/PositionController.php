<?php

namespace App\Http\Controllers\Admin;

use App\Models\Position;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::all();
        return view('admin.components.position.index', compact('positions'));
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
         Position::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'remarks' => $request->remarks,
        ]);

        $notification = [
            'message' => 'Position Created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        return view('admin.components.position.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Position $position)
    {
        $request->validate([
            'name' => 'required',
            'remarks' => 'required',
        ]);

        $position->update($request->all());
        $notification = [
            'message' => 'Position Created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.position.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->delete();

        return response()->json([
            'status' => true,
            'message' => 'Position Deleted Successfully',
        ]);
    }
}
